<?php

namespace App\Http\Controllers;

use App\Models\Roomdate;
use App\Models\Room;
use Illuminate\Http\Request;

/**
 * Class RoomdateController
 * @package App\Http\Controllers
 */
class RoomdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomdates = Roomdate::paginate();

        return view('roomdate.index', compact('roomdates'))
            ->with('i', (request()->input('page', 1) - 1) * $roomdates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomdate = new Roomdate();
        $room = Room::all();
        $id = auth()->user()->id;
        return view('roomdate.create', compact('roomdate','room','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Roomdate::$rules);

        $roomdate = Roomdate::create($request->all());

        return redirect()->route('roomdates.index')
            ->with('success', 'Roomdate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomdate = Roomdate::find($id);

        return view('roomdate.show', compact('roomdate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomdate = Roomdate::find($id);

        return view('roomdate.edit', compact('roomdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Roomdate $roomdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomdate $roomdate)
    {
        request()->validate(Roomdate::$rules);

        $roomdate->update($request->all());

        return redirect()->route('roomdates.index')
            ->with('success', 'Roomdate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $roomdate = Roomdate::find($id)->delete();

        return redirect()->route('roomdates.index')
            ->with('success', 'Roomdate deleted successfully');
    }
}
