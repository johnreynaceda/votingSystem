<div>
    <div class="flex space-x-3">
        <div class=" w-4/12">
            @if ($updateMode)
            @include('livewire.admin.position.position-update')
            @else
            @include('livewire.admin.position.position-create')
            @endif
        </div>
    <div class=" w-8/12 border-l-2 border-green-500 p-2">
    <h1 class="font-medium text-side text-lg">LIST OF POSITIONS</h1>
    <div  wire:loading wire:target="delete">
        <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
            <div></div><div></div><div></div>
            </div></div>
        </div>
    <div class=" mt-3 grid grid-cols-4 gap-4">
        @forelse ($positions as $position)
        <div class="bg-gradient-to-r from-main text-white  cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">{{ $position->position }}</h1></div>
            </div>
            <div class="flex justify-center mb-2">
                <div class="border border-white  p-1 flex rounded-full ">
                    <div wire:click="edit({{ $position->id }})" class="bg-white text-print w-12 border-r hover:bg-ye hover:text-side   rounded-tl-full flex justify-center items-center rounded-bl-full "><i class="material-icons">edit</i></div>
                    <div wire:click="delete({{ $position->id }})" class="bg-white text-red-600 w-12  hover:bg-red-600 hover:text-white rounded-tr-full flex justify-center items-center rounded-br-full "><i class="material-icons">delete</i></div>
                </div>
            </div>
        </div>
        @empty
            <div class="flex">No Position Data! </div>
        @endforelse
      </div>
    </div>
    </div>
</div>
