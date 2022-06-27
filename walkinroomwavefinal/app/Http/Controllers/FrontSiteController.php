<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Location;
use App\Room;
use App\Type;
use App\Roomdate;
use App\Blog;
use App\Booking;
use App\Coupon;
use Illuminate\Http\Request;

class FrontSiteController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $rooms = Room::all();
        $types = Type::all();
        $blogs = Blog::all();

        return view('frontsite.index', compact('locations', 'rooms','types','blogs'));
    }
    public function search(Request $request)
    {
        $hotel = Hotel::where('location_id', $request->location)->pluck('id');
        $time_from = $request->input('cin');
        $time_to = $request->input('cout');
        $time_now = $request->input('nowDate');
        $cal = $request->input('result');
        $datedif = $request->input('redate');
        $roomdate = Roomdate::with('room')->where('check_in', '<=', $time_from)
                             ->where('check_out', '>=', $time_to)->get();
        $room = $roomdate->pluck('room');
        // dd($datedif);
        // $roomarr = $room->pluck('title')->toArray();
        // $price= $room->pluck('price')->toArray();
        if($cal == 1 ){
            $per = 0.5;
        }elseif($cal == 2){
            $per = 0.25;

        }else{
            $per = 0.15;
        }
        $hotel = $hotel->toArray();
        $rooms = $room->whereIn('hotel_id', $hotel);
        // dd($cal,$rooms,$time_now,$time_from,$time_to);
        // $select = ['client_id','start_date','end_date','first_name','last_name','phone',    'postcode'];
        // $results = DB::table('rooms')->join('roomdates', 'client.id', '=', 'hire.client_id')->select($select)
        // ->where('car_id', $car_id)->whereBetween('start_date', [$start_date, $end_date])->orWhereBetween('end_date', [$start_date, $end_date])->get();
        // if ($request->isMethod('POST')) {
        //     $rooms = Room::with('roomdates')->whereHas('roomdates', function ($q) use ($time_from, $time_to) {
        //         $q->where(function ($q2) use ($time_from, $time_to) {
        //             $q2->where('check_in', '<=', $time_from)
        //                ->where('check_out', '>=', $time_to);
        //         });
        //     })->where('hotel_id', '=', $hotel)
        //     ->orWhereDoesntHave('roomdates')->get();
        // } else {
        //     $rooms = null;
        // }
        return view('frontsite.search',compact('rooms','time_now','time_from','time_to','per','datedif'));
    }

    public function roomlist()
    {
        $rooms = Room::all();

        return view('frontsite.roomlist', compact('rooms'));
    }

    public function hotellist()
    {
        $hotels = Hotel::all();
        $rooms = Room::all();
        return view('frontsite.hotellist', compact('hotels','rooms'));
    }

    public function about_us()
    {
        return view('frontsite.about-us');
    }

    public function contact_us()
    {
        return view('frontsite.contact-us');
    }

    public function bookshow($id){
        $room = Room::find($id);
        return view('frontsite.partials.booking-step',compact('room'));
    }

    public function roomdetail($id, $price, $datedif)
    {
        $room = Room::find($id);
        // $pp= $price;
        return view('frontsite.roomdetail', compact('room', 'price', 'datedif'));
    }

    public function hoteldetail($id)
    {
        $hotel = Hotel::find($id);
        return view('frontsite.hoteldetail', compact('hotel'));
    }

    public function rd(){
        $id=1;
        $room = Room::find($id);
        return view('frontsite.rd', compact('room'));
    }

    public function demoNew()
    {
        $rooms = Room::all();
        $bookings = Booking::all();
        $coupons = Coupon::all();
        return view('frontsite.demo', compact('rooms','coupons','bookings'));
    }
}
