@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2> Show Jabatan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('jabatan.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan :</strong>

                {{ $jabatan->jabatan }}

            </div>

        </div>

		<div class="pull-left">

	        <a class="btn btn-sm btn-success" href="#">Print</a>

	    </div>
	</div>

@endsection