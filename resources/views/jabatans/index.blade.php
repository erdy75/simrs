@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Jabatan</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('jabatan-create')

	            <a class="btn btn-sm btn-success" href="{{ route('jabatan.create') }}"> Create New Jabatan</a>

	            @endpermission

	        </div>

	    </div>

	</div>

	@if ($message = Session::get('success'))

		<div class="alert alert-success">

			<p>{{ $message }}</p>

		</div>

	@endif

	<table class="table table-bordered">

		<tr>

			<th>No</th>

			<th>Jabatan</th>

			<th width="280px">Aksi</th>

		</tr>

	@foreach ( $jabatans as $j)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $j->jabatan }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('jabatan.show',$j->id) }}">Show</a>

			@permission('jabatan-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('jabatan.edit',$j->id) }}">Edit</a>

			@endpermission

			@permission('jabatan-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['jabatan.destroy', $j->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $jabatans->render() !!}

@endsection