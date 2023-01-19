@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3">Elenco dei progetti</h1>

        <a href="{{ route('admin.projects.create') }}" class="btn btn-success mt-3">Aggiungi un nuovo progetto</a>

        <div class="row">
            <div class="col mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Nome cliente</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->client_name }}</td>
                                <td>{{ $project->summary }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mx-1"
                                        title="show"><i class="fa-regular fa-eye"></i></a>
                                    <a class="btn btn-warning mx-1" href="{{ route('admin.projects.edit', $project) }}"
                                        title="edit"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
