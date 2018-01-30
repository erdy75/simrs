@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Unit Kerja</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('unit_kerja-create')

	            <a class="btn btn-sm btn-success" href="{{ route('unit_kerja.create') }}"> Create New Unit Kerja</a>

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

			<th>Unit Kerja</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	@foreach ( $unit_kerja as $uk)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $uk->unit_kerja }}</td>

		<td>{{ $uk->keterangan }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('unit_kerja.show',$uk->id) }}">Show</a>

			@permission('unit_kerja-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('unit_kerja.edit',$uk->id) }}">Edit</a>

			@endpermission

			@permission('unit_kerja-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['unit_kerja.destroy', $uk->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $unit_kerja->render() !!}

@endsection