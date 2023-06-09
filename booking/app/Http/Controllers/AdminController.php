<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('web');
        //$this->middleware('guest')->except('logout');
    }

    public function get_admin_dashboard() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.main');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_users_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.users');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_users_edit_page($id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $user = User::find($id);
                return view('admin.singleuser')->with('user', $user);
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_rooms_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.rooms');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_bookings_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.bookings');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_packages_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.packages');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_specials_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.special');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function edit_user(Request $request, $id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $user = User::find($id);
                $user->update(['username' => $request->username, 'name' => $request->name, 'email' => $request->email, 'phoneNumber' => $request->phoneNumber, 'userType' => $request->userType]);
                return redirect()->back()->with('message', 'yes');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_room_edit_page($id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $room = Room::find($id);
                return view('admin.singleroom')->with('room', $room);
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function edit_room(Request $request, $id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $room = Room::find($id);
                $room->update(['roomNumber' => $request->number, 'status' => $request->status, 'id_RoomType' => $request->type]);
                return redirect()->back()->with('message', 'yes');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

}