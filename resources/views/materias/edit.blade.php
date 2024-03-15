@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Editar Materia</h1>
        <form action="{{ route('materias.update', $materia->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre de la Materia</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-cyan-500" value="{{ $materia->name }}" required>
            </div>
            <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Guardar Cambios</button>
        </form>
    </div>
@endsection
