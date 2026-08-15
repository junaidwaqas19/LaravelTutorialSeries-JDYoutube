@extends('layouts.adminLayout')
@section('title','User List')
@section('content')

<div class="bg-white rounded shadow">
         @if(@session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-2 text-center">
                {{session('success')}}
            </div>
         @endif
    <div class="flex justify-between p-4 border-b">
        <h2 class="font-bold">User List</h2>

        <a href="{{route('user-add')}}" class="px-3 py-2 text-white bg-blue-600 rounded">
            Add User
        </a>
    </div>
     <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">User Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
              @foreach ($users as $u )
                   <tr class="border-t">
                        <td class="p-3">{{$u->id}}</td>
                        <td class="p-3">{{$u->name}}</td>
                        <td class="p-3">{{$u->email}}</td>
                        <td class="p-3 text-center flex justify-center gap-2 ">
                            <a href="{{route('user.edit',$u->id)}}" class="px-2 py-1 text-white bg-yellow-500 rounded">Edit</a>

                            <form action="{{route('user.delete',$u->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 text-white bg-red-600 rounded cursor:mouse" >
                                        Delete
                                    </button>
                            </form>
                        </td>
                    </tr>
              @endforeach



        </tbody>
    </table>


 </div>

@endsection
