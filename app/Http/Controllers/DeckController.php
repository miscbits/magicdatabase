<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeckResource;
use App\Deck;
use Illuminate\Http\Request;

class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeckResource::collection(Deck::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $result = Deck::create($input);

        return response($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Deck $deck
     * @return \Illuminate\Http\Response
     * @internal param $id
     * @internal param \App\Deck $deck
     */
    public function show(Deck $deck)
    {
        return new DeckResource($deck);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Deck             $deck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deck $deck)
    {
        $input = $request->all();
        $result = $deck->update($input);

        return response(['updated' => $result], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deck $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deck $deck)
    {
        $result = $deck->delete();

        return response(['deleted' => $result], 204);
    }
}
