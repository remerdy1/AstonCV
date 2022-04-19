@extends('header')

@section('content')
    <div id="modal"></div>

    <div class="flex justify-center items-center">
        <div class="w-8/12 bg-teal-500 mt-5 p-6 rounded-lg">
            <p class="font-medium">Welcome to AstonCV!</p>
        </div>

        <input autocomplete="off" oninput="onInput(event, {{$cvs}})" type="text" name="search" placeholder="Filter (Name/Languages)" class="px-3 py-1.5 mx-5 text-gray-700 border border-solid border-gray-500 rounded focus:outline-none"/>
    </div>

    <div id="cv-div" class="flex justify-evenly flex-wrap">
        @foreach ($cvs as $cv)
            <div class="p-6 my-5 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md w-96 truncate">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900" id="cv-name">{{$cv->name}}</h2>
                <p class="mb-3 font-normal text-gray-700" id="cv-keyprogramming">Programming Languages: {{$cv->keyprogramming}}</p>
                <button class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="showModal({{$cv}})">Read More</button>
            </div>
        @endforeach
    </div>

    <script src="js/script.js"></script>
@endsection