@extends('layouts.adminapp')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Kritik Saran</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('complaint.index') }}"> Back</a>

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

    {!! Form::model($complaints, ['method' => 'PATCH','route' => ['complaint.update', $complaints->id]]) !!}

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No HP:</strong>

                {!! Form::number('no_hp', null, array('placeholder' => '08XXXXXXX','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal :</strong>

                 {!! Form::date('tanggal', null, array('placeholder' => '','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {!! Form::text('alamat', null, array('placeholder' => 'ALamat anda..','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kritik dan Saran:</strong>

                {!! Form::textarea('kritik_saran', null, array('placeholder' => 'Kritik dan saran anda','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

    {!! Form::close() !!}

@endsection