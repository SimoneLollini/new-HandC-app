<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBlocks = Block::all();
        return response()->json([
            'blocks' => $allBlocks,
        ]);
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
        $data['coach_id'] = 1;
        //Auth::id();
        $validator = Validator::make($data, [
            'block_name' => 'required',
            'coach_id' => 'required',
            'athlete_id' => 'nullable',
            'weeksNumber' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $newBlock = new Block();
        $newBlock->fill($data);
        $newBlock->save();

        for ($i = 0; $i < $data['weeksNumber']; $i++) {
            $newWeek = new Week();
            $newWeek->block_id = $newBlock['id'];
            $newWeek->save();
        }

        return response()->json([
            'success' => true,
            'message' => "Blocco creato con successo!"
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
        $block = Block::find($id)->first();
        $weeks = $block->weeks;
        return response()->json([
            'block' => $block,
            'weeks' => $weeks
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
