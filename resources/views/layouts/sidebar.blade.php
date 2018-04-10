<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Admin Bars</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('menu') }}"><i class="glyphicon glyphicon-th-list"></i> <span>Menu</span></a></li>
      </ul>

      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('logo') }}"><i class="glyphicon glyphicon-picture"></i> <span>Logo</span></a></li>
      </ul>
      
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('icon') }}"><i class="glyphicon glyphicon-adjust"></i> <span>Icon</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('general') }}"><i class="glyphicon glyphicon-bookmark"></i> <span>General</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('service') }}"><i class="glyphicon glyphicon-indent-right"></i> <span>Service</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('post') }}"><i class="glyphicon glyphicon-check"></i> <span>Post</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('footer') }}"><i class="glyphicon glyphicon-arrow-down"></i> <span>Footer</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('about') }}"><i class="glyphicon glyphicon-retweet"></i> <span>About</span></a></li>
      </ul>



      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>