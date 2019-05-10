<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonies = Testimony::all();

        return 'testimoni';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addTestimony');
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
            'subject' => 'required',
            'testi'=> 'required'
        ]);

        $testimony = new Testimony;
        $testimony->subject = $request->input('subject');
        $testimony->testi = $request->input('testi');
        $testimony->save();

        return redirect('/testimonies');
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
        $testimony = Testimnoy::find($id);

        return $testimony->subject;
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
        $testimony = Testimony::find($id);

        return view('editTestimony')->with('testimony', $testimony);
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
            'subject' => 'required',
            'testi'=> 'required'
        ]);

        $testimony = Testimony::find($id);
        $testimony->subject = $request->input('subject');
        $testimony->testi = $request->input('testi');
        $testimony->save();

        return redirect('/testimonies');
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
        $testimony = Testimony::find($id);
        $testimony->delete();

        return redirect('/testimonies');
    }
}
