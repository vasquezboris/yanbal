@extends('layouts.app')

@section('title', 'Makeup')

@section('content')

	<img style="height: 100px; width: 100px; background-color= #EFEFEF;  margin-top: 70px; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$makeup->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$makeup->name}}</h5>
		<h5 class="card-title">{{$makeup->price}}</h5>
		<h5 class="card-title">{{$makeup->tone}}</h5>
		<h5 class="car-title">{{$makeup->description}}</h5>
		<a href="/makeups/{{$makeup->slug}}/edit" class="btn btn-primary">Edit...</a>
	</div>


@endsection
