@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data SK RSSH</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('humas.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Surat Keputusan:</strong>

                {{ $humas->surat }}

            </div>

        </div>

         
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

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Surat Keputusan:</strong>
          
                <!-- <td>{{ date_format ( date_create($humas->tanggal), "d F Y" ) }}</td>
                format internasional --> 
                <td> {{ tgl_indo( $humas->tanggal, true) }} </td>

            </div>

        </div>


       
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                {{ $humas->keterangan }}

            </div>

        </div>
		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

@endsection