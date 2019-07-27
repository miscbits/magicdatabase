<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin')
            ->only(['store', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CardResource::collection(Card::all());
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
        $result = Card::create($input);

        return response($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Card $card
     * @return \Illuminate\Http\Response
     * @internal param $id
     * @internal param \App\Card $card
     */
    public function show(Card $card)
    {
        return new CardResource($card);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Card             $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $input = $request->all();
        $result = $card->update($input);

        return response(['updated' => $result], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $result = $card->delete();

        return response(['deleted' => $result], 204);
    }
}
