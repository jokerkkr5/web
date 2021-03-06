@extends('admin.layouts.app')

@section('style')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('script')

<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      All Post
      <small  style="float: right;"><a class="btn btn-success" href="{{route('posts.create')}}">Create New Post</a></small>
    </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            {{-- <div class="box-header">
              <h3 class="box-title text-center" style="display: inherit;">
                
              </h3>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th class="text-center">Action</th>
                    {{-- <th class="text-center">Edit</th> --}}
                    {{-- <th class="text-center">Delete</th> --}}
                  </tr>
                </thead>
                <tbody>
                  {{-- @php($i=1) --}}
                  @foreach($posts as $post)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->subtitle}}</td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a title="VIEW" href="{{route('posts.show', ['slug'=>$post->slug])}}" class="btn bg-purple glyphicon glyphicon-eye-open"></a>

                        <a title="EDIT" class="btn btn-info glyphicon glyphicon-edit" href="{{route('posts.edit', ['slug'=>$post->slug])}}"></a>

                        <form style="display: inline-block;" action="{{ route('posts.destroy', ['id'=>$post->id]) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button style="border-top-left-radius: 0 !important;border-bottom-left-radius: 0 !important" title="DELETE" type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Imgae</th>
                    <th class="text-center">Action</th>
                    {{-- <th class="text-center">Edit</th> --}}
                    {{-- <th class="text-center">Delete</th> --}}
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection