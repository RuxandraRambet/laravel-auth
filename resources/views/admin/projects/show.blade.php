@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>{{ $project->title }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text"> {{ $project->description }}</p>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Go back to projects list</a>
            </div>
        </div>

    </div>
@endsection
