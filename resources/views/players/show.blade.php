<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Details</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <h1>Player Details</h1>

    <ul>
        <li><strong>Name:</strong> {{ $player->name }}</li>
        <li><strong>Nation:</strong> {{ $player->nation }}</li>
        <li><strong>Rank:</strong> {{ $player->rank }}</li>
        <li><strong>Point:</strong> {{ $player->point }}</li>
    </ul>

    <a href="{{ route('players.index') }}">Back to Player List</a>
@endsection

</body>
</html>
