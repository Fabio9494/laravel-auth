@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">MODIFICA PROGETTO</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <form action="{{ route('adminprojects.update', $project) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" value="{{ old('title') ?? $project->title }}"
                            class="form-control @error('title') is-invalid @enderror" required>
                        @error('title')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>





                    <div class="form-group">
                        <label for="date">data</label>
                        <input type="date" name="date" id="date" value="{{ old('date') ?? $project->date }}"
                            class="form-control @error('date') is-invalid @enderror" required>
                        @error('date')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" cols="30" rows="10" id="description"
                            class="form-control @error('description') is-invalid @enderror" required>{{ old('description') ?? $project->description }}</textarea>
                        @error('description')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="author">Autori</label>
                        <input type="text" name="author" id="author" value="{{ old('author') ?? $project->author }}"
                            class="form-control @error('author') is-invalid @enderror" required>
                        @error('author')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary my-3">SALVA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
