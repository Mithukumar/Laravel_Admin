@extends('layouts.master')

@section('content')

<h1>All Services</h1>

<form method="post" action="{{ route('service.update',$service->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="title">service Title</label>
        <input type="text" class="form-control" name="title" value="{{ $service->title }}" id="title">
      </div>

      <div class="form-group">
        <label for="detail">service Detail</label>
        <input type="text" class="form-control" name="detail" value="{{ $service->detail }}" id="detail">
      </div>


      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection