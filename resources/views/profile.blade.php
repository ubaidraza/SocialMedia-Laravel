@extends('layouts.app');
<style type="text/css">
  .img-style{
    border-radius:100%;
    border: 5px solid #fff;
    box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
    height:150px;
    min-width:150px;
  }
</style>
@section('content')


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
           <div class="panel-body text-center">
              <img class="img-style" src="https://www.ienglishstatus.com/wp-content/uploads/2018/04/Anonymous-Whatsapp-profile-picture.jpg" alt="profile"/>
              <h1>{{ $user->name }}</h1>
              <h5>{{ $user->email }}</h5>
              <h5>(Profile Created ) {{$user->dob}}</h5>


              <button class="btn btn-success btn-lg">Follow </button>
        </div>
    </div>
</div>
@endsection;