@extends('layouts.app')

@section('title', 'Fragrance')

@section('content')

	<img style="height: 100px; width: 100px; background-color= #EFEFEF;  margin-top: 70px; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$fragrance->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$fragrance->name}}</h5>
		<h5 class="card-title">{{$fragrance->price}}</h5>
		<h5 class="card-title">{{$fragrance->tone}}</h5>
		<h5 class="car-title">{{$fragrance->description}}</h5>
		<a href="/fragrances/{{$fragrance->slug}}/edit" class="btn btn-primary">Edit...</a>
	</div>


@endsefragrance