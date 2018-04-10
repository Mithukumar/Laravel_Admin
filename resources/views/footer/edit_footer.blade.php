@extends('layouts.master')

@section('content')

<h1>All Footers</h1>

<form method="post" action="{{ route('footer.update',$footer->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="title">Footer Name</label>
        <input type="text" class="form-control" name="title" value="{{ $footer->title }}" id="title">
      </div>
      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection
