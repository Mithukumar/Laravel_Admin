@extends('layouts.master')

@section('content')
	
	<h3>icon Details</h3>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th>icon Image</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($icon as $icon)
			<tr>
                <td><img src="{{ asset('images/'.$icon->image) }}"></td>
                <td class="text-center"><a class='btn btn-info btn-xs' id="edit" href="{{route('icon.edit',$icon->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href=" {{route('icon.destroy',$icon->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>     
			@endforeach
		</tbody>
	</table>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal">
  Add icon
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New icon</h4>
      </div>
      <form method="post" action="{{route('icon.store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="modal-body">
      <div class="modal-body">
      	<div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="image">
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