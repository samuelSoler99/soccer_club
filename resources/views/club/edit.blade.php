@extends('layouts.app')

@section('title','Club-Show')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">

        <h1 class="text-3xl text-center font-bold"> Club #{{$club->name}} </h1>

        <form class="mt-4 " method="POST" action="{{route('club.update',$club->id)}}">
            @csrf
            @method('put')
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name"
                   value="{{$club->name}}">

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="City" id="city" name="city"
                   value="{{$club->city}}">

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Budget" id="budget" name="budget"
                   value="{{$club->budget}}">

            <button type="submit"
                    class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
                Update
            </button>
        </form>

    </div>
@endsection
