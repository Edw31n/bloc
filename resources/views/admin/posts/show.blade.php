@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <strong>VER ENTADA</strong> 
                </div>
            
            <div class="panel-body">
                <p><strong>Nombre</strong>   {{ $post->name}}</p>
                <p><strong>Slug</strong>     {{ $post->slug}}</p>
                <p><strong>Descripcion</strong>{{ $post->body}}</p>
            </div>
            </div>
        </div>
    </div>
    <h1>hola</h1>
</div>
@endsection