@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Post</h1>
        <!-- Formulario para crear un nuevo post -->
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Contenido:</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection


