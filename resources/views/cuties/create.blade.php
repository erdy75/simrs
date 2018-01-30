@extends('layouts.adminapp')

 

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Menambahkan Cuti</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="{{ route('cuti.index') }}"> Back</a>

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

	{!! Form::open(array('route' => 'cuti.store','method'=>'POST')) !!}

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Karyawan :</strong>

                {!! Form::text('id_karyawan', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Cuti :</strong>

                {!! Form::select('cuti', ['tahunan' => 'tahunan','hamil' => 'hamil','menikah' => 'menikah','melahirkan' => 'melahirkan'], null, ['placeholder' => ' ', 'class' => 'form-control']) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Hari:</strong>

                 {!! Form::text('hari', null, array('placeholder' => 'Berapa hari anda cuti...','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja:</strong>

                {!! Form::number('id_unit_kerja', null, array('placeholder' => 'Unit kerja anda ..','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                {!! Form::textarea('keterangan', null, array('placeholder' => 'keterangan cuti ..','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>

	</div>

	{!! Form::close() !!}

@endsection