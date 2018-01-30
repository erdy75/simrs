@extends('layouts.adminapp')

 

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Kritik dan Saran Pasien</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('complaint-create')

	            <a class="btn btn-sm btn-success" href="{{ route('complaint.create') }}"> Create New Data</a>

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

			<th>Nama</th>

			<th>No HP</th>

			<th>Tanggal</th>

			<th>Alamat</th>

			<th>Kritik Saran</th>

			<th width="280px">Aksi</th>

		</tr>

	@foreach ($complaints as $key => $c)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $c->nama }}</td>

		<td>{{ $c->no_hp }}</td>

		<td>{{ date_format ( date_create($c->tanggal), "d F Y" ) }}</td>

		<td>{{ $c->alamat }}</td>

		<td>{{ $c->kritik_saran }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('complaint.show',$c->id) }}">Show</a>

			@permission('complaint-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('complaint.edit',$c->id) }}">Edit</a>

			@endpermission

			@permission('complaint-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['complaint.destroy', $c->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $complaints->render() !!}

@endsection