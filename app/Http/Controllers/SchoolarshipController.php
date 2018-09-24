<?php

namespace App\Http\Controllers;

use App\Schoolarship;
use Illuminate\Http\Request;
use Storage;
class SchoolarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolarship = Schoolarship::all();
        return response()->json(['data' => $schoolarship]);
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
        $photo = ($request->photo) ? Storage::disk('public')->put('schoolarship', $request->photo) : '' ;
        $input = $request->all();
        $input['photo'] = $photo;
        $schoolarship = Schoolarship::create($input);

        return response()->json(['data' => $schoolarship]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schoolarship  $schoolarship
     * @return \Illuminate\Http\Response
     */
    public function show(Schoolarship $schoolarship)
    {
        return response()->json(['data' => $schoolarship]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schoolarship  $schoolarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Schoolarship $schoolarship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schoolarship  $schoolarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schoolarship $schoolarship)
    {
        $photo = ($request->photo) ? Storage::disk('public')->put('schoolarship', $request->photo) : $schoolarship->photo ;
        $input = $request->all();
        $input['photo'] = $photo;
        $schoolarship->update($input);

        return response()->json(['data' => $input]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schoolarship  $schoolarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schoolarship $schoolarship)
    {
        $schoolarship->delete();
        return response()->json(['data' => $schoolarship]);
    }
}
