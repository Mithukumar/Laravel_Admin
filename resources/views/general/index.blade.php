@extends('layouts.master')

@section('content')
  
  <h3>Add General</h3>

  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($general as $generals)
      <tr>
        <td>{{ $generals->name }}</td>
        <td>{{ $generals->number }}</td>
        <td>{{ $generals->email }}</td>
        <td>{{ $generals->address }}</td>
         <td class="text-center"><a class='btn btn-info btn-xs' href="{{route('general.edit',$generals->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href=" {{route('general.destroy',$generals->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal">
  Add general
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New general</h4>
      </div>
      <form method="post" action="{{ route('general.store') }}">
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>

      <div class="form-group">
        <label for="number">number</label>
        <input type="number" class="form-control" name="number" id="number">
      </div>

      <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label for="address">address</label>
        <input type="text" class="form-control" name="address" id="address">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>




@endsection