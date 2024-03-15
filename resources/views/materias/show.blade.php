@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Detalles de la Materia</h1>
        <div class="shadow overflow-hidden sm:rounded-lg m-10">
            <div class="sm:px-6">
                <h3 class="text-lg font-semibold leading-6 text-gray-900 m-5">Información de la Materia</h3>
            </div>
            <div class="border border-gray-200 rounded-sm">
                <dl>
                    <div class="bg-white m-5 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Nombre</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $materia->name }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('materias.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center underline">
                Volver al Listado
            </a>
        </div>
    </div>
@endsection
