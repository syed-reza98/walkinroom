<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Room;
use Illuminate\Http\Request;

/**
 * Class PhotoController
 * @package App\Http\Controllers
 */
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate();

        return view('photo.index', compact('photos'))
            ->with('i', (request()->input('page', 1) - 1) * $photos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photo = new Photo();
        $room = Room::all();
        return view('photo.create', compact('photo','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateImageData = $request->validate([
            'images' => 'required',
                'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
            ]);
            if($request->hasfile('images'))
             {
                foreach($request->file('images') as $key => $file)
                {
                    $path = $file->store('public/images');
                    $path2 = $file->store('images');
                    $name = $file->getClientOriginalName();
                    $room_id = $request->room_id;
                    $insert[$key]['room_id'] = $room_id;
                    $insert[$key]['title'] = $name;
                    $insert[$key]['path'] = $path2;
                }
             }
            Photo::insert($insert);
        // request()->validate(Photo::$rules);

        // $photo = Photo::create($request->all());

        return redirect()->route('photos.index')
            ->with('success', 'Photo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);

        return view('photo.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('photo.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        request()->validate(Photo::$rules);

        $photo->update($request->all());

        return redirect()->route('photos.index')
            ->with('success', 'Photo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photo = Photo::find($id)->delete();

        return redirect()->route('photos.index')
            ->with('success', 'Photo deleted successfully');
    }
}
