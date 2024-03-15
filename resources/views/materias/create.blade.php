@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="">
            <h1 class="text-3xl font-bold mb-4 ">Agregar Materia</h1>

            <form action="{{ route('materias.store') }}" method="POST">

                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-4 text-sm font-medium leading-6 text-slate-700">Nombre de la Materia</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md showdo-sm focus:outline-none focus:border-cyan-500" required>
                </div>
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Guardar</button>
            </form>
        </div>
    </div>
@endsection
