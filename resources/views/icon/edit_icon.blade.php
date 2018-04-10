@extends('layouts.master')

@section('content')

<h1>All Icons</h1>

<form method="post" action="{{ route('icon.update',$icon->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="image">icon Name</label>
        <input type="file" class="form-control" name="image" value="{{ $icon->image }}" id="image">
      </div>
      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection