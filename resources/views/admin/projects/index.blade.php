@extends('layouts.dashbord');

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-4">
                <div class="d-flex">
                    <h2>Progetti</h2>
                    <a href="" class="btn btn-primary">Aggiungi Progetto</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped-success">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn btn-sm btn-danger">button</a>
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