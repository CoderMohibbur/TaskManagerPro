<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-xl font-bold mb-4">Projects</h2>
        <a href="{{ route('projects.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create Project</a>

        <ul class="mt-4">
            @foreach ($projects as $project)
                <li class="p-4 bg-white shadow mt-2">
                    <a href="{{ route('projects.show', $project->id) }}" class="text-blue-600">{{ $project->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
