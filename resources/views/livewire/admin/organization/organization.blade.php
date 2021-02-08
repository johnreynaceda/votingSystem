<div>
    <div class="flex space-x-3">
        <div class=" w-4/12">
            @if ($updateMode)
            @include('livewire.admin.organization.organization-update')
            @else
            @include('livewire.admin.organization.organization-create')
            @endif
        </div>
        <div class=" w-8/12 border-l-2 border-green-500 p-2">
            <h1 class="font-medium text-side text-lg">LIST OF ORGANIZATIONS</h1>
            <div  wire:loading wire:target="delete">
                <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                    <div></div><div></div><div></div>
                    </div></div>
                </div>
            <h1 class="font-medium text-side text-sm flex justify-center">Please Toggle on <i
                    class="material-icons text-red-600">toggle_on</i> to set DEFAULT!</h1>
                  
            <div class=" mt-3 grid grid-cols-4 gap-4">
                @forelse ($organizations as $organization)
                <div
                class="bg-gradient-to-r from-main text-white  via-green-400 to-main rounded-md shadow-md ">
                <div class="flex flex-col p-1  justify-center items-center">
                    <div class="text">
                        <h1 class="font-medium text-center underline">{{ $organization->organization }} - {{ $organization->campus->campus }}</h1>
                    </div>
                    <div class="flex p-2 items-center justify-center w-full ">
                        <label for="{{ $organization->organization }}" class="flex items-center cursor-pointer">
                            <div class="relative">
                               @if ($organization->isdefault == 0)
                               <div class="relative inline-block w-10  align-middle select-none transition duration-200 ease-in">
                                <input wire:click="togglein({{ $organization->id }})" type="checkbox" name="toggle" id="toggle"  class="toggle-checkbox  absolute block w-6 h-6 rounded-full bg-nav focus:outline-none border-4 appearance-none cursor-pointer"/>
                                <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                            </div>
                                @else
                                <div class="relative inline-block w-10  align-middle select-none transition duration-200 ease-in">
                                    <input wire:click="toggleout({{ $organization->id }})" type="checkbox" checked name="toggle" id="toggle"  class="toggle-checkbox  absolute block w-6 h-6 rounded-full bg-nav focus:outline-none border-4 appearance-none cursor-pointer"/>
                                    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                               @endif
                            </div>
                        </label>
                    </div>
                    <div class="flex mt-2 justify-end">
                        <div class="border border-white  p-1 flex rounded-full ">
                            <div wire:click="edit({{ $organization->id }})"
                                class="bg-white text-print w-12 border-r cursor-pointer  hover:bg-ye hover:text-side   rounded-tl-full flex justify-center items-center rounded-bl-full ">
                                <i class="material-icons">edit</i>
                            </div>
                            <div wire:click="delete({{ $organization->id }})"
                                class="bg-white text-red-600 w-12 cursor-pointer  hover:bg-red-600 hover:text-white rounded-tr-full flex justify-center items-center rounded-br-full ">
                                <i class="material-icons">delete</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @empty
                 <div class="flex">No Data!</div>   
            @endforelse
        </div>
        <div class="mt-5 flex justify-end">
            {{ $organizations->links('layouts.pagination') }}
        </div> 
        </div>
    </div>
</div>
