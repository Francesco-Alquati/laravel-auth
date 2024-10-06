@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi Progetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label class="label-form">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Nome Progetto">
                        </div>
                        <div class="col-12">
                            <label class="label-form">Descrizione Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
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