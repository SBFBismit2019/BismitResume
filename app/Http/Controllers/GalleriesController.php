<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::all();
        return 'naon';
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addGallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'desc'=> 'required',
            'photo'=>'image|nullable|max:1999',
            'link' => 'required'
        ]);
        
        if($request->hasFile('photo')){
            $fileName = pathinfo($request->file('photo')->getClientOriginalName(),PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName. '_'. time(). '.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $gallery=new Gallery;
        $gallery->title = $request->input('title');
        $gallery->desc = $request->input('desc');
        $gallery->photo = $fileNameToStore;
        $gallery->link = $request->input('link');
        $gallery->save();

        return redirect('/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $gallery = Gallery::find($id);

        return $gallery->title;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gallery = Gallery::find($id);
        return view('editGallery')->with('gallery', $gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'desc'=> 'required',
            'photo'=>'image|nullable|max:1999',
            'link' => 'required'
        ]);
        
        if($request->hasFile('photo')){
            $fileName = pathinfo($request->file('photo')->getClientOriginalName(),PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName. '_'. time(). '.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $gallery=Gallery::find($id);
        $gallery->title = $request->input('title');
        $gallery->desc = $request->input('desc');
        $gallery->photo = $fileNameToStore;
        $gallery->link = $request->input('link');
        $gallery->save();

        return redirect('/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery=Gallery::find($id);
        $gallery->delete();

        return redirect('/galleries');
    }
}
