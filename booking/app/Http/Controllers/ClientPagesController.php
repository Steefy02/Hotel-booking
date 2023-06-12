<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class ClientPagesController extends Controller {

    public static $days = [1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31];

    public function db_test() {
        return view('dbtest');
    }

    public function get_terms() {
        return view('auth.terms');
    }

    public function get_contact() {
        return view('contact');
    }
    
    public function get_room($id) {
        $room = Room::find($id);
        return view('room')->with('room', $room);
    }

    public function get_checkout() {
        return view('checkout');
    }

    public static function validate_dates($start, $end) {
        if($start['year'] > $end['year']) {
            return false;
        }else if($start['year'] == $end['year']){
            if($start['month'] > $end['month']) {
                return false;
            }else if($start['month'] == $end['month']) {
                if($start['day'] >= $end['day']) {
                    return false;
                }else {
                    return true;
                }
            }else {
                return true;
            }
        }else {
            return true;
        }
    }

    public static function calc_days($start, $end) {
        $days = 0;

        if(self::validate_dates($start, $end)) {
            if($start['month'] == $end['month']) {
                $days += $end['day'] - $start['day'];
            }else {
                $days += self::$days[$start['month']] - $start['day'] + $end['day'];
            }
        }

        return $days;
    }
}