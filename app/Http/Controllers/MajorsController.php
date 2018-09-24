<?php

namespace App\Http\Controllers;

use App\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Majors::all();
        return response()->json(['data' => $majors]);
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
        $majors = Majors::create($request->all());
        return response()->json(['data' => $majors]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Majors  $majors
     * @return \Illuminate\Http\Response
     */
    public function show(Majors $major)
    {
        return response()->json(['data' => $major]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Majors  $majors
     * @return \Illuminate\Http\Response
     */
    public function edit(Majors $majors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Majors  $majors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Majors $major)
    {
        $major->update($request->all());
        return response()->json(['data' => $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Majors  $majors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Majors $major)
    {
        $major->delete();
        return response()->json(['data' => $major]);
    }
}
