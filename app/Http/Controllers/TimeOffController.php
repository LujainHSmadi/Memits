<?php

namespace App\Http\Controllers;

use App\Models\TimeOff;
use App\Models\User;
use Illuminate\Http\Request;

class TimeOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timeOff.timeOff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'type' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'number_of_days' => 'required',
        //     'reason' => 'required',
        // ]);
        // dd(auth()->user()->id);
        // if(auth()->user()->id){
        //     $input = $request->all();
        //     TimeOff::create($input);
        //     return redirect('/timeoff')->with('success', 'Time Off Request Submitted');

        // }
        // else{
        //     return redirect('/timeoff')->with('error', 'Time Off Request Failed');
        // }
        // dd($request->type);
        if(auth()->user()->id){
        $timeOff = new TimeOff();
        $timeOff->type = $request->type;
        $timeOff->start_date = $request->startDate;
       
        $timeOff->number_of_days = 1 ;
        $timeOff->reason = $request->reason;
        $timeOff->status = 'pending';
        $timeOff->user_id = auth()->user()->id;
        $timeOff->save();
        return redirect('/timeoff/create')->with(['status' => 'Time Off Request Submitted']);
        }
else{
        return redirect('/')->with('error', 'Time Off Request Failed');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeOff  $timeOff
     * @return \Illuminate\Http\Response
     */
    public function show(TimeOff $timeOff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeOff  $timeOff
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeOff $timeOff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeOff  $timeOff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeOff $timeOff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeOff  $timeOff
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeOff $timeOff)
    {
        //
    }
}
