<?php

namespace App\Http\Controllers;

use App\UniversityAchievement;
use Illuminate\Http\Request;

class UniversityAchievementController extends Controller
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
        $universityAchievement = UniversityAchievement::create($request->all());
        return response()->json(['data' => $universityAchievement]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UniversityAchievement  $universityAchievement
     * @return \Illuminate\Http\Response
     */
    public function show(UniversityAchievement $universityachievement)
    {
        return response()->json(['data' => $universityachievement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UniversityAchievement  $universityAchievement
     * @return \Illuminate\Http\Response
     */
    public function edit(UniversityAchievement $universityAchievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UniversityAchievement  $universityAchievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UniversityAchievement $universityAchievement)
    {
        $universityAchievement->update($request->all());
        return response()->json(['data' => $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UniversityAchievement  $universityAchievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniversityAchievement $universityachievement)
    {
        $universityachievement->delete();
        return response()->json(['data' => $universityachievement]);
    }
}
