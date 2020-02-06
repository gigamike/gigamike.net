@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Portfolio Show</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    Portfolio Show
		  </div>
		  <div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="name">Name</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" value="{{ $portfolio->name }}">
						</div>
					</div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Description</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $portfolio->description }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">URL</label>
            <div class="col-sm-10">
              <a href="{{ $portfolio->url }}" target="_blank">{{ $portfolio->url }}</a>
            </div>
          </div>

					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="image">Image</label>
            <div class="col-sm-10">
              <img src="/uploads/portfolio/{{ $portfolio->image_filename }}" title="{{ $portfolio->image_filename }}">
            </div>
          </div>

					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">Tag</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $portfolio->portfolioTag->name }}">
            </div>
          </div>

					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">Stack</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ implode(', ', $portfolio->stacks()->pluck('name')->toArray()) }}">
            </div>
          </div>

					<a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary">Cancel</a>
		  </div>
		</div>
	</div>
	<!-- /.container-fluid -->
@endsection
