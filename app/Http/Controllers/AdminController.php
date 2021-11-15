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
    public function addUser(){
        return view('admin.addUser');
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
    public function deleteHotel($id){
        $findHotel = Hotel::find($id);
        $findRoom = Room::where('hotel_id',$findHotel->id)->delete();
        $findImage = Image::where('hotel_id',$findHotel->id)->delete();
        $findHotel->delete();
        return redirect(url('admin/listing'));
    }
    public function deleteRoom($id){
        $deleteRoom = Room::find($id);
        $deleteRoom->delete();
        return redirect()->back();
    }
}
