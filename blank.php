<link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/skin-blue.min.css')}}">



  <script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="span7">   
<div class="widget stacked widget-table action-table">
        <div class="widget-content">
          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Engine</th>
                <th>Browser</th>
                <th class="td-actions"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th></th>
              </tr>
              </tbody>
            </table>
          
        </div> <!-- /widget-content -->
      
      </div> <!-- /widget -->
            </div>






            <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Page</h4>
      </div>
      <form action="{{ route('contact.update') }}" method="post">
        {{ csrf_field()}}
        <div class="modal-body">
          @include('contact.edit_contact')
        <div class="form-group">
          <label>Name</label>
          <input type="text" placeholder="Name" name="name" class="form-control" >
        </div>

        <div class="form-group">
          <label>Number</label>
          <input type="number" placeholder="Number" name="number" class="form-control">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="mail" placeholder="Email" name="email" class="form-control">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Edited</button>
      </div>
      </form>
      
    </div>
  </div>
</div>