@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Data Cuti</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('cuti.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $cuties->id_karyawan }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>cuti:</strong>

                {{ $cuties->cuti }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Hari:</strong>

                {{ $cuties->hari }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja:</strong>

                {{ $cuties->id_unit_kerja }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                {{ $cuties->keterangan }}

            </div>
        </div>

		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

@endsection