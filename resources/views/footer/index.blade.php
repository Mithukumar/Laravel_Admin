@extends('layouts.master')

@section('content')
  
  <h3>Add Footer</h3>

  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($footer as $footer)
      <tr>
        <td>{{ $footer->title }}</td>
         <td class="text-center"><a class='btn btn-info btn-xs' id="edit" href="{{route('footer.edit',$footer->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href=" {{route('footer.destroy',$footer->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal">
  Add footer
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New footer</h4>
      </div>
      <form method="post" action="{{ route('footer.store') }}">
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
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