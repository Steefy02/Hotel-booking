<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller {

    public function db_test() {
        return view('dbtest');
    }

}