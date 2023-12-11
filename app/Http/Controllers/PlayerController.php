<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all(); // Retrieve all players and select only the 'name' column

        return view('players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nation' => 'required|string|max:255',
            'rank' => 'required|integer',
            'point' => 'required|integer',
        ]);
    
        // Create a new player
        $player = Player::create($validatedData);
    
        return redirect()->route('players.index')
        ->with('success', 'Player created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::find($id);

        return view('players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::findOrFail($id); // Assuming your model is named Song

        return view('players.edit', ['player' => $player]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find a player in the database by its ID or throw a ModelNotFoundException
        $player = Player::findOrFail($id);

        // Validate the request data, ensuring 'name', 'nation', 'rank', and 'point' are required strings or integers
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nation' => 'required|string|max:255',
            'rank' => 'required|integer',
            'point' => 'required|integer',
        ]);

        // Update the attributes of the found player with the data from the validated request
        $player->update($validatedData);

        // Redirect to the 'players.index' route after successful update
        return redirect()->route('players.index');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find a player in the database by its ID or throw a ModelNotFoundException
        Player::destroy($id);

        // Delete the player
        // $player->delete();

        // Redirect to the 'players.index' route after successful deletion
        return redirect()->route('players.index');

    }
}
