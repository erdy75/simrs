@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Jabatan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-sm btn-primary" href="{{ route('jabatan.index') }}"> Back</a>

	        </div>

	    </div>

	</div>

	@if (count($errors) > 0)

		<div class="alert alert-danger">

			<strong>Whoops!</strong> There were some problems with your input.<br><br>

			<ul>

				@foreach ($errors->all() as $error)

					<li>{{ $error }}</li>

				@endforeach

			</ul>

		</div>

	@endif

	{!! Form::open(array('route' => 'jabatan.store','method'=>'POST')) !!}

	<div class="row">

		<div class="col-xs-6 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>Jabatan :</strong>

                {!! Form::text('jabatan', null, array('placeholder' => 'Jabatan Anda ...','class' => 'form-control')) !!}

            </div>

            <button type="submit" class="btn btn-sm btn-primary">Submit</button>

        </div>


	</div>

	{!! Form::close() !!}

@endsection