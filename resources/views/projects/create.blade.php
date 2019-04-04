@extends('layouts.app')

@section('content')
    <h1>Create a project</h1>

    <form action="/projects" method="POST">
        @csrf
        <label for="title">Title</label>
        <div>
            <input type="text" name="title" id="title">
        </div>
        <label for="description">Description</label>
        <div>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
            <a href="/projects">Cancel</a>
        </div>
    </form>
@endsection
