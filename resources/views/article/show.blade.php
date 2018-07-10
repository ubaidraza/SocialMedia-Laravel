@extends('layouts.app');

@section('content')


<div class="row">
     <div class="col-lg-4 col-lg-offset-4">
         <div class="panel panel-default">
            <div class="panel-heading">
                <span>Ubaid raza <a href="/article/{{$article->id}}/edit">Edit</a></span>
                <span class="pull-right">{{$article->created_at->diffForHumans()}}<span/>
            </div>
             <div class="panel-body">
                    {{ $article->content}}
             </div>
             <div class="panel-footer clearfix" style="background-color:white;"><span class="fa fa-heart pull-right"></span></div>
         </div>
     </div>
 </div>


@endsection;