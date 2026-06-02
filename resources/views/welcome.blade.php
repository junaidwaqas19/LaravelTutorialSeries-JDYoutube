@extends('layouts.appLayout')
@section('title','Home Page')
@section('content')
 <h1> Welcome in Programming</h1>
 <button onclick="Message()">Click Me</button>
@endsection
@push('styles')
<style>
 h1{
        color:blue;
    }
    button{
        padding:10px;
        background-color:black;
        color:white;
    }

</style>
   
@endpush
@push('scripts')
    <script>
      function Message(){
        alert('Welcome in Laravel Tutorial Series')
      }    
    
    </script>
@endpush