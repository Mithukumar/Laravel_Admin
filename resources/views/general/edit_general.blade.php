@extends('layouts.master')

@section('content')

<h1>All Generals</h1>

<form method="post" action="{{ route('general.update',$general->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="name">general Name</label>
        <input type="text" class="form-control" name="name" value="{{ $general->name }}" id="name">
      </div>

      <div class="form-group">
        <label for="number">general Number</label>
        <input type="number" class="form-control" name="number" value="{{ $general->number }}" id="number">
      </div>

      <div class="form-group">
        <label for="email">general Email</label>
        <input type="email" class="form-control" name="email" value="{{ $general->email }}" id="email">
      </div>

      <div class="form-group">
        <label for="address">general Address</label>
        <input type="text" class="form-control" name="address" value="{{ $general->address }}" id="address">
      </div>

      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection