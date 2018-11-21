@extends('layouts.app')

@section('title', 'Makeups Create')

@section('content')
					<h1>Makeup</h1>
			<form class="form-group" method="POST" action="/makeups" enctype="multipart/form-data">
				@csrf
				<div class="jumbotron">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Name</label>
						<input type="text" name="name" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Price</label>
						<input type="text" name="price" class="form-control">
					</div>					
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Tone</label>
						<input type="text" name="tone" class="form-control">
					</div>	
					<div class="form-group col-md-6"">
						<label for="">Slug</label>
						<input type="text" name="slug" class="form-control">
					</div>	
				</div>
				<div class="form-group">
    				<label for="">Description</label>
    				<input type="text" rows="3" name="description" class="form-control">
 				</div>
 				<div class="form-group">
						<label for="">Avatar</label>
						<input type="file" name="avatar" >
					</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
			</form>


@endsection
