<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function listing(){
        $hotels = Hotel::all();
        return view('admin.list',[
            'hotels'=>$hotels
        ]);
    }
    public function single($id){
        $hotel = Hotel::find($id);
        $rooms = Room::where('hotel_id',$id)->get();
        $images = Image::where('hotel_id',$id)->get();
        $img = Image::where('hotel_id',$id)->first();
        return view('admin.single',[
            'hotel'=>$hotel,
            'rooms'=>$rooms,
            'images'=>$images,
            'img'=>$img
        ]);
    }
}
