@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>New Category</h4>
				</div>
				<div class="card-body">
					<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Job Category</label>
							<input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror">
							@error('name')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Category Image</label>
							<img src="{{asset('images/cat_img.png')}}" alt="" width="100" height="100" class="mb-2 ml-3" id="preview-img">
							<input type="file" name="image" id="profile" class="form-control-file @error('image') is-invalid @enderror">
							@error('image')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>

						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-success">
							<a href="{{ route('categories.index') }}" class="btn btn-secondary float-right">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
