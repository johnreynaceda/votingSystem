<div class="bg-nav relative  h-80 shadow-lg overflow-y-auto  mt-5">
    <div class="absolute">
        <img src="{{ asset('images/sksu2.jpg') }}" class="object-fill opacity-25"  alt="">
    </div>
    <div class="relative p-2">
        <div class="grid grid-cols-3  gap-4 ">
            @forelse ($candidates as $candidate)
            <div class="border flex p-1 rounded-md shadow-md h-56">
                <div class="bg-blue-400 w-7/12">
                <img src="{{ asset('/storage/candidates/' . $candidate->image->url) }}" class="h-full" alt="">
                </div>
                <div class="text-white border p-1 flex flex-col  w-5/12">
                <div class="  flex flex-col justify-center items-center h-10/12">
                    <h1 class="text-left font-medium">{{ $candidate->partylist->partylist }} Partylist</h1>
                    <h1 class="text-left underline font-bold">{{ $candidate->positions->position }}</h1>
                </div>
                <div class=" h-2/12 flex justify-center">
                    <div class="border border-white cursor-pointer  p-1 flex rounded-full ">
                        <div wire:click="edit()" class="bg-white text-print w-12 border-r hover:bg-ye hover:text-side   rounded-tl-full flex justify-center items-center rounded-bl-full "><i class="material-icons">edit</i></div>
                        <div wire:click="delete()" class="bg-white text-red-600 w-12  hover:bg-red-600 hover:text-white rounded-tr-full flex justify-center items-center rounded-br-full "><i class="material-icons">delete</i></div>
                    </div>
                </div>
                </div>
            </div>
            @empty
                
            @endforelse
            
            
            
           
          </div>
    </div>
</div>