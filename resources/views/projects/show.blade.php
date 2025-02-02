<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-2xl font-bold">{{ $project->name }}</h2>
        <p class="mt-2">{{ $project->description }}</p>

        <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mt-4">Edit</a>

        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="mt-4 inline">
            @csrf @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
        </form>
    </div>
</x-app-layout>
