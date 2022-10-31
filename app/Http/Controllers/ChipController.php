<?php

namespace App\Http\Controllers;

use App\Models\Chip;
use Illuminate\Http\Request;

class ChipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			#$chips = Chip::all(); //fetch all products from DB
			$chips = Chip::with('carrier')->get();

			
			//$products = Product::where('title', 'Gorro')->first()->get();
			//dump($products[0]);
			return view('pages.list', ['chips' => $chips]);
			
			
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
			$newChip = Chip::create([
				'client' => $request->client,
				'nim' => $request->nim,
				'sim' => $request->sim,
				'carrier_id' => $request->carrier,
				'comment' => $request->comment,
				'user_id' => $request->user
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chip  $chip
     * @return \Illuminate\Http\Response
     */
    public function show(Chip $chip)
    {
			dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chip  $chip
     * @return \Illuminate\Http\Response
     */
    public function edit(Chip $chip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chip  $chip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chip $chip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chip  $chip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chip $chip)
    {
        
    }
}
