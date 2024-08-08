<x-app-layout>
    <div class="note-container single-note">
        <h1 class="font-fredoka font-semibold text-2xl lg:text-3xl text-white mb-5">Create new Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="w-full bg-biru2 bayangan2 font-pattrick_hand text-putih text-lg leading-loose p-5 active:ring-0" placeholder="Enter your note here"></textarea>
            <div class="flex justify-end space-x-4 mt-3">
                <a href="{{ route('note.index') }}" class="p-2 lg:p-2.5 bg-biru1 w-20 lg:w-32 text-center font-pattrick_hand text-lg bayangan_low transition duration-300 ease-in-out active-a">Cancel</a>
                <button class="p-2 lg:p-2.5 bg-biru1 w-20 lg:w-32 text-center font-pattrick_hand text-lg bayangan_low active:translate-x-1 active:translate-y-1 transition duration-300 ease-in-out active:shadow-none">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
