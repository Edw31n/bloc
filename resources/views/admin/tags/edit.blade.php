@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <strong>EDITAR ETIQUETA</strong> 
                </div>
            
            <div class="panel-body">
                {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                    @include('admin.tags.partials.form')
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
    <h1>hola</h1>
</div>
@endsection