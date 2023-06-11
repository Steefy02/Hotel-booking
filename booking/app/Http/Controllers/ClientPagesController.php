<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller {

    public function db_test() {
        return view('dbtest');
    }

    public function get_terms() {
        return view('auth.terms');
    }

    public function get_contact() {
        return view('contact');
    }
    
    public function get_room() {
        return view('room');
    }

    public function get_checkout() {
        return view('checkout');
    }
}