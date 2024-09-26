@extends('layouts.app') 

@section('content') 
<div class="container"> 
    <h1 class="my-4">Lista de Tareas </h1> 

<!-- Formulario para crear tareas --> 
<form action="{{ route('tasks.store') }}" method="POST"> 
    @csrf 
    <div class="input-group mb-3"> 
        <input type="text" name="name" class="form-control" 
placeholder="Nueva tarea" required> 
        <button class="btn btn-primary" type="submit">Agregar</button> 
    </div> 
</form> 

<!-- Listado de tareas --> 
<ul class="list-group"> 
@foreach ($tasks as $task) 
    <li class="list-group-item d-flex justify-content-between align-items
center"> 
        {{ $task->name }} 
    <form action="{{ route('tasks.destroy', $task) }}" method="POST"> 
        @csrf 
        @method('DELETE') 
        <button class="btn btn-danger btn-sm">Eliminar</button> 
    </form> 
</li> 
@endforeach 
</ul> 
</div> 
@endsection
