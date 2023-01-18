@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3">Elenco dei progetti</h1>

        <div class="row">
            <div class="col mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->name }}</th>
                                <td>{{ $project->client_name }}</td>
                                <td>{{ $project->summary }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
