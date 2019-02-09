  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">
          <strong>
            <i class="fa fa-dashboard"></i>&nbsp;&nbsp;<span> Dashboard</span>
          </strong>
        </li>
        {{-- Post --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('posts.index') }}"><i class="fa fa-circle-o"></i>All Post</a></li>
            <li><a href="{{ route('posts.create')}}"><i class="fa fa-circle-o"></i>Create a post</a></li>
          </ul>
        </li>
        {{-- End post --}}
        {{-- Categroy --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i>All Category</a></li>
            <li><a href="{{ route('categories.create')}}"><i class="fa fa-circle-o"></i>Create a Category</a></li>
          </ul>
        </li>
        {{-- End Categroy  --}}
        {{-- Tags --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Tags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tags.index') }}"><i class="fa fa-circle-o"></i>All Tags</a></li>
            <li><a href="{{ route('tags.create')}}"><i class="fa fa-circle-o"></i>Create a Tag</a></li>
          </ul>
        </li>
        {{-- End Tags --}}
        {{-- Users --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
            <li><a href="{{ route('users.create')}}"><i class="fa fa-circle-o"></i>Create a User</a></li>
          </ul>
        </li>
        {{-- End Users --}}


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
