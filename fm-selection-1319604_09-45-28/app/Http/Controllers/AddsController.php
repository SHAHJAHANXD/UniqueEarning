<?php

namespace App\Http\Controllers;

use App\Models\adds;
use Illuminate\Http\Request;

class AddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addds');
    }
    public function table()
    {
        $request = adds::get()->all();
        return view('admin.adds_table', compact('request'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adds = new adds();
        $adds->link = $request->link;
        $adds->save();
        return redirect()->back()->with('success'. 'Link Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adds  $adds
     * @return \Illuminate\Http\Response
     */
    public function show(adds $adds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adds  $adds
     * @return \Illuminate\Http\Response
     */
    public function edit(adds $adds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adds  $adds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adds $adds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adds  $adds
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adds = adds::find($id);
        $adds->delete();
        return redirect('/admin/add-adds-table')->with('delete', 'User Deleted Successfully!');
    }
}
