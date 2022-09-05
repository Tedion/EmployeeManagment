@extends('layouts.userLayout')

@section('content')
<div class="container">
    <a class="btn btn-secondary" href="/home">Go Back</a>
    <h3 class="text-center">{{$user->name}}</h3>
    <div class="row">
    
    
            <p><strong>Email: </strong> {{$user->email}}</p> 
            <p><strong>Phone: </strong> {{$user->Phone}}</p> 
            <p><strong>Gender: </strong> {{$user->gender}}</p> 
            <p><strong>Birth Date: </strong> {{$user->birth_date}}</p> 
            <p><strong>Adress: </strong> {{$user->address}}</p> 

            <a href="/profile/edit" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection