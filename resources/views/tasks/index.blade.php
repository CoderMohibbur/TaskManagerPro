<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-xl font-bold mb-4">Task List</h2>

        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Task</a>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Project</th>
                    <th class="border px-4 py-2">Assigned To</th>
                    <th class="border px-4 py-2">Priority</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="border px-4 py-2">{{ $task->title }}</td>
                        <td class="border px-4 py-2">{{ $task->project->name ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ $task->assignedUser->name ?? 'Unassigned' }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($task->priority) }}</td>
                        <td class="border px-4 py-2">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a> |
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
