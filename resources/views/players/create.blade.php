<link rel="stylesheet" href="{{ asset('css/indexstle.css') }}">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Player</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Include your Tailwind CSS styles -->
</head>

<body class="font-sans bg-gray-100">

    @extends('layouts.app')

    @section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-6">Create Player</h1>

        @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('players.store') }}" method="POST" class="max-w-md bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="nation" class="block text-gray-700 text-sm font-bold mb-2">Nation:</label>
                <input type="text" id="nation" name="nation"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="rank" class="block text-gray-700 text-sm font-bold mb-2">Rank:</label>
                <input type="number" id="rank" name="rank"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label for="point" class="block text-gray-700 text-sm font-bold mb-2">Point:</label>
                <input type="number" id="point" name="point"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Create Player
            </button>
        </form>
    </div>
    @endsection

</body>

</html>
