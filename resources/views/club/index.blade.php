@extends('layouts.app')

@section('title','Club')

@section('content')
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="mb-5">
            <a href="{{route('club.create')}}" class="mx-5 px-4 py-3 text-white bg-green-500 rounded-md">Add Club</a>
        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <table class="table w-full">
                <thead>
                <tr class="bg-indigo-500 text-white">
                    <th class="w-20 py-4 ...">ID</th>
                    <th class="w-20 py-4 ...">Name</th>
                    <th class="w-20 py-4 ...">City</th>
                    <th class="w-20 py-4 ...">Budget</th>
                    <th class="w-28 py-4 ...">Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach ( $club_list as $club)
                    <tr>
                        <td class="py-3 px-6">{{$club->id}}</td>
                        <td class="p-3">{{$club->name}}</td>
                        <td class="p-3">{{$club->city}}</td>
                        <td class="p-3">{{$club->budget}}</td>
                        <td class="p-3 flex justify-center">
                            <a href="{{route('club.show',$club->id)}}"
                               class="bg-green-500 text-white px-3 py-1 mx-2 rounded-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('club.edit',$club->id)}}"
                               class="bg-green-500 text-white px-3 py-1 mx-2 rounded-sm">
                                <i class="fas fa-pen"></i>
                            </a>

                            <form action="{{ route('club.destroy', $club->id)}}" method="POST">
                                @csrf
                                @method('post')
                                <button class="bg-red-500 text-white px-3 py-1 mx-2 rounded-sm">
                                    <i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--paginator-->
        {{$club_list->links()}}
        <!-- end paginator-->
    </div>
@endsection
