@extends('layouts.master')

@section('content')

<h1>All Posts</h1>

<form method="post" action="{{ route('post.update',$post->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="name">post Name</label>
        <input type="text" class="form-control" name="name" value="{{ $post->name }}" id="name">
      </div>
      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection