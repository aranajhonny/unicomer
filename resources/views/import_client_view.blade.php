@extends('layouts.app')
@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Import Clients</h1>
		</div>
		<div class="panel-body">
			<form id="uploadForm" action="{{ url('admin/import') }}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				@if ($errors->any())
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if (Session::has('success'))
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<p>{{ Session::get('success') }}</p>
				</div>
				@endif
				Select file to upload:
				<input type="file" accept=".csv" name="clients" id="clients"><br>
				<input type="submit" value="Upload file" name="submit">
				<div id="progress-div"><div id="progress-bar"></div></div>
				<div id="targetLayer"></div>
			</form>
		</div>
	</div>
</div>
@endsection