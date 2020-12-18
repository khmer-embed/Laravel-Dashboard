@extends('partials.sidebar')
@push('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/backends/admin/product.css')}}">
@endpush
@section('pageContent')
@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@elseif ($message = Session::get('danger'))
	<div class="alert alert-danger">
		<p>{{ $message }}</p>
	</div>
@endif
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-lg-12 margin-tb pull-right">
			<div class="pull-left">
				<h3>Products</h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('product.create') }}">Add Product</a>
			</div>
		</div>
	</div>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Details</th>
			<th width="280px">Actions</th>
		</tr>
		@foreach ($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->detail }}</td>
			<td>
				<a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
				<a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
				<a  class="btn btn-danger" href="{{ route('product.destroy',$product->id) }}">Delete</a>
			</td>
		</tr>
		@endforeach
		
	</table>
@endsection