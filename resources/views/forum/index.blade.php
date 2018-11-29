@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-3">
        <button type="button" class="btn btn-success btn-block">Buat pertanyaan</button><br>
        @include('forum.include.tag')
    </div>
    <div class="col-md-8">
       @include('forum.include.post-list')
    </div>
</div>

@endsection
