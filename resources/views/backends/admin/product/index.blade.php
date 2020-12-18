@extends('partials.sidebar')

@push('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/backends/admin/product.css')}}">
@endpush

@section('pageContent')
	@foreach($products as $product)   <h1 class="mk-blue"> {{$product->id}}.  {{$product->name}} </h1> @endforeach
@endsection