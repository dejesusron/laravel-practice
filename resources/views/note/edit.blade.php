<x-app-layout>
    <div class="mt-10">
        <h1 class="mb-5 font-bold text-2xl">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" id="note" placeholder="Enter yout note here" class="w-full rounded mb-3">
                {{ $note->note }}
            </textarea>
            <div>
                <a href="{{ route('note.index') }}" class="bg-red-500 text-white px-4 py-1 rounded h-8 inline-block">Cancel</a>
                <button class="bg-blue-500 text-white px-4 py-1 rounded h-8 inline-block">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
