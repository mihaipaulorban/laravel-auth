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
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
