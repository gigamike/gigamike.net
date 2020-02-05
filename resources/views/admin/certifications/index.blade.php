@extends('layouts/admin')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-2 text-gray-800">Certifications Overview</h1>
		<p class="mb-4"></p>

		<div class="card">
		  <div class="card-header">
		    Search
		  </div>
		  <div class="card-body">
				@if ($success = session('success'))
          <div class="alert alert-success" role="alert">
          {{ $success }}
          </div>
        @endif
				<form action="{{ route('admin.certifications.search') }}" method="POST">
    			@csrf
					<div class="form-row">

				    <div class="form-group col-md-6">
				      <input name="name_keyword" type="text" class="form-control" placeholder="%Name%" value="{{ $filter['name_keyword'] ?? '' }}">
				    </div>
						<div class="form-group col-md-6">
				      <button type="submit" class="btn btn-primary mb-2">Search</button>
				    </div>
					</div>
				</form>
		  </div>
		</div>

		<br>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Certifications Overview</h6>
			</div>
			<div class="card-body">
				<div class="text-right">
					<a href="{{ route('admin.certifications.create') }}" class="btn btn-secondary">Add Certification</a>
				</div>

				<br>

				<div class="table-responsive">
						<table id="dataTable" class="table table-bordered table-striped table-hover table-sm" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10"><input type="checkbox" class="selectall"/></th>
									<th>Name</th>
									<th width="3%">Show</th>
									<th width="3%">Edit</th>
									<th width="3%">Delete</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th><input type="checkbox" class="selectall"/></th>
									<th>Name</th>
									<th>Show</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($certifications as $key => $certification)
								<tr>
									<td><input type="checkbox" class="singlechkbox" name="ids" value="{{ $certification->id }}"/></td>
									<td><a href="{{ $certification->url ?? '#' }}" target="_blank">{{ $certification->name ?? '' }}</a></td>
									<td><a class="btn btn-sm btn-info" href="{{ route('admin.certifications.show', $certification->id) }}">Show</a></td>
									<td><a class="btn btn-sm btn-warning" href="{{ route('admin.certifications.edit', $certification->id) }}">Edit</a></td>
									<td><form action="{{ route('admin.certifications.destroy', $certification->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="submit" class="btn btn-sm btn-danger" value="Delete">
									</form></td>
								</tr>
								@endforeach
							</tbody>
						</table>
				</div>


				<div class="row">
					<div class="col-sm-6 col-md-6">
						<button id="massDestroy" name="massDestroy" type="button" class="btn btn-sm btn-danger">Delete Selected</button> Showing {{ $certifications->firstItem() }} to {{ $certifications->lastItem() }} of {{ $certifications->total() }} entries
					</div>
					<div class="col-sm-6 col-md-6">
						{!! $certifications->appends(['name_keyword' => $filter['name_keyword'] ?? ''])->links() !!}
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->
@endsection

@section('js')
<script src="/assets/admin/js/checkbox.js"></script>
<script>
  $(function(){
		$("#massDestroy").click(function(){
			var ids = new Array();
			$("input:checkbox[name=ids]:checked").each(function(){
        ids.push($(this).val());
      });

			if(ids.length > 0){
				if(confirm("Are you sure, you want to delete the selected?")){
					$.ajax({
	          headers: {'x-csrf-token': $('meta[name="csrf-token"]').attr('content')}
	          , method: 'POST'
	          , url: '{{ route('admin.certifications.mass_destroy') }}'
	          , data: {
							ids: ids
							, _method: 'DELETE'
						}
					}).done(function(){
							location.reload();
					});
				}
			}else{
        alert('Please select at least one!');
        return
	    }
		});
	})
</script>
@endsection
