
@extends('layouts.app')

@section('content')
    <form action="{{ route("admin.projects.store") }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Descrizione</span>
            <input type="text" name="description" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Git Hub link</span>
            <input type="text" name="github_link" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <input type="text" name="cover_img" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Carica immagine</label>
        </div>
        <button type="submit">Salva</button>

    </form>
@endsection
