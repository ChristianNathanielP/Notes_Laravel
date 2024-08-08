<x-app-layout>
    <div class="note-container single-note">
        <div class="flex justify-between flex-wrap items-center mb-5">
            <h1 class="font-fredoka font-semibold text-2xl lg:text-3xl text-white">Note : {{ $note->created_at->setTimezone('Asia/Jakarta')->format('l, d F Y G:i') }}</h1>
            <div class="flex space-x-4 mt-5 lg:mt-0">
                <a href="{{ route('note.edit', $note) }}" class="p-2 lg:p-2.5 bg-biru1 w-20 lg:w-32 text-center font-pattrick_hand text-lg bayangan_low transition duration-300 ease-in-out active-a hover:text-green-300">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="p-2 lg:p-2.5 bg-biru1 w-20 lg:w-32 text-center font-pattrick_hand text-lg bayangan_low active:translate-x-1 active:translate-y-1 transition duration-300 ease-in-out active:shadow-none hover:text-red-300">Delete</button>
                </form>
            </div>
        </div>
        <div class="bg-biru2 bayangan2 font-pattrick_hand text-putih text-lg leading-loose">
            <div class="note-body p-5">
                {!! nl2br(e($note->note)) !!}
            </div>
        </div>
    </div>
</x-app-layout>
