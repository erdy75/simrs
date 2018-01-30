@extends('layouts.adminapp')

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Edit New Item</h2>

	        </div>

	        <div class="pull-right">

	            <a class="btn btn-primary" href="{{ route('itemCRUD2.index') }}"> Back</a>

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

	{!! Form::model($item, ['method' => 'PATCH','route' => ['itemCRUD2.update', $item->id]]) !!}

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama :</strong>

                {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Harga:</strong>

                {!! Form::number('harga', null, array('placeholder' => 'Harga','class' => 'form-control')) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Satuan:</strong>

                {!! Form::select('satuan', ['box' => 'BOX','lembar' => 'Lembar','lusin' => 'Lusin','pcs' => 'Pcs','biji' => 'Biji','buah' => 'Buah','meter' => 'Meter','cm' => 'Centimeter','kg' => 'KG','gram' => 'Gram','roll' => 'Roll','botol' => 'Botol', 'kodi' => 'Kodi','rim' => 'Rim'], null, ['placeholder' => 'Satuan']) !!}

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Stok:</strong>

                {!! Form::number('stok', null, array('placeholder' => 'Stok','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan:</strong>

                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

				<button type="submit" class="btn btn-primary">Submit</button>

        </div>

	</div>

	{!! Form::close() !!}

@endsection