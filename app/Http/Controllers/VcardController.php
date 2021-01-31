<?php

namespace App\Http\Controllers;

use App\Models\vcard;
use Illuminate\Http\Request;

class VcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['records'] = vcard::all();
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required'
        ]);
        $v = new vcard;
        $v->name = $request->name;
        $v->contact = $request->contact;
        $v->email = $request->email;
        $v->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function show(vcard $vcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function edit(vcard $vcard)
    {
        $data['record'] = $vcard;
        return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vcard $vcard)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required'
        ]);
        $v = $vcard;
        $v->name = $request->name;
        $v->contact = $request->contact;
        $v->email = $request->email;
        $v->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vcard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(vcard $vcard)
    {
        $vcard->delete();
        return redirect()->back();
    }
}
