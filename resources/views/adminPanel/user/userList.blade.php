@extends('layouts.adminLayout')
@section('title','User List')
@section('content')

<div class="bg-white rounded shadow">

    <div class="flex justify-between p-4 border-b">
        <h2 class="font-bold">User List</h2>

        <a href="{{route('user-add')}}" class="px-3 py-2 text-white bg-blue-600 rounded">
            Add User
        </a>
    </div>
     <div>
         <li>{{session('username')}}</li>
         <li>{{session('email')}}</li>
     </div>


 </div>

@endsection
