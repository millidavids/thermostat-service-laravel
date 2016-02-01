<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Thermostat;

class ThermostatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($user_id)
    {
      return view('thermostats.create')->with('user_id', $user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($user_id, Request $request)
    {
      $user = User::find($user_id);
      $therm = $user->thermostats()->create(array());
      $therm->name = $request->input('name');
      $therm->save();
      return view('home');
    }

    public function postReading(Request $request)
    {
      $therm = Thermostat::where('guid', $request->json('guid'))->first();
      $reading = $therm->readings()->create(array());
      $reading->temperature = $request->json('temperature');
      $reading->humidity = $request->json('humidity');
      $reading->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
