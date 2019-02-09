@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box" style="border-top: 0">
					<div class="box-header with-border bg-purple">
						<h3 class="box-title">Update Category: {{$category->name}}</h3>
					</div>
					<!-- /.box-header -->
					@include('includes.errors')
					<!-- form start -->
					<form role="form" action="{{ route('categories.update', ['slug'=>$category->slug]) }}" method="POST">
						@method('PUT')
						@csrf
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">
								<div class="form-group">
									<label for="name">Category Name</label>
									<input name="name" type="text" class="form-control" id="name" placeholder="Enter category name..." value="{{$category->name}}">
								</div>
								<div class="form-group">
									<label for="slug">Category Slug</label>
									<input name="slug" type="text" class="form-control" id="slug" placeholder="Enter category slug..." value="{{$category->slug}}">
								</div>
								<div class="form-group">
									<button type="submit" class="btn bg-purple">Update</button>
									<a href="{{route('categories.index')}}" class="btn btn-warning">Back</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box -->				
			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection