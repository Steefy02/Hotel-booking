<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller {

    public function db_test() {
        return view('dbtest');
    }

    public function forgot_password() {
        return view('auth.passwords.forgotPassword');
    }

    public function get_terms() {
        return view('auth.terms');
    }
}