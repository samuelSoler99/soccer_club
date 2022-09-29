@extends('layouts.app')

@section('title','Add Club')

@section('content')

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold"> Add Club </h1>
        <form class="mt-4 " method="POST" action="{{route('club.store')}}">
            @csrf
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Club Name" id="name" name="name">

            @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{$message}}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="City" id="city" name="city">

            @error('city')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{$message}}</p>
            @enderror

            <input type="number" step=any class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Budget" id="budget" name="budget">

            @error('budget')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{$message}}</p>
            @enderror

            <button type="submit"
                    class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
                Send
            </button>
        </form>
    </div>

@endsection
