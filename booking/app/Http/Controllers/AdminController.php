<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\SpecialDate;
use App\Models\Facility;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ClientPagesController;

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
                return view('admin.facilities');
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

    public function get_roomtype_edit_page($id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $roomtype = RoomType::find($id);
                return view('admin.singleroomtype')->with('roomtype', $roomtype);
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function edit_roomtype(Request $request, $id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $roomtype = RoomType::find($id);
                $roomtype->update(['type' => $request->type, 'description' => $request->description, 'price' => $request->price, 'capacity' => $request->capacity]);
                return redirect()->back()->with('message', 'yes');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_add_new_roomtype_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.addroomtype');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function add_roomtype(Request $request) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $roomtype = new RoomType;
                $roomtype->type = $request->type;
                $roomtype->description = $request->description;
                $roomtype->price = $request->price;
                $roomtype->capacity = $request->capacity;
                $roomtype->save();
                return redirect()->route('admin-rooms');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_add_special_page() {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                return view('admin.addspecial');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function add_special(Request $request) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $data = explode('-', $request->dateStart);
                $start = ['year' => intval($data[0]), 'month' => intval($data[1]), 'day' => intval($data[2])];

                $data = explode('-', $request->dateEnd);
                $end = ['year' => intval($data[0]), 'month' => intval($data[1]), 'day' => intval($data[2])];

                //dd($start);
                if($request->type != 'no' && ClientPagesController::validate_dates($start, $end)) {
                    $special = new SpecialDate;
                    $special->dateStart = $request->dateStart;
                    $special->dateEnd = $request->dateEnd;
                    $special->price = $request->price;
                    $special->id_RoomType = $request->type;
                    $special->save();
                    return redirect()->route('admin-specials');
                }else {
                    return redirect()->back()->with('errMsg', 'no');
                }
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function get_edit_special_page($id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $special = SpecialDate::find($id);
                return view('admin.singlespecial')->with('special', $special);
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

    public function edit_special(Request $request, $id) {
        if(Session::has('user')) {
            if(Session::get('user')['userType'] === 'admin') {
                $special = SpecialDate::find($id);
                $data = ClientPagesController::convert_date($request->dateStart, $request->dateEnd);
                if(ClientPagesController::validate_dates($data['start'], $data['end'])) {
                    $special->update(['dateStart' => $request->dateStart, 'dateEnd' => $request->dateEnd, 'price' => $request->price, 'id_RoomType' => $request->type]);
                    return redirect()->back()->with('message', 'yes');
                }
                return redirect()->back()->with('errMsg', 'no');
            }else{
                return redirect()->back();
            }
        }else {
            return redirect()->back();
        }
    }

}