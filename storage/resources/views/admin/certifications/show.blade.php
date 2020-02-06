@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Certification Show</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    Certification Show
		  </div>
		  <div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="name">Name</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" value="{{ $certification->name }}">
						</div>
					</div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Description</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $certification->description }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">URL</label>
            <div class="col-sm-10">
              <a href="{{ $certification->url }}" target="_blank">{{ $certification->url }}</a>
            </div>
          </div>

					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="image">Image</label>
            <div class="col-sm-10">
              <img src="/uploads/certification/{{ $certification->image_filename }}" title="{{ $certification->image_filename }}">
            </div>
          </div>

					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">Tag</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $certification->certificationTag->name }}">
            </div>
          </div>

					<a href="{{ route('admin.certifications.index') }}" class="btn btn-secondary">Cancel</a>
		  </div>
		</div>
	</div>
	<!-- /.container-fluid -->
@endsection
