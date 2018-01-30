@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Kritik dan Saran</h2>
				<hr>
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

			<th>Nomor HP</th>

			<th>Tanggal</th>

			<th>Alamat</th>

			<th>Kritik Saran</th>

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


	@foreach ($complaints as $key => $c)


	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $c->nama }}</td>

		<td>{{ $c->no_hp }}</td>

		<td> {{ tgl_indo( $c->tanggal, true) }} </td>

		<!-- <td>{{ date_format ( date_create($c->tanggal), "d F Y" ) }}</td>
			format internasional --> 

		<td>{{ $c->alamat }}</td>

		<td>{{ $c->kritik_saran }}</td>

	</tr>

	@endforeach

	</table>

	{!! $complaints->render() !!}

			<div class="pull-left">


				@permission('complaint-download')

	            <a class="btn btn-sm btn-success" href="{{ route('complaint.download') }}"> Download</a>

	            @endpermission	            

	        </div>

@endsection