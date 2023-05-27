<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller {

    private $tab_name = "TypeRoom";

    public function get_data($id) {
        $data = DB::select("SELECT * FROM " . $this->tab_name . " WHERE id_RoomType = " . $id);
    }

}