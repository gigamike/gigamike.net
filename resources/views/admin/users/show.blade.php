@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">User Show</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    User Show
		  </div>
		  <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Email</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $user->email }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $user->name }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">Role</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $user->role->name }}">
            </div>
          </div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">API Toke</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $user->api_token }}">
            </div>
          </div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label" for="role_id">Is Active</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" value="{{ $user->is_active == 'Y' ? 'Yes' : 'No' }}">
            </div>
          </div>
					<a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
		  </div>
		</div>
	</div>
	<!-- /.container-fluid -->
@endsection
