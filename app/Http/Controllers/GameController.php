<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;



class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        if ($game->isEmpty()) {
            return response()->json($game, 404);
        }
        return response()->json($game, 200);
    }

    public function show($id)
    {
        $game = Game::find($id);

        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        return response()->json($game, 200);
    }
}
