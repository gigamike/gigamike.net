@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Portfolio Add</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    Portfolio Add
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

				<form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
    			@csrf
					<input type="hidden" name="created_user_id" value="{{ $userId }}">
					<div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($portfolio) ? $portfolio->name : '') }}" required>
							@if($errors->has('name'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('name') }}
                </em>
              @endif
            </div>
            <div class="form-group col-md-6">
              <label for="portfolio_tag_id">URL</label>
              <input type="text" class="form-control" id="url" name="url" value="{{ old('url', isset($portfolio) ? $portfolio->url : '') }}">
							@if($errors->has('url'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('url') }}
                    </em>
                @endif
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Description</label>
              <textarea rows="10" class="form-control" id="description" name="description">{{ old('description', isset($portfolio) ? $portfolio->description : '') }}</textarea>
							@if($errors->has('email'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('email') }}
                </em>
              @endif
            </div>
						<div class="form-group col-md-6">
              <label for="stacks">Stacks</label>
					    <select size="10" multiple class="form-control" id="stacks" name="stacks[]" required>
								@foreach ($stacks as $id => $stack)
					      <option value="{{ $id }}" {{ in_array($id, old('stacks', isset($portfolio) ? $portfolio->stacks : [])) ? 'selected' : '' }}>{{ $stack }}</option>
								@endforeach
					    </select>
							@if($errors->has('stacks'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('stacks') }}
                </em>
              @endif
            </div>
          </div>

					<div class="form-row">
            <div class="form-group col-md-6">
							<label for="image">Choose Photo</label>
							<input type="file" class="form-control-file" id="image" name="image">
							<small class="form-text text-muted">
								Dimension: 500x280 Type: jpeg,png,jpg
							</small>
							@if($errors->has('photo'))
                <em class="invalid-feedback d-block">
                  {{ $errors->first('photo') }}
                </em>
              @endif
            </div>
						<div class="form-group col-md-6">
              <label for="portfolio_tag_id">Tag</label>
              <select class="form-control" id="portfolio_tag_id" name="portfolio_tag_id" required>
								<option value="">Select Tag</option>
								@foreach ($portfolioTags as $id => $portfolioTag)
                <option value="{{ $id }}" {{ $id == old('portfolio_tag_id', isset($portfolio) ? $portfolio->portfolio_tag_id : '') ? 'selected' : '' }}>{{ $portfolioTag }}</option>
								@endforeach
              </select>
							@if($errors->has('portfolio_tag_id'))
                    <em class="invalid-feedback d-block">
                        {{ $errors->first('cportfolio_tag_id') }}
                    </em>
                @endif
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
					<a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary">Cancel</a>
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
