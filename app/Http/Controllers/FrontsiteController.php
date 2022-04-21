<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Roomdate;
use App\Models\Hotel;
use App\Models\Location;

class FrontsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $rooms = Room::all();

        return view('frontsite.index', compact('locations', 'rooms'));
    }

    // Search By Date

    public function search(Request $request)
    {
        $hotel = Hotel::where('location_id', $request->location)->pluck('id');
        $time_from = $request->input('cin');
        $time_to = $request->input('cout');

        $roomdate = Roomdate::with('room')->where('check_in', '<=', $time_from)
                             ->where('check_out', '>=', $time_to)->get();
        $room = $roomdate->pluck('room');
        $hotel = $hotel->toArray();
        $rooms = $room->whereIn('hotel_id', $hotel);
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
        return view('frontsite.search',compact('rooms'));
    }

    public function roomdetail($id)
    {
        $room = Room::find($id);

        return view('frontsite.roomdetail', compact('room'));
    }

    public function roomlist()
    {
        $rooms = Room::all();

        return view('frontsite.roomlist', compact('rooms'));
    }

    public function about_us()
    {
        return view('frontsite.about-us');
    }

    public function contact_us()
    {
        return view('frontsite.contact-us');
    }

}
