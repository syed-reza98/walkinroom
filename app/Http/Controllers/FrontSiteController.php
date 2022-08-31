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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Session;


class FrontSiteController extends Controller
{
    use RegistersUsers;

    public function index()
    {
        $value = Session::get('variableSetOnPageA');
        $locations = Location::all();
        $rooms = Room::all();
        $types = Type::all();
        $blogs = Blog::all();
        $tz = new CarbonTimeZone(); // instance way
        // $tt = $request->input('timezone');
        // dd($tt);
        // dd($tz->getName());
        $dt = Carbon::now('UTC');
        $pre = Carbon::now('UTC')->addDay();
        $dt1 = Carbon::now('UTC')->addDay();
        $mytime1 = $dt1->subHours(3)->toDateString();
        // dd($dt,$pre,$mytime1);
        // $as=$value->addDay();
        $mytime2 = $pre->toDateString();
        $mytime = $dt;
        // $dt = Carbon::now('UTC')->addDay()->subHours(24);
        // $mytime = $dt;
        $roomdate = Roomdate::with('room')
        ->where('check_out', '>', $mytime1)->get();
        $roomdate1= $roomdate->where('check_out','=',$mytime2);
        $lastroom = $roomdate1->pluck('room');
        // dd($lastroom);
        return view('index', compact('locations', 'rooms','types','blogs', 'mytime','lastroom','value'));
    }

    // public function index1()
    // {
    //     $value = Session::get('variableSetOnPageA');
    //     $locations = Location::all();
    //     $rooms = Room::all();
    //     $types = Type::all();
    //     $blogs = Blog::all();
    //     $tz = new CarbonTimeZone(); // instance way
    //     // $tt = $request->input('timezone');
    //     // dd($tt);
    //     // dd($tz->getName());
    //     $dt = Carbon::now('UTC');
    //     $pre = Carbon::now('UTC')->addDay();
    //     $dt1 = Carbon::now('UTC')->addDay();
    //     $mytime1 = $dt1->subHours(3)->toDateString();
    //     // dd($dt,$pre,$mytime1);
    //     // $as=$value->addDay();
    //     $mytime2 = $pre->toDateString();
    //     $mytime = $dt;
    //     // $dt = Carbon::now('UTC')->addDay()->subHours(24);
    //     // $mytime = $dt;
    //     $roomdate = Roomdate::with('room')
    //     ->where('check_out', '>', $mytime1)->get();
    //     $roomdate1= $roomdate->where('check_out','=',$mytime2);
    //     $lastroom = $roomdate1->pluck('room');
    //     // dd($lastroom);
    //     return view('frontsite.index', compact('locations', 'rooms','types','blogs', 'mytime','lastroom','value'));
    // }

    // public function ss(Request $request)
    // {
    //     return view('partials.searchlist');
    // }

    public function search(Request $request)
    {
        // $ll=$request->location;
        $hotel = Hotel::where('location_id', $request->location)->pluck('id');

        $time_from = $request->input('cin');
        $time_to = $request->input('cout');

        $time_now = $request->input('nowDate');
        $cal = $request->input('result');
        $datedif = $request->input('redate');
        $roomdate = Roomdate::with('room')->where('check_in', '<=', $time_from)
                             ->where('check_out', '>=', $time_to)->get();
        $room = $roomdate->pluck('room');
        // dd($time_now,$time_from,$time_to, $cal,$datedif,$room);
        // dd($datedif);
        // $roomarr = $room->pluck('title')->toArray();
        // $price= $room->pluck('price')->toArray();
        if($cal == 0 ){
            $per = 0.5;
        }elseif($cal == 1){
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
        // dd($ll,$rooms, $time_from, $time_to, $time_now);
        return view('partials.searchlist',compact('rooms','time_now','time_from','time_to','per','datedif'));
    }

    public function roomlist()
    {
        $rooms = Room::all();

        return view('partials.roomlist', compact('rooms'));
    }

    public function typelist($id)
    {
        $type = Type::find($id);
        $rooms = Room::where('type_id', $id)->get();
        $count = $rooms->count();
        return view('partials.typelist', compact('rooms','count','type'));
    }

    public function loclist($id)
    {
        $hotel = Hotel::where('location_id', $id)->pluck('id');
        $room = Room::all();
        $rooms = $room->whereIn('hotel_id', $hotel);
        return view('partials.loclist', compact('rooms'));
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

    public function room($id, $price, $datedif)
    {
        $room = Room::find($id);
        // $pp= $price;
        return view('partials.room', compact('room', 'price', 'datedif'));
    }

    public function booking(Request $request, $id){
        $room = Room::find($id);
        $time_from = $request->input('cin');
        $time_to = $request->input('cout');
        $time_now = $request->input('nowDate');
        $cal = $request->input('result');
        $datedif = $request->input('redate');
        if($cal == 1 ){
            $per = 0.5;
        }elseif($cal == 2){
            $per = 0.25;

        }else{
            $per = 0.15;
        }
        if($request->name)
        {
            $newuser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            event(new Registered($newuser));
            // Auth::login($newuser);
            $this->guard()->login($newuser);
        }else
        {
            $newuser = auth()->user();
        }
        return view('partials.checkout', compact('newuser','room','time_now','time_from','time_to','per','datedif','time_from','time_to'));
    }

    public function check()
    {
        return view('partials.checkout');
    }





    public function hoteldetail($id)
    {
        $hotel = Hotel::find($id);
        return view('frontsite.hoteldetail', compact('hotel'));
    }

    public function rd(){
        return view('frontsite.rd');
    }
    public function rd2(Request $request){
        $tt = $request->input('timezone');
        dd($tt);
        return view('frontsite.rd2', compact('tt'));
    }

    public function demoNew()
    {
        $rooms = Room::all();
        $bookings = Booking::all();
        $coupons = Coupon::all();
        return view('frontsite.demo', compact('rooms','coupons','bookings'));
    }
}
