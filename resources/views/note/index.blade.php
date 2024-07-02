<x-app-layout>
    <div class="mt-10">
        <a href="{{ route('note.create') }}" class="bg-blue-500 text-white py-2 px-4 font-bold rounded">
            Add Note
        </a>
        <div class="mt-14 flex flex-col gap-y-4">
            @foreach ($notes as $note)
                <div class="w-full bg-slate-200 rounded border border-slate-500 p-4">
                    <div class="mb-3 text-xl">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <ul class="flex gap-x-3">
                        <li><a href="{{ route('note.show', $note) }}" class="border border-green-500 text-white bg-green-500 rounded px-1 h-6 block">View</a></li>
                        <li><a href="{{ route('note.edit', $note) }}" class="border border-blue-500 text-white bg-blue-500 rounded px-1 h-6 block">Edit</a></li>
                        <li>
                            <form action="{{ route('note.destroy', $note) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border border-red-500 text-white bg-red-500 rounded px-1 h-6">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

        {{ $notes->links() }}
    </div>
</x-app-layout>
