<x-app-layout>
    <div class="mt-10">
        <h1 class="mb-5 font-bold text-2xl">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <textarea name="note" id="note" placeholder="Enter yout note here" class="w-full rounded mb-3"></textarea>
            <div class="flex gap-x-3">
                <a href="{{ route('note.index') }}" class="bg-red-500 text-white px-4 py-1 rounded h-8 inline-block">Cancel</a>
                <button class="bg-blue-500 text-white px-4 py-1 rounded h-8 inline-block">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
