@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold m-8">Listado de Materias</h1>
        <div class="flex justify-end items-center mb-4">
            <a href="{{ route('materias.create') }}" class=" bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar Materia</a>
        </div>
        <table class="table-auto w-full border border-collapse  border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $materia->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('materias.show', $materia->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded mr-2">Ver</a>
                            <a href="{{ route('materias.edit', $materia->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded mr-2">Editar</a>
                            <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
