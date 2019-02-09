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
						<h3 class="box-title">Update Post: {{$post->title}}</h3>
					</div>

					<!-- /.box-header -->
					@include('includes.errors')
					<!-- form start -->
					<form role="form" action="{{ route('posts.update', ['slug'=>$post->slug]) }}" method="POST">
						@method('PUT')
						@csrf
						<div class="box-body">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="title">Title</label>
									<input name="title" type="text" class="form-control" id="title" placeholder="Enter post title..." value="{{$post->title}}">
								</div>
								<div class="form-group">
									<label for="subtitle">Subtitle</label>
									<input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Enter post suptitle..." value="{{$post->subtitle}}">
								</div>
								<div class="form-group">
									<label for="slug">Slug</label>
									<input name="slug" type="text" class="form-control" id="slug" placeholder="Enter post slug..." value="{{$post->slug}}">
								</div>
							</div>

							<div class="col-lg-6">

								{{-- <div class="form-group">
									<label for="category">Category</label>
									<select name="category" id="category" class="form-control">
										<option value="">Select Category</option>
									</select>
								</div> --}}
								{{-- <div class="form-group">
									<label for="status">Post Status</label>
									<select name="status" id="status" class="form-control">
										<option value="">Select Status</option>
										<option value="1" selected>Published</option>
										<option value="0">Druft</option>
									</select>
								</div> --}}

							{{-- 	<div class="form-group">
									<label for="image">Image</label>
									<input name="image" type="file" id="image">
								</div> --}}
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label for="body">Write a body</label>
									<textarea name="body" id="body" class="textarea" placeholder="Place some text here"
									style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->body}}</textarea>
								</div>
							</div>
							{{-- <div class="col-lg-12">
								<div class="form-group">
									<label for="">Tags</label>
									<div class="checkbox">
										<label>
											<input name="tags" type="checkbox">
											Checkbox 1
										</label>
									</div>
								</div>
							</div> --}}
							<div class="col-lg-12">
								<div class="form-group">
									<button type="submit" class="btn bg-purple">Update</button>
									<a href="{{route('posts.index')}}" class="btn btn-warning">Back</a>
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