@extends('layouts.app');

@section('content')
 <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
         <div class="panel panel-default">
            <div class="panel-heading">Create Article</div>
             <div class="panel-body">
                <form method="POST" action="/article">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class="form-group">
                 <label for="content">Content</label>
                 <textarea class="form-control" name="content" id="content" required></textarea>
                </div>
                <div class="form-group">
                <label for="live">Live</label>
                     <input class="" type="checkbox" name="live" id="live" />
                </div>
                <div class="form-group">
                <label for="poston">Post on</label>
                     <input class="form-control" type="datetime-local" name="poston" id="poston" />
                </div>
                <input type="submit" class="btn btn-success btn-md pull-right" value="Submit" required name="submit" />
                </form>
             </div>
         </div>
     </div>
 </div>
@endsection;