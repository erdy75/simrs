@extends('layouts.adminapp')

 

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Tambah Data Karyawan</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="{{ route('karyawan.index') }}"> Back</a>

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

	{!! Form::open(array('route' => 'karyawan.store','method'=>'POST')) !!}

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                {!! Form::text('nama_karyawan', null, array('placeholder' => 'Nama anda...','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tempat lahir:</strong>

                {!! Form::text('tmp_lahir', null, array('placeholder' => 'Kota ...','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Lahir:</strong>

                 {!! Form::date('tgl_lahir', \Carbon\Carbon::now(), null, ['class' => 'form-control', 'placeholder' => 'XX/XX/XXXX']) !!}


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Agama:</strong>

                {!! Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Khatolik' => 'Khatolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha'], null, ['placeholder' => 'Pilih agama', 'class' => 'form-control']) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                {!! Form::select('status', ['Single' => 'Single', 'Menikah' => 'Menikah', 'Janda' => 'Janda', 'Duda' => 'Duda'], null, ['placeholder' => 'Pilih status', 'class' => 'form-control']) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nomor HP:</strong>

                {!! Form::number('no_hp', null, array('class'=> 'form-control', 'placeholder' => '08XXXXXXXXX')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Unit Kerja:</strong>

                {!! Form::text('id_unit_kerja', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja anda')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {!! Form::textarea('alamat', null, array('placeholder' => 'alamat lengkap ...','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>

	</div>

	{!! Form::close() !!}

@endsection