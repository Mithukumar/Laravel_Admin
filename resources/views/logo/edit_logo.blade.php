@extends('layouts.master')

@section('content')

<h1>All Logos</h1>

<form method="post" action="{{ route('logo.update',$logo->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title" value="{{ $logo->title }}" id="title">
      </div>

      <div class="form-group">
        <label for="Image">logo Name</label>
        <input type="file" class="form-control" name="image" value="{{ $logo->image }}" id="image">
      </div>

      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection