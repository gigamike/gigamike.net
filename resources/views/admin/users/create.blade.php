@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">User Add</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    User Add
		  </div>
		  <div class="card-body">
				@if ($success = session('success'))
          <div class="alert alert-success" role="alert">
          {{ $success }}
          </div>
        @endif

				@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			        @foreach ($errors->all() as $error)
			            <li>{{ $error }}</li>
			        @endforeach
			        </ul>
			    </div>
				@endif

				<form action="{{ route('admin.users.store') }}" method="POST">
    			@csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
							@if($errors->has('email'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('email') }}
                </em>
              @endif
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
							@if($errors->has('password'))
                  <em class="invalid-feedback d-block">
                      {{ $errors->first('password') }}
                  </em>
              @endif
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
							@if($errors->has('name'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('name') }}
                </em>
              @endif
            </div>
            <div class="form-group col-md-6">
              <label for="role_id">Role</label>
              <select class="form-control" id="role_id" name="role_id" required>
								<option value="">Select Role</option>
								@foreach ($roles as $id => $role)
                <option value="{{ $id }}" {{ $id == old('role_id', isset($user) ? $user->role_id : '') ? 'selected' : '' }}>{{ $role }}</option>
								@endforeach
              </select>
							@if($errors->has('roles'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
            </div>
          </div>
					<div class="form-row">
            <div class="form-group col-md-6">
							<label for="is_active">Is Active</label>
              <select class="form-control" id="is_active" name="is_active" required>
                <option value="Y" {{ 'Y' == old('is_active', isset($is_active) ? $user->is_active : '') ? 'selected' : '' }}>Yes</option>
								<option value="N" {{ 'N' == old('is_active', isset($is_active) ? $user->is_active : '') ? 'selected' : '' }}>No</option>
              </select>
							@if($errors->has('is_active'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('is_active') }}
                    </em>
                @endif
            </div>
            <div class="form-group col-md-6">

            </div>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
					<a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
				</form>
		  </div>
		</div>


	</div>
	<!-- /.container-fluid -->
@endsection
