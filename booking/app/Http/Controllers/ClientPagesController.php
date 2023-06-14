<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use DB;

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

    public static function is_date_in($date, $start, $end) {
        if(($date['year'] >= $start['year'] && $date['year'] <= $end['year']) && ($date['month'] >= $start['month'] && $date['month'] <= $end['month']) && ($date['day'] >= $start['day'] && $date['day'] <= $end['day'])) {
            return true;
        }
        return false;
    }

    public static function convert_date($start, $end) {
        $data = explode('-', $start);
        $startFin = ['year' => intval($data[0]), 'month' => intval($data[1]), 'day' => intval($data[2])];

        $data = explode('-', $end);
        $endFin = ['year' => intval($data[0]), 'month' => intval($data[1]), 'day' => intval($data[2])];

        return ['start' => $startFin, 'end' => $endFin];
    }

    public static function get_facilities_for_room($room_id) {
        return DB::select('select * from AssociationFacility where id_Room = ' . $room_id);
    }
}
