@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <strong>LISTA DE CATEGORIAS</strong> 
                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                </div>
            

            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name}}</td>
                            <td width="10px">
                            <a href="{{ route('categories.show', $category->id)}}" class="btn btn-sm btn-info">
                                    Ver
                            </a>
                            </td>
                            <td width="10px">
                            <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-sm btn-warning">
                                Editar
                            </a>
                            </td>
                            <td width="10px">
                                    {!! Form::open([ 'route' => ['categories.destroy', $category->id], 'method' => 'DELETE' ]) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
    <h1>hola</h1>
</div>
@endsection