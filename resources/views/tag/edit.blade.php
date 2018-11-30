@extends('layouts.main')

@section('content')

<form action="{{route('tag.update',$tags->id)}}" method="post">
				@method('PUT')
				@csrf
			<div class="form-group">
				<label for="nama">Nama Tag</label>
				<input  type="text" name="nama" value="{{$tags->nama}}" id="nama" class="form-control">
			</div>
			<div class="form-group">
				<input  class="btn btn-primary" type="submit" name="submit" value="Update">
				<button href="{{route('tag.index')}}" class="btn btn-default" value="cancel">Cancel</button>
			</div>
		</form>

	

@stop