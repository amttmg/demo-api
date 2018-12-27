<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Player;
use App\Team;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Player::with('players')->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PlayerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {
        $team   = Team::findOrFail($request->input('team_id'));
        $player = $team->players()->create($request->all());

        return response()->json(['status' => true, 'data' => $player]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return response()->json($player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlayerRequest $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PlayerRequest $request, Player $player)
    {
        $success = $player->update($request->all());

        return response()->json(['status' => $success]);
    }
}
