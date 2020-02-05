@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Certification Add</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    Certification Add
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

				<form action="{{ route('admin.certifications.store') }}" method="POST" enctype="multipart/form-data">
    			@csrf
					<input type="hidden" name="created_user_id" value="{{ $userId }}">
					<div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($certification) ? $certification->name : '') }}" required>
							@if($errors->has('name'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('name') }}
                </em>
              @endif
            </div>
            <div class="form-group col-md-6">
              <label for="certification_tag_id">URL</label>
              <input type="text" class="form-control" id="url" name="url" value="{{ old('url', isset($certification) ? $certification->url : '') }}">
							@if($errors->has('url'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('url') }}
                    </em>
                @endif
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="email">Description</label>
              <textarea rows="10" class="form-control" id="description" name="description">{{ old('description', isset($certification) ? $certification->description : '') }}</textarea>
							@if($errors->has('email'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('email') }}
                </em>
              @endif
            </div>
          </div>

					<div class="form-row">
            <div class="form-group col-md-6">
							<label for="image">Choose Photo</label>
							<input type="file" class="form-control-file" id="image" name="image">
							<small class="form-text text-muted">
								Dimension: 380x360 Type: jpeg,png,jpg
							</small>
							@if($errors->has('photo'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('photo') }}
                </em>
              @endif
            </div>
						<div class="form-group col-md-6">
              <label for="certification_tag_id">Tag</label>
              <select class="form-control" id="certification_tag_id" name="certification_tag_id" required>
								<option value="">Select Tag</option>
								@foreach ($certificationTags as $id => $certificationTag)
                <option value="{{ $id }}" {{ $id == old('certification_tag_id', isset($certification) ? $certification->certification_tag_id : '') ? 'selected' : '' }}>{{ $certificationTag }}</option>
								@endforeach
              </select>
							@if($errors->has('certification_tag_id'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('ccertification_tag_id') }}
                    </em>
                @endif
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
					<a href="{{ route('admin.certifications.index') }}" class="btn btn-secondary">Cancel</a>
				</form>
		  </div>
		</div>


	</div>
	<!-- /.container-fluid -->
@endsection


@section('js')
<script>
  $(function(){

	})
</script>
@endsection
