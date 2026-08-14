@extends('layouts.adminLayout')
@section('title', isset($user)?'Edit User':'Add User')
@section('content')
<div class="bg-white max-w-md rounded-lg shadow p-6">
    <h2 class="text-xl font-bold mb-6">{{isset($user)?'Edit User':'Add User'}}</h2>
<form action="{{isset($user)?route('user.update',$user->id):route('user.store')}}" method="POST">
    @csrf
    @isset($user)
        @method('PUT')
    @endisset
        <div>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500"
              value={{isset($user)?$user->name:''}} >
            @error('username')
                <span class="text-red-500 text-sm mt-1 block">
                    {{$message}}
                </span>
            @enderror
        </div>

        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500"
              value={{isset($user)?$user->email:''}}>
                 @error('email')
                    <span class="text-red-500 text-sm mt-1 block">
                        {{$message}}
                    </span>
                @enderror
        </div>


        <br>

        <button type="submit"  class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">{{isset($user)?'Update':'Submit'}}</button>
    </form>
</div>

@endsection
