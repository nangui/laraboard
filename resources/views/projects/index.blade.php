@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="button">New project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white p-5 rounded-lg shadow" style="height: 200px;">
                    <h3 class="font-normal text-xl py-6 -ml-5 border-l-4 border-blue-light mb-4 pl-4">
                        <a href="{{ $project->path() }}" class="text-black no-underline">
                            {{ $project->title }}
                        </a>
                    </h3>
                    <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <p>No projects yet.</p>
        @endforelse
        </main>
@endsection
