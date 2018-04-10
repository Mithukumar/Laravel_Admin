@extends('layouts.master')

@section('content')
	
	<h3>Add Menu</h3>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Menu Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($menu as $menu)
			<tr>
				<td>{{ $menu->name }}</td>
				<td class="text-center"><a class='btn btn-info btn-xs' href="{{route('menu.edit',$menu->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href=" {{route('menu.destroy',$menu->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<!-- Button trigger modal -->
	<!-- Button trigger modal -->
<button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal">
  Add menu
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New menu</h4>
      </div>
      <form method="post" action="{{ route('menu.store') }}">
      	{{ csrf_field() }}
      <div class="modal-body">
      	<div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name">
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