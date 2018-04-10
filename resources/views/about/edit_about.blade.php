@extends('layouts.master')

@section('content')

<h1>All Abouts</h1>

<form method="post" action="{{ route('about.update',$about->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="title">About Title</label>
        <input type="text" class="form-control" name="title" value="{{ $about->title }}" id="title">
      </div>
      <div class="form-group">
        <label for="detail">About Detail</label>
        <input type="text" class="form-control" name="detail" value="{{ $about->detail }}" id="detail">
      </div>

      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection