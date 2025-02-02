<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-xl font-bold mb-4">Create Project</h2>

        <form action="{{ route('projects.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            <label class="block mb-2">Project Name:</label>
            <input type="text" name="name" class="border p-2 w-full" required>

            <label class="block mt-4">Description:</label>
            <textarea name="description" class="border p-2 w-full"></textarea>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2">Create</button>
        </form>
    </div>
</x-app-layout>
