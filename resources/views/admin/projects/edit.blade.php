@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica Progetto</h1>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label class="label-form">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Nome Progetto" value="{{ old('name', $project->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="label-form">Descrizione Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm">{{ old('summary', $project->summary) }}</textarea>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection