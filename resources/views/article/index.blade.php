@extends('layouts.app');

@section('content')

<div class="row">
 <div class="col-lg-4 col-lg-offset-4">
     <span>Total : ({{ $articles->total() }})</span>
     <span class="pull-right">Per Page : ({{ $articles->count() }})</span>

 </div>
</div>
@forelse($articles as $article)
<div class="row">
     <div class="col-lg-4 col-lg-offset-4">
         <div class="panel panel-default">
            <div class="panel-heading"><span>Ubaid raza</span><span class="pull-right">{{$article->created_at->diffForHumans()}}<span/></div>
             <div class="panel-body">
                 {{ substr($article->content,0,random_int(100,150))}}...
                 <a href="/article/{{ $article->id }}">Read More </a>
             </div>
             <div class="panel-footer clearfix" style="background-color:white;">
                     <span class="fa fa-heart pull-right"></span>
                     @if( $article->user_id==Auth::user()->id)
                     <form action="/article/{{ $article->id }}" method="POST">
                        {{ csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" name="delete" value="DELETE" class="btn btn-danger btn-sm" />
                      </form>  
                      @endif
            </div>
         </div>
     </div>
 </div>
@empty
<p>No article found.</p>
@endforelse
<div class="row">
 <div class="col-lg-4 col-lg-offset-4">
     {{ $articles->links() }}
 </div>
</div>

@endsection;