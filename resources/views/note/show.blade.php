<x-app-layout>
    <div class="mt-10">
        <div class="mb-10">
            <h1 class="mb-5 font-bold text-2xl">Note: {{ $note->created_at }}</h1>
            <div class="flex gap-x-3">
                <a href="{{ route('note.edit', $note) }}" class="bg-blue-500 text-white px-4 py-1 rounded h-8">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-4 py-1 rounded h-8">Delete</button>
                </form>
            </div>
        </div>
        <div class="border border-slate-500 p-3 rounded bg-slate-200">
            <div class="text-xl">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
