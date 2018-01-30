@extends('layouts.adminapp')

@section('content')
        
	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>SK Pegawai</h2>
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

			<th>No SK</th>

			<th>Tanggal Ditetapkan</th>

			<th>Keterangan</th>

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

	</tr>

	@endforeach

	</table>

	{!! $humas->render() !!}

			<div class="pull-left">


				@permission('humas-download')

	            <a class="btn btn-sm btn-success" href="{{ route('humas.download') }}"> Download</a>

	            @endpermission	            

	        </div>

@endsection