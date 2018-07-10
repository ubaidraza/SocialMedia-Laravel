@extends('layouts.app');

@section('content')


<div class="row">
     <div class="col-lg-6 col-lg-offset-3">
         <div class="panel panel-default">
            <div class="panel-heading">
                <span>Ubaid raza <a href="/article/{{$article->id}}/edit">Edit</a></span>
                <span class="pull-right">{{$article->created_at->diffForHumans()}}<span/>
            </div>
             <div class="panel-body">
               <form method="POST" action="/article/{{ $article->id }}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                            <textarea rows="3" class="form-control" name="content"> {{ $article->content}} </textarea>
                    </div>
                    <div class="form-group">
                        <label>
                        @if($article->live===1)
                        <input type="checkbox" name="live" checked />
                        @else
                        <input type="checkbox" name="live" unchecked />
                        @endif Live
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="poston">Post on</label>
                        <input id="poston" class="form-control" value="{{ $article->post_on->format('Y-m-d\TH:i:s') }}" type="datetime-local" name="poston" />
                    </div>
                    <button class="btn btn-success btn-md pull-right">Update</button>
               </form>
                 
             </div>
         </div>
     </div>
 </div>


@endsection;