@extends('layouts.master')

@section('content')
  
<div class="row">
    <h3 class="text-center">
   
		Añadir película
	</h3>
</div>
    
    <form action="{{ url('catalog/create') }}" method="POST">
    <div class="form-group">
        <label for="title">Titulo:</label>
        <input type="text" class="form-control"  name="title" id="title">   
    </div>

    <div class="form-group">
        <label for="year">Año:</label>
        <input type="text" class="form-control"  name="year" id="year">   
    </div>

    <div class="form-group">
        <label for="year">Año:</label>
        <input type="text" class="form-control"  name="year" id="year">   
    </div>

    <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" class="form-control"  name="director" id="director">   
    </div>

    <div class="form-group">
        <label for="year">Año:</label>
        <input type="text" class="form-control"  name="year" id="year">   
    </div>

    <div class="form-group">
        <label for="poster">URL imagen:</label>
        <input type="text" class="form-control"  name="poster" id="poster">   
    </div>
    

    <div class="form-group">
        <label for="synopsis">Resumen:</label>
        <textarea class="form-control" rows="3"></textarea>  
    </div>
    <button type="submit" class="btn btn-#636b6f btn-block">Añadir Pelicula</button>
      
    {{ csrf_field() }}
    </form>

    <br>
    <br>
    <br>
    <br>



@stop