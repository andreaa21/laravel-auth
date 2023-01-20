@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col card mt-5">
                <h5 class="card-title my-2">{{ $project->name }}</h5>
                <h5 class="card-title my-2">{{ $project->client_name }}</h5>
                <h5 class="card-title my-2">{{ $project->summary }}</h5>

                @if ($project->cover_image)
                    <div>
                        <img width="500" class="my-5" src="{{ asset('storage/' . $project->cover_image) }}"
                            alt="{{ $project->cover_image_original_name }}">
                    </div>
                @endif

            </div>
        </div>
        <a class="btn btn-primary my-4" href=" {{ route('admin.projects.index') }} ">INDIETRO </a>
    </div>
@endsection
