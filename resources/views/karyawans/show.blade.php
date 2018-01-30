@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Data Karyawan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('karyawan.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $karyawan->nama_karyawan }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>TTL:</strong>

                {{ $karyawan->tmp_lahir }}, {{ $karyawan->tgl_lahir }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama:</strong>

                {{ $karyawan->agama }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                {{ $karyawan->status }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Hp:</strong>

                {{ $karyawan->no_hp }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Unit:</strong>

                {{ $karyawan->id_unit_kerja }}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {{ $karyawan->alamat }}

            </div>

        </div>
		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

@endsection