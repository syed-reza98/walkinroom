<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

/**
 * Class RoomController
 * @package App\Http\Controllers
 */
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate();

        return view('room.index', compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * $rooms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = new Room();
        $hotel = Hotel::all();
        $id = auth()->user()->id;
        return view('room.create', compact('room','hotel','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Room::$rules);

        $room = Room::create($request->all());

        return redirect()->route('rooms.index')
            ->with('success', 'Room created successfully.');
        // // $request->validate([
        // //     'title' => 'required',
        // //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // //     'description' => 'required',
        // // ]);
        // request()->validate(Room::$rules);
        // // 'hotel_id','user_id','title','image','description','type','capacity','availability','price'
        // if($request->hasfile('image'))
        //  {
        //     foreach($request->file('image') as $key => $file)
        //     {

        //         $path = $file->store('public/images');
        //         // $name = $file->getClientOriginalName();
        //         // $insert[$key]['title'] = $name;
        //         $insert[$key]['image'] = $path;
        //     }
        //  }
        // // $path = $request->file('image')->store('public/images');
        // $room = new Room;
        // $room->hotel_id = $request->hotel_id;
        // $room->user_id = $request->user_id;
        // $room->title = $request->title;
        // $room->image = json_encode($insert);
        // $room->description = $request->description;
        // $room->type = $request->type;
        // $room->capacity = $request->capacity;
        // $room->availability = $request->availability;
        // $room->price = $request->price;
        // $room->save();

        // return redirect()->route('rooms.index')
        //     ->with('success', 'Room created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);

        return view('room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        $hotel = Hotel::all();
        $id = auth()->user()->id;
        // $hotel = Hotel::find($room->hotel_id);
        return view('room.edit', compact('room','hotel','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Room $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        request()->validate(Room::$rules);

        $room->update($request->all());

        return redirect()->route('rooms.index')
            ->with('success', 'Room updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $room = Room::find($id)->delete();

        return redirect()->route('rooms.index')
            ->with('success', 'Room deleted successfully');
    }
}
