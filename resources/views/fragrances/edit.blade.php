@extends('layouts.app')

@section('title', 'Fragrance Edit')

@section('content')
					<h1>Fragrance</h1>
			<form class="form-group" method="POST" action="/fragrances/{{$fragrance->slug}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
				<div class="jumbotron">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Name</label>
						<input type="text" name="name" value="{{$fragrance->name}}" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Price</label>
						<input type="text" name="price" value="{{$fragrance->price}}" class="form-control">
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Type of fragrance</label>
						<input type="text" name="type" value="{{$fragrance->tone}}" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Slug</label>
						<input type="text" name="slug" value="{{$fragrance->slug}}" class="form-control">
					</div>	
				</div>
				<div class="form-group">
    				<label for="">Description</label>
    				<input type="text" rows="3" name="description" value="{{$fragrance->description}}" class="form-control">
    				
 				</div>
 				<div class="form-group">
						<label for="">Avatar</label>
						<input type="file" name="avatar" value="{{$fragrance->avatar}}" >
					</div>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
			</form>


@endsection
