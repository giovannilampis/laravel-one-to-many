@extends('layouts.dashboard')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <p class="text-center fs-2 my-5 text-uppercase">change this project of your collection</p>
    <form action="{{ route('admin.projects.update', compact('project')) }}" method="POST">
        @method("PUT")
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $project->title}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Subtitle</label>
            <input name="subtitle" type="text" class="form-control @error('subtitle') is-invalid @enderror" value="{{ $project->subtitle}}"">
            @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ $project->description}}">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">EDIT</button>
    
      </form>
</div>

@endsection
