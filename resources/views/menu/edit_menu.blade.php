@extends('layouts.master')

@section('content')

<h1>All Menus</h1>

<form method="post" action="{{ route('menu.update',$menu->id) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
      <div class="modal-body">
        <div class="form-group">
        <label for="name">menu Name</label>
        <input type="text" class="form-control" name="name" value="{{ $menu->name }}" id="name">
      </div>
      <button type="btn btn-info" class="btn btn-primary">Update</button>
      </div>
        
      </form>

<!-- Modal -->


@endsection