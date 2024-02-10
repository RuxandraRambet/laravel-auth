@extends('layouts.admin')

@section('content')
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
                        <td class="fw-bold">{{ $project->id}}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a href="" role="button" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.projects.show', $project) }}" role="button" class="btn btn-info btn-sm mx-2">Show</a>
                            <a href="" role="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul> --}}
@endsection
