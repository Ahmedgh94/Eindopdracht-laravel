<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/indexstle.css') }}">

    <title>Player List</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <h1>Player List</h1>

    <a href="{{ route('players.create') }}">Create Player</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Nation</th>
                <th>Rank</th>
                <th>Point</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>
                        <a href="{{ route('players.show', ['player' => $player->id]) }}">
                            {{ $player->name }}
                        </a>
                    </td>
                    <td>{{ $player->nation }}</td>
                    <td>{{ $player->rank }}</td>
                    <td>{{ $player->point }}</td>
                    
                        <td>
                            <!-- Link to the player's edit page -->
                            <a href="{{ route('players.edit', ['player' => $player->id]) }}">Edit</a>
                        </td>
                        <td>
                            <!-- Link to the player's edit page -->
                            <form action="{{ route('players.destroy', ['player' => $player->id]) }}" method="POST" style="display: inline-block;">
                            @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

</body>
</html>
