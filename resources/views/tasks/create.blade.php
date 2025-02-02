<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-xl font-bold mb-4">Create Task</h2>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label>Title:</label>
            <input type="text" name="title" class="w-full p-2 border rounded" required>

            <label>Description:</label>
            <textarea name="description" class="w-full p-2 border rounded"></textarea>

            <label>Priority:</label>
            <select name="priority" class="w-full p-2 border rounded">
                <option value="low">Low</option>
                <option value="medium" selected>Medium</option>
                <option value="high">High</option>
            </select>

            <label>Status:</label>
            <select name="status" class="w-full p-2 border rounded">
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>

            <label>Due Date:</label>
            <input type="datetime-local" name="due_date" class="w-full p-2 border rounded">

            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Save Task</button>
        </form>
    </div>
</x-app-layout>
