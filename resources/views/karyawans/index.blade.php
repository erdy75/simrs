@extends('layouts.adminapp')

 

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Karyawan</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('karyawan-create')

	            <a class="btn btn-sm btn-success" href="{{ route('karyawan.create') }}"> Menambahkan karyawan baru</a>

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

			<th>Tempat Lahir</th>

			<th>Tanggal Lahir</th>

			<th>Agama</th>

			<th>Status</th>

			<th>No Hp</th>

			<th>Unit Kerja</th>

			<th>Alamat</th>

			<th width="280px">Aksi</th>

		</tr>

	@foreach ($karyawans as $key => $k)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $k->nama_karyawan }}</td>

		<td>{{($k->tmp_lahir) }}</td>

		<td>{{ date_format ( date_create($k->tgl_lahir), "d F Y" ) }}</td>

		<td>{{ $k->agama }}</td>

		<td>{{ $k->status }}</td>

		<td>{{ $k->no_hp }}</td>
		
		<td>{{ $k->id_unit_kerja }}</td>

		<td>{{ $k->alamat }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('karyawan.show',$k->id) }}">Show</a>

			@permission('karyawan-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('karyawan.edit',$k->id) }}">Edit</a>

			@endpermission

			@permission('karyawan-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['karyawan.destroy', $k->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $karyawans->render() !!}

@endsection