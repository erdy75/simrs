@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Show unit kerja</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('unit_kerja.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja:</strong>

                {{ $unit_kerja->unit_kerja }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                {{ $unit_kerja->keterangan }}

            </div>

        </div>
		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

@endsection