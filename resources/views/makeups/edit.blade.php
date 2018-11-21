@extends('layouts.app')

@section('title', 'Makeup Edit')

@section('content')
					<h1>Makeup</h1>
			<form class="form-group" method="POST" action="/makeups/{{$makeup->slug}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="jumbotron">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Name</label>
						<input type="text" name="name" value="{{$makeup->name}}" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Price</label>
						<input type="text" name="price" value="{{$makeup->price}}" class="form-control">
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Tone</label>
						<input type="text" name="tone" value="{{$makeup->tone}}" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Slug</label>
						<input type="text" name="slug" value="{{$makeup->slug}}" class="form-control">
					</div>	
				</div>
				<div class="form-group">
    				<label for="">Description</label>
    				<input type="text" rows="3" name="slug" value="{{$makeup->description}}" class="form-control">
    				
 				</div>
 				<div class="form-group">
						<label for="">Avatar</label>
						<input type="file" name="avatar" value="{{$makeup->avatar}}" >
					</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
			</form>


@endsection
