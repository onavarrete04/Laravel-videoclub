@extends('layouts.master')

@section('content')

    vista detalle pelicula{id}
    <div class="row">

    <div class="col-sm-4">

        <img src="" class="img-responsive" alt="Responsive image">

    </div>
    <div class="col-sm-8">
       
        
        <strong>Estado de la pelicula</strong><br>
       
        <button type="" class="btn btn-primary">Pelicula Disponible</button>
        <button type="" class="btn btn-danger">Pelicula Alquilada</button>        
        <a class="btn btn-warning" href="{{url('catalog/edit/'. $pelicula['id'])}}" role="button">Editar Pelicula</a>
        <button type="button" class="btn btn-default">Volver al listado</button>
        {{ csrf_field() }}
        </form>
        

    </div>
</div>
@stop