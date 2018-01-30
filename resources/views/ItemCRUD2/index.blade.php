@extends('layouts.adminapp')

 

@section('content')

	<div class="row">

	    <div class="col-lg-12 margin-tb">

	        <div class="pull-left">

	            <h2>Data Barang ATK</h2>
				<hr>
	        </div>

	        <div class="pull-right">

	        	@permission('item-create')

	            <a class="btn btn-sm btn-success" href="{{ route('itemCRUD2.create') }}"> Create New Item</a>

	            @endpermission

	        </div>

	    </div>

	</div>

	@if ($message = Session::get('success'))

		<div class="alert alert-success">

			<p>{{ $message }}</p>

		</div>

	@endif

	<table class="table table-bordered">

		<tr>

			<th>No</th>

			<th>Nama</th>

			<th>Harga</th>

			<th>Satuan</th>

			<th>Stok</th>

			<th>Keterangan</th>

			<th width="280px">Aksi</th>

		</tr>

	@foreach ($items as $key => $item)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $item->nama }}</td>

		<td>Rp. {{ number_format ($item->harga,2,",",".") }}</td>

		<td>{{ $item->satuan }}</td>

		<td>{{ $item->stok }}</td>

		<td>{{ $item->description }}</td>

		<td>

			<a class="btn btn-sm btn-info" href="{{ route('itemCRUD2.show',$item->id) }}">Show</a>

			@permission('item-edit')

				<a class="btn btn-sm btn-primary" href="{{ route('itemCRUD2.edit',$item->id) }}">Edit</a>

			@endpermission

			@permission('item-delete')

				{!! Form::open(['method' => 'DELETE','route' => ['itemCRUD2.destroy', $item->id],'style'=>'display:inline']) !!}

	            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

	        	{!! Form::close() !!}

        	@endpermission

		</td>

	</tr>

	@endforeach

	</table>

	{!! $items->render() !!}

@endsection