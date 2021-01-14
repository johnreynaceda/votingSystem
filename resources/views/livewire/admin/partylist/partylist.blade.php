<div>
    <div class="flex space-x-3">
        <div class=" w-4/12">
            @if ($updateMode)
            @include('livewire.admin.partylist.partylist-update')
            @else
            @include('livewire.admin.partylist.partylist-create')
            @endif
        </div>
    <div class=" w-8/12 border-l-2 border-green-500 p-2">
    <h1 class="font-medium text-side text-lg">LIST OF PARTY-LIST</h1>
    <div  wire:loading wire:target="delete">
        <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
            <div></div><div></div><div></div>
            </div></div>
        </div>
    <div class=" mt-3 grid grid-cols-4 gap-4">
       @forelse ($partylists as $partylist)
       <div class="bg-gradient-to-r from-main text-white cursor-pointer via-green-400 to-main rounded-md shadow-md ">
        <div class="flex flex-col p-1  justify-center items-center">
            <div class="icon"><i class="material-icons md-48">view_module</i></div>
            <div class="text"><h1 class="font-medium text-center underline">{{ $partylist->partylist }} Party-list</h1></div>
        </div>
        <div class="flex mb-2 justify-center">
            <div class="border border-white  p-1 flex rounded-full ">
                <div wire:click="edit({{ $partylist->id }})"
                    class="bg-white text-print w-12 border-r cursor-pointer  hover:bg-ye hover:text-side   rounded-tl-full flex justify-center items-center rounded-bl-full ">
                    <i class="material-icons">edit</i>
                </div>
                <div wire:click="delete({{ $partylist->id }})"
                    class="bg-white text-red-600 w-12 cursor-pointer  hover:bg-red-600 hover:text-white rounded-tr-full flex justify-center items-center rounded-br-full ">
                    <i class="material-icons">delete</i>
                </div>
            </div>
        </div>
    </div>
       @empty
           <div class="flex">No Data!</div>
       @endforelse
        
      </div>
      <div class="mt-5 flex justify-end">
        {{ $partylists->links('layouts.pagination') }}
    </div> 
    </div>
    </div>
</div>
