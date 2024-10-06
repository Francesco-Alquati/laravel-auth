@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h1 class="text-danger">{{ $project->name }}</h1>
                <p>{{ $project->slug }}</p>
                <p>{{ $project->summary }}</p>
            </div>
        </div>
    </div>
@endsection