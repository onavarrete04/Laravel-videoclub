@extends('layouts.master')

@section('content')

    <div class="row">
    <h3 class="text-center">
   
		Modificar película
	</h3>
</div>
    
    <form action="{{ url('catalog/create') }}" method="POST">
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="title">Titulo:</label>
        <input type="text" class="form-control value" value="{{$pelicula['title']}}"  name="title" id="title">   
    </div>

    <div class="form-group">
        <label for="year">Año:</label>
        <input type="text" class="form-control" value="{{$pelicula['year']}}" name="year" id="year">   
    </div>


    <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" class="form-control" value="{{$pelicula['director']}}" name="director" id="director">   
    </div>

    

    <div class="form-group">
        <label for="poster">URL imagen:</label>
        <input type="text" class="form-control" value="{{$pelicula['poster']}}" name="poster" id="poster">   
    </div>
    

    <div class="form-group">
        <label for="synopsis">Resumen:</label>
        <textarea class="form-control" value="{{$pelicula['synopsis']}}" rows="3"></textarea>  
    </div>

   
    <button type="submit" class="btn btn-#636b6f btn-block">Modificar Pelicula</button>
    {{ csrf_field() }}
    
    </form>

    <br>
    <br>
    <br>
    <br>

@stop