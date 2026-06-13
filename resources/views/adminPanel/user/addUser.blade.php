@extends('layouts.adminLayout')
@section('title','Add User')
@section('content')
<form action="{{url('/user/store')}}" method="POST">
    @csrf
        <div>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" required>
        </div>

        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>

@endsection
