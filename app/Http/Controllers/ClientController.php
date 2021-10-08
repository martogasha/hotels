<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $hotels = Hotel::all();
        return view('listing',[
            'hotels'=>$hotels
        ]);
    }
    public function flights(){
        return view('flights');
    }
    public function flightSingle(){
        return view('flightSingle');
    }
    public function home(){
        $hotels = Hotel::all();
            return view('welcome',[
                'hotels'=>$hotels
            ]);
    }
    public function single($id){
        $hotel = Hotel::find($id);
        $rooms = Room::where('hotel_id',$id)->get();
        $images = Image::where('hotel_id',$id)->get();
        $img = Image::where('hotel_id',$id)->first();
        return view('single',[
            'hotel'=>$hotel,
            'rooms'=>$rooms,
            'images'=>$images,
            'img'=>$img
        ]);
    }
    public function list(){
        return view('list');
    }
    public function addHotel(){
        $hotels = Hotel::all();
        return view('addHotel',[
            'hotels'=>$hotels
        ]);
    }
    public function saveHotel(Request $request)
    {
        $saveHotel = new Hotel();
        $saveHotel->hotel_name = $request->hotelName;
        $saveHotel->hotel_phone = $request->hotelPhone;
        $saveHotel->hotel_about = $request->hotelAbout;
        $saveHotel->hotel_email = $request->hotelEmail;
        $saveHotel->hotel_minimum_nights = $request->minimumNights;
        $saveHotel->security_deposit = $request->securityDeposit;
        $saveHotel->hotel_category = $request->hotelCategory;
        $saveHotel->hotel_type = $request->hotelType;
        $saveHotel->longitude = $request->longitude;
        $saveHotel->latitude = $request->latitude;
        $saveHotel->city = $request->city;
        $saveHotel->hotel_amenities = $request->amenities[0];
        if (isset($request->amenities[1]))

            $saveHotel->hotel_amenities1 = $request->amenities[1];
        if (isset($request->amenities[2]))

            $saveHotel->hotel_amenities2 = $request->amenities[2];
        if (isset($request->amenities[3]))

            $saveHotel->hotel_amenities3 = $request->amenities[3];
        if (isset($request->amenities[4]))

            $saveHotel->hotel_amenities4 = $request->amenities[4];
        if (isset($request->amenities[5]))

            $saveHotel->hotel_amenities5 = $request->amenities[5];
        if (isset($request->amenities[6]))

            $saveHotel->hotel_amenities6 = $request->amenities[6];
        if (isset($request->amenities[7]))

            $saveHotel->hotel_amenities7 = $request->amenities[7];
        if (isset($request->amenities[8]))

            $saveHotel->hotel_amenities8 = $request->amenities[8];
        if (isset($request->amenities[9]))

            $saveHotel->hotel_amenities9 = $request->amenities[9];
        if (isset($request->amenities[10]))

            $saveHotel->hotel_amenities10 = $request->amenities[10];
        if (isset($request->amenities[11]))

            $saveHotel->hotel_amenities11 = $request->amenities[11];
        if (isset($request->amenities[12]))

            $saveHotel->hotel_amenities12 = $request->amenities[12];
        if (isset($request->amenities[13]))

            $saveHotel->hotel_amenities13 = $request->amenities[13];
        if (isset($request->amenities[14]))

            $saveHotel->hotel_amenities14 = $request->amenities[14];
        if (isset($request->amenities[15]))

            $saveHotel->hotel_amenities15 = $request->amenities[15];
        if (isset($request->amenities[16]))

            $saveHotel->hotel_amenities16 = $request->amenities[16];
        if (isset($request->amenities[17]))

            $saveHotel->hotel_amenities17 = $request->amenities[17];
        if (isset($request->amenities[18]))

            $saveHotel->hotel_amenities18 = $request->amenities[18];
        if (isset($request->amenities[19]))

            $saveHotel->hotel_amenities19 = $request->amenities[19];
        if (isset($request->amenities[20]))

            $saveHotel->hotel_amenities20 = $request->amenities[20];
        if (isset($request->amenities[21]))

            $saveHotel->hotel_amenities21 = $request->amenities[21];
        if (isset($request->amenities[22]))

            $saveHotel->hotel_amenities22 = $request->amenities[22];
        if (isset($request->amenities[23]))

            $saveHotel->hotel_amenities23 = $request->amenities[23];
        if (isset($request->amenities[24]))

            $saveHotel->hotel_amenities24 = $request->amenities[24];
        if (isset($request->amenities[25]))

            $saveHotel->hotel_amenities25 = $request->amenities[25];
        if (isset($request->amenities[26]))

            $saveHotel->hotel_amenities26 = $request->amenities[26];
        if (isset($request->amenities[27]))

            $saveHotel->hotel_amenities27 = $request->amenities[27];
        if (isset($request->amenities[28]))

            $saveHotel->hotel_amenities28 = $request->amenities[28];
        if (isset($request->amenities[29]))

            $saveHotel->hotel_amenities29 = $request->amenities[29];
        if (isset($request->amenities[30]))

            $saveHotel->hotel_amenities30 = $request->amenities[30];
        if (isset($request->amenities[31]))

            $saveHotel->hotel_amenities31 = $request->amenities[31];
        if (isset($request->amenities[32]))

            $saveHotel->hotel_amenities32 = $request->amenities[32];
        if (isset($request->amenities[33]))

            $saveHotel->hotel_amenities33 = $request->amenities[33];
        if (isset($request->amenities[34]))

            $saveHotel->hotel_amenities34 = $request->amenities[34];
        if (isset($request->amenities[35]))

            $saveHotel->hotel_amenities35 = $request->amenities[35];
        if (isset($request->amenities[36]))

            $saveHotel->hotel_amenities36 = $request->amenities[36];
        if (isset($request->amenities[37]))

            $saveHotel->hotel_amenities37 = $request->amenities[37];
        if (isset($request->amenities[38]))

            $saveHotel->hotel_amenities38 = $request->amenities[38];
        if (isset($request->amenities[39]))

            $saveHotel->hotel_amenities39 = $request->amenities[39];
        if (isset($request->amenities[40]))

            $saveHotel->hotel_amenities40 = $request->amenities[40];
        if (isset($request->amenities[41]))

            $saveHotel->hotel_amenities41 = $request->amenities[41];
        if (isset($request->amenities[42]))

            $saveHotel->hotel_amenities42 = $request->amenities[42];
        if (isset($request->amenities[43]))

            $saveHotel->hotel_amenities43 = $request->amenities[43];
        if (isset($request->amenities[44]))

            $saveHotel->hotel_amenities44 = $request->amenities[44];
        if (isset($request->amenities[45]))

            $saveHotel->hotel_amenities45 = $request->amenities[45];
        if (isset($request->amenities[46]))

            $saveHotel->hotel_amenities46 = $request->amenities[46];
        if (isset($request->amenities[47]))

            $saveHotel->hotel_amenities47 = $request->amenities[47];
        if (isset($request->amenities[48]))

            $saveHotel->hotel_amenities48 = $request->amenities[48];
        if (isset($request->amenities[49]))

            $saveHotel->hotel_amenities49 = $request->amenities[49];
        if (isset($request->amenities[50]))
            $saveHotel->hotel_amenities50 = $request->amenities[50];


        $saveHotel->save();
        return redirect()->back();
    }
    public function saveRoom(Request $request){
        $saveRoom = new Room();
        $saveRoom->hotel_id = $request->hotelId;
        $saveRoom->room_name = $request->roomName;
        $saveRoom->room_feet = $request->roomFeets;
        $saveRoom->room_bed_type = $request->bedType;
        $saveRoom->room_bathroom_type = $request->bathroomType;
        $saveRoom->room_amount = $request->amount;
        $saveRoom->room_amenities = $request->amenities[0];
        if (isset($request->amenities[1]))

            $saveRoom->room_amenities1 = $request->amenities[1];
        if (isset($request->amenities[2]))

            $saveRoom->room_amenities2 = $request->amenities[2];
        if (isset($request->amenities[3]))

            $saveRoom->room_amenities3 = $request->amenities[3];
        if (isset($request->amenities[4]))

            $saveRoom->room_amenities4 = $request->amenities[4];
        if (isset($request->amenities[5]))

            $saveRoom->room_amenities5 = $request->amenities[5];
        if (isset($request->amenities[6]))

            $saveRoom->room_amenities6 = $request->amenities[6];
        if (isset($request->amenities[7]))

            $saveRoom->room_amenities7 = $request->amenities[7];
        if (isset($request->amenities[8]))

            $saveRoom->room_amenities8 = $request->amenities[8];
        if (isset($request->amenities[9]))

            $saveRoom->room_amenities9 = $request->amenities[9];
        if (isset($request->amenities[10]))

            $saveRoom->room_amenities10 = $request->amenities[10];
        if (isset($request->amenities[11]))

            $saveRoom->room_amenities11 = $request->amenities[11];
        if (isset($request->amenities[12]))

            $saveRoom->room_amenities12 = $request->amenities[12];
        if (isset($request->amenities[13]))

            $saveRoom->room_amenities13 = $request->amenities[13];
        if (isset($request->amenities[14]))

            $saveRoom->room_amenities14 = $request->amenities[14];
        if (isset($request->amenities[15]))

            $saveRoom->room_amenities15 = $request->amenities[15];
        if (isset($request->amenities[16]))

            $saveRoom->room_amenities16 = $request->amenities[16];
        if (isset($request->amenities[17]))

            $saveRoom->room_amenities17 = $request->amenities[17];
        if (isset($request->amenities[18]))

            $saveRoom->room_amenities18 = $request->amenities[18];
        if (isset($request->amenities[19]))

            $saveRoom->room_amenities19 = $request->amenities[19];
        if (isset($request->amenities[20]))

            $saveRoom->room_amenities20 = $request->amenities[20];
        if (isset($request->amenities[21]))

            $saveRoom->room_amenities21 = $request->amenities[21];
        if (isset($request->amenities[22]))

            $saveRoom->room_amenities22 = $request->amenities[22];
        if (isset($request->amenities[23]))

            $saveRoom->room_amenities23 = $request->amenities[23];
        if (isset($request->amenities[24]))

            $saveRoom->room_amenities24 = $request->amenities[24];
        if (isset($request->amenities[25]))

            $saveRoom->room_amenities25 = $request->amenities[25];
        if (isset($request->amenities[26]))

            $saveRoom->room_amenities26 = $request->amenities[26];
        if (isset($request->amenities[27]))

            $saveRoom->room_amenities27 = $request->amenities[27];
        if (isset($request->amenities[28]))

            $saveRoom->room_amenities28 = $request->amenities[28];
        if (isset($request->amenities[29]))

            $saveRoom->room_amenities29 = $request->amenities[29];
        if (isset($request->amenities[30]))

            $saveRoom->room_amenities30 = $request->amenities[30];
        if (isset($request->amenities[31]))

            $saveRoom->room_amenities31 = $request->amenities[31];
        if (isset($request->amenities[32]))

            $saveRoom->room_amenities32 = $request->amenities[32];
        if (isset($request->amenities[33]))

            $saveRoom->room_amenities33 = $request->amenities[33];
        if (isset($request->amenities[34]))

            $saveRoom->room_amenities34 = $request->amenities[34];
        if (isset($request->amenities[35]))

            $saveRoom->room_amenities35 = $request->amenities[35];
        if (isset($request->amenities[36]))

            $saveRoom->room_amenities36 = $request->amenities[36];
        if (isset($request->amenities[37]))

            $saveRoom->room_amenities37 = $request->amenities[37];
        if (isset($request->amenities[38]))

            $saveRoom->room_amenities38 = $request->amenities[38];
        if (isset($request->amenities[39]))

            $saveRoom->room_amenities39 = $request->amenities[39];
        if (isset($request->amenities[40]))

            $saveRoom->room_amenities40 = $request->amenities[40];
        if (isset($request->amenities[41]))

            $saveRoom->room_amenities41 = $request->amenities[41];
        if (isset($request->amenities[42]))

            $saveRoom->room_amenities42 = $request->amenities[42];
        if (isset($request->amenities[43]))

            $saveRoom->room_amenities43 = $request->amenities[43];
        if (isset($request->amenities[44]))

            $saveRoom->room_amenities44 = $request->amenities[44];
        if (isset($request->amenities[45]))

            $saveRoom->room_amenities45 = $request->amenities[45];
        if (isset($request->amenities[46]))

            $saveRoom->room_amenities46 = $request->amenities[46];
        if (isset($request->amenities[47]))

            $saveRoom->room_amenities47 = $request->amenities[47];
        if (isset($request->amenities[48]))

            $saveRoom->room_amenities48 = $request->amenities[48];
        if (isset($request->amenities[49]))

            $saveRoom->room_amenities49 = $request->amenities[49];
        if (isset($request->amenities[50]))
            $saveRoom->room_amenities50 = $request->amenities[50];


        $saveRoom->save();
        return redirect()->back();
    }
    public function saveImages(Request $request){
        $saveImage = new Image();
        $saveImage->hotel_id = $request->hotelId;
        if (isset($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $saveImage->image = $filename;
        }
        $saveImage->save();
        return redirect()->back();
    }
}
