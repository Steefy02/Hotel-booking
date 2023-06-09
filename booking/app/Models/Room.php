<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 
class Room extends Model
{
    protected $table = "Room";
    protected $primaryKey = 'id_Room';

    protected $fillable = [
        'roomNumber',
        'status',
        'image',
        'id_RoomType'
    ];
}

