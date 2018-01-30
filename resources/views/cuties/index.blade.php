@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Cuti Pegawai</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('cuti-create')

	            <a class="btn btn-sm btn-success" href="{{ route('cuti.create') }}"> Create New Data</a>

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

			<th>Cuti</th>

			<th>Lama Cuti</th>

			<th>Unit Kerja</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	@php

    function tgl_indo($tanggal)
    {
    $bulan = array (
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        $sp = explode('-', $tanggal);

        $tgl_ind = $sp[2] . ' ' . $bulan[ (int)$sp[1] ] . ' ' . $sp[0];

        return $tgl_ind;
}
@endphp


	@foreach ($cutis as $key => $cu)


	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $cu->id_karyawan }}</td>

		<td>{{ $cu->cuti }}</td>

		<td>{{ $cu->hari }} Hari</td> 

		<td>{{ $cu->id_unit_kerja }}</td> 

		<td>{{ $cu->keterangan }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('cuti.show',$cu->id) }}">Show</a>

			@permission('cuti-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('cuti.edit',$cu->id) }}">Edit</a>

			@endpermission

			@permission('cuti-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['cuti.destroy', $cu->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $cutis->render() !!}

@endsection