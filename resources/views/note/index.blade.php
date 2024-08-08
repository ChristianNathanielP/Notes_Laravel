<x-app-layout>
    <div class="font-pattrick_hand">
        <div class="w-fit bg-kuning lg:py-2.5 lg:px-5 py-1 px-3 bayangan_low text-xl lg:text-2xl text-bg_biru hover:text-orangee transition duration-300 ease-in-out active-a">
            <a href="{{ route('note.create') }}" >
                <i class="fa-solid fa-pen-to-square mr-2"></i> Add Note
            </a>
        </div>
        <div class="grid xl:grid-cols-3 md:grid-cols-1 lg:grid-cols-2 mt-10 gap-x-5 gap-y-12">
            @foreach ($notes as $note)
            <div class="lg:w-[400px]  h-[350px] bg-biru1 px-3 bayangan2">
                <div class="text-right py-1.5 text-kuning">
                    {{ $note->created_at->diffForHumans() }}
                </div>
                <div class="bg-biru2 rounded-md px-5 lg:py-5 py-3 text-base h-64 text-putih overflow-hidden">
                    {{ Str::limit(strip_tags($note->note), 450) }}
                </div>
                <div class="flex justify-between text-lg">
                    <a href="{{ route('note.show', $note) }}" class="px-8 py-2.5 hover:text-white transition duration-300">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="px-8 py-2.5 hover:text-green-300 transition duration-300">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-8 py-2.5 hover:text-red-300 transition duration-300">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-putih theme-light">
            {{ $notes->links() }}
        </div>
    </div>
    
</x-app-layout>
