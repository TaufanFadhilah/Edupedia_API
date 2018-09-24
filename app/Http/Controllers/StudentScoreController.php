<?php

namespace App\Http\Controllers;

use App\StudentScore;
use Illuminate\Http\Request;
use Storage;
class StudentScoreController extends Controller
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
        if($request->certificate){
          $certificate = Storage::disk('public')->put('certificates', $request->certificate);
        }else{
          $certificate = '';
        }
        $input = $request->all();
        $input['certificate'] = $certificate;
        $studentScore = StudentScore::create($input);
        return response()->json(['data' => $studentScore]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentScore  $studentScore
     * @return \Illuminate\Http\Response
     */
    public function show(StudentScore $studentScore)
    {
        return response()->json(['data' => $studentScore]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentScore  $studentScore
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentScore $studentScore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentScore  $studentScore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentScore $studentScore)
    {
        $certificate = ($request->certificate) ? Storage::disk('public')->put('certificates', $request->certificate) : $studentScore->certificate ;
        $input = $request->all();
        $input['certificate'] = $certificate;
        $studentScore->update($input);

        return response()->json(['data' => $studentScore]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentScore  $studentScore
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentScore $studentScore)
    {
        $studentScore->delete();
        return response()->json(['data' => $studentScore]);
    }
}
