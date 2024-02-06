@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Progetti</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                </tr>
            </thead>

            {{-- Pulsante "Crea" --}}
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-3">Crea Nuovo Progetto</a>
            
            {{-- Tabella --}}
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            {{-- Pulsante "Modifica" --}}
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Modifica</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
