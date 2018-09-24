<?php

namespace App\Http\Controllers;

use App\SchoolarshipRequirement;
use Illuminate\Http\Request;

class SchoolarshipRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $schoolarshipRequirement = SchoolarshipRequirement::create($request->all());
        return response()->json(['data' => $schoolarshipRequirement]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolarshipRequirement  $schoolarshipRequirement
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolarshipRequirement $schoolarshipRequirement)
    {
        return response()->json(['data' => $schoolarshipRequirement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolarshipRequirement  $schoolarshipRequirement
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolarshipRequirement $schoolarshipRequirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolarshipRequirement  $schoolarshipRequirement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolarshipRequirement $schoolarshipRequirement)
    {
        $schoolarshipRequirement->update($request->all());
        return response()->json(['data' => $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolarshipRequirement  $schoolarshipRequirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolarshipRequirement $schoolarshipRequirement)
    {
        $schoolarshipRequirement->delete();
        return response()->json(['data' => $schoolarshipRequirement]);
    }
}
