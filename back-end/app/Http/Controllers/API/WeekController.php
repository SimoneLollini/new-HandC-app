<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WeekController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'week_name' => 'required',
            'block_id' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $newWeek = new Week();
        $newWeek->fill($data);
        $newWeek->save();

        return response()->json([
            'success' => true,
            'message' => "Settimana creata con successo!"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $week = Week::find($id)->first();
        $days = $week->days;
        return response()->json([
            'week' => $week,
            'days' => $days
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
