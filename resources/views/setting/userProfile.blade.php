@php


$programmingList=['php','python','js'];

@endphp
<div>
   <h1>Welcome in User Profile</h1>
    <h1>Name:{{$username}}</h1>
    <h1>Email:{{$email}}</h1>
    @include('programmingList')

</div>
