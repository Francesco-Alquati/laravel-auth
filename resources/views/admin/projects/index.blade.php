@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex  align-items-center justify-content-between p-3">
                    <h2>Progetti</h2>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm">Aggiungi Progetto</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection