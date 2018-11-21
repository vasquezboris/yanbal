@extends('layouts.app')

@section('title', 'Makeups')

@section('content')

	<div class="row">
	@foreach($makeups as $makeup)
		<div class="col-sm">
			<div class="card text-center" style="width: 18rem; margin-top: 70px;  ">
				<img style="height: 100px; width: 100px; background-color= #EFEFEF;margin: 20 px; " class="card-img-top rounded-circle mx-auto d-block" src="images/{{$makeup->avatar}}" alt="">
			 <div class="card-body">
			    <h5 class="card-title">{{$makeup->name}}</h5>
			    <h5 class="card-title">{{$makeup->tone}}</h5>
			    <a href="/makeups/{{$makeup->slug}}" class="btn btn-primary">See more...</a>
			  </div>
			</div>
		</div>
	@endforeach
	</div>

@endsection
