@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>SK Pegawai</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('humas-create')

	            <a class="btn btn-sm btn-success" href="{{ route('humas.create') }}"> Create New Data</a>

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

			<th>No SK</th>

			<th>Tanggal Ditetapkan</th>

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


	@foreach ($humas as $key => $h)


	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $h->surat }}</td>

		<td> {{ tgl_indo( $h->tanggal, true) }} </td>

		<!-- <td>{{ date_format ( date_create($h->tanggal), "d F Y" ) }}</td>
			format internasional --> 

		<td>{{ $h->keterangan }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('humas.show',$h->id) }}">Show</a>

			@permission('humas-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('humas.edit',$h->id) }}">Edit</a>

			@endpermission

			@permission('humas-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['humas.destroy', $h->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $humas->render() !!}

@endsection