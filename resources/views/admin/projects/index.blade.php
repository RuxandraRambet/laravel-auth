@extends('layouts.admin')

@section('content')
    <header>
        <div class="container mt-3 d-flex justify-content-between align-items-center">
            <h1>My Projects</h1>
            <a href="{{ route('admin.projects.create') }}" role="button" class="btn btn-primary">Create New Project</a>
        </div>

        @if (session('message'))
            <div class="toast show position-fixed bottom-0 end-0 p-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Alert</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        @endif

    </header>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">slug</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class="fw-bold">{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a href="" role="button" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.projects.show', $project) }}" role="button"
                                class="btn btn-info btn-sm mx-2">Show</a>
                            <a href="" role="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
