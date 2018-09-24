<?php

namespace App\Http\Controllers;

use App\StudentDetail;
use Illuminate\Http\Request;

class StudentDetailController extends Controller
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
        $studentDetail = StudentDetail::create($request->all());
        return response()->json(['data' => $studentDetail]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDetail $studentDetail)
    {
        return response()->json(['data' => $studentDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentDetail $studentDetail)
    {
        $studentDetail->update($request->all());
        return response()->json(['data' => $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDetail $studentDetail)
    {
        $studentDetail->delete();
        return response()->json(['data' => $studentDetail]);
    }
}
