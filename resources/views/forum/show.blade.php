@extends('layouts.main')

@section('content')
<div class="show-header">
	<h1>{{$forum->title}}</h1>
	<div>
		<a href="{{route('forum.create')}}" class="btn btn-primary float-right">Buat Pertanyaan</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-8">
		<div class="card-body bg-secondary">
			
			<p>{{$forum->post}}</p>
		</div>
		<br>
			<div class="card-block bg-secondary">
				<span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-secondary">Secondary</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-danger">Danger</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-info">Info</span>
                <span class="badge badge-pill badge-light">Light</span>
                <span class="badge badge-pill badge-dark">Dark</span>
                <small class="float-right">by <a href="#">aracista &nbsp;</a>{{$forum->created_at->diffForHumans()}}</small>
            </div>
	</div>
	<div class="col-md-4">
		<a href="{{route('forum.edit', $forum->id)}}" class="btn btn-success btn-block">Edit</a>
		<br>
		<form action="{{route('forum.destroy', $forum->id)}}" method="post" accept-charset="utf-8">
			@method('DELETE')
			@csrf
			<input type="submit" value="Hapus" class="btn btn-danger btn-block">
		</form>
		<br>
		<div class="alert alert-dismissible alert-warning">
        	<button type="button" class="close" data-dismiss="alert">&times;</button>
          	<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
	</div>
</div>

@endsection
