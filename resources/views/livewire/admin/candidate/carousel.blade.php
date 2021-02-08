<div class="bg-nav relative  h-80 shadow-lg overflow-y-auto  mt-5">
   
    <div class="absolute">
        <img src="{{ asset('images/sksu2.jpg') }}" class="object-fill opacity-25"  alt="">
    </div>
    <div class="relative p-2">
        <div class="mb-2"  wire:loading wire:target="delete">
            <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                <div></div><div></div><div></div>
                </div></div>
            </div>
        <div class="grid grid-cols-3  gap-4 ">
            @forelse ($candidates as $candidate)
            <div class="border flex p-1 rounded-md shadow-md h-56">
                <div class="bg-blue-400 w-7/12">
                <img src="{{ asset('/storage/candidates/' . $candidate->image->url) }}" class="h-full" alt="">
                </div>
                <div class="text-white border p-1 flex flex-col  w-5/12">
                <div class="  flex flex-col justify-center items-center h-10/12">
                 
                    @if ($candidate->partylist == null)
                    <h1 class="text-left font-medium">INDEPENDENT</h1>
                        @else
                        <h1 class="text-left font-medium">{{ $candidate->partylist->partylist }} Partylist</h1>
                    @endif
                   
                    <h1 class="text-left underline font-bold">{{ $candidate->positions->position }}</h1>
                </div>
                <div class=" h-2/12 flex justify-center">
                    <div x-data="{ show: @entangle('editModal') }"  class="border border-white cursor-pointer  p-1 flex rounded-full ">
                        <div wire:click="edit({{ $candidate->id }})" class="bg-white text-print w-12 border-r hover:bg-ye hover:text-side   rounded-tl-full flex justify-center items-center rounded-bl-full "><i class="material-icons">edit</i></div>
                        <div wire:click="delete({{ $candidate->id }})" class="bg-white text-red-600 w-12  hover:bg-red-600 hover:text-white rounded-tr-full flex justify-center items-center rounded-br-full "><i class="material-icons">delete</i></div>
                        <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
                            <div class="text-left bg-white h-auto mx-72  mt-6" @click.away="show = false">
                                <div class="flex bg-nav text-white">
                                    <div class=" px-3 py-2 font-medium text-lg w-11/12">
                                     <h1>Update Candidate</h1>
                                 </div>
                                    <div class=" flex justify-center items-center w-1/12">
                                     <div @click="show = false" class="hover:bg-red-600 p-1 cursor-pointer rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
                                 </div>
                                </div>
                                <div class="body bg-white text-side ">
                                    <form class="flex space-x-7 py-2 px-4">
                                        @csrf
                                        <div class="w-6/12">
                                            <div class="mb-2 text-side">
                                                <label for="">Student:</label>
                                                {{ $student_id }}
                                               <div class="flex space-x-2 items-center">
                                                <input wire:model="fullname" type="text" class="h-8 w-10/12 outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Student">
                                                <div class="w-2/12  ">
                                                    <div wire:click.prevent="searchStud" wire:key="searchStud" class="bg-nav mt-1 cursor-pointer hover:bg-green-600 p-1 text-white flex justify-center rounded-sm">
                                                        <i class="material-icons">search</i>
                                                    </div>
                                                </div>
                                               </div>
                                               @error('student_id') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                               @if ($this->searchStudent == false)
            
                                                   @else
                                                   <div class="rounded-sm p-1 border mt-1">
                                                       <div class="flex mb-1 p-1">
                                                           <div class="w-10/12">
                                                            <input wire:model="search" type="text" class="h-8  w-full outline-none focus:border-green-400 text-sm px-3  focus:shadow-md rounded-sm border" placeholder="Search Student">
                                                            </div>
                                                           <div class="border w-2/12 flex justify-center items-center">
                                                            <i class="material-icons">search</i>
                                                            </div>
                                                       </div>
                                                    @forelse ($student as $item)
                                                    <div class="flex space-x-2">
                                                        <div class="w-10/12 border-b">
                                                     <h1>{{ $item->lastname.", ".$item->firstname." ".$item->middlename[0]."." }}</h1>
                                                         </div>
                                                        <div class="w-2/12">
                                                     <div wire:click="getStud({{ $item->id }})" class="flex bg-side text-white rounded-sm cursor-pointer hover:bg-gray-600 justify-center items-center ">
                                                         <i class="material-icons">playlist_add_check</i>
                                                     </div>
                                                         </div>
                                                    </div>
                                                    @empty
                                                        
                                                    @endforelse
                                                </div>
                                               @endif
                                            </div>
                                            @if ($this->isdependent == 1)
                                                @else
                                                <div class="mb-2 text-side">
                                                    <label for="">Partylist:</label>
                                                    {{ $party_id }}
                                                   <div class="flex space-x-2 items-center">
                                                    <input wire:model="partylist_name" type="text" class="h-8 w-10/12 outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Partylist">
                                                    <div class="w-2/12  ">
                                                        <div wire:click.prevent="searchPartylist"  class="bg-nav mt-1 cursor-pointer hover:bg-green-600 p-1 text-white flex justify-center rounded-sm">
                                                            <i class="material-icons">search</i>
                                                        </div>
                                                    </div>
                                                   </div>
                                                   @error('partylist_name') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                                   @if ($this->searchParty == false)
                
                                                       @else
                                                       <div class="rounded-sm p-1 border mt-1">
                                                           <div class="flex mb-1 p-1">
                                                               <div class="w-10/12">
                                                                <input wire:model="search" type="text" class="h-8  w-full outline-none focus:border-green-400 text-sm px-3  focus:shadow-md rounded-sm border" placeholder="Search Partylist">
                                                                </div>
                                                               <div class="border w-2/12 flex justify-center items-center">
                                                                <i class="material-icons">search</i>
                                                                </div>
                                                           </div>
                                                        @forelse ($partylist as $item)
                                                        <div class="flex space-x-2">
                                                            <div class="w-10/12 border-b">
                                                         <h1>{{ $item->partylist}}-Partylist</h1>
                                                             </div>
                                                            <div class="w-2/12">
                                                         <div wire:click="getParty({{ $item->id }})" class="flex bg-side text-white rounded-sm cursor-pointer hover:bg-gray-600 justify-center items-center ">
                                                             <i class="material-icons">playlist_add_check</i>
                                                         </div>
                                                             </div>
                                                        </div>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </div>
                                                   @endif
                                                </div>
                                            @endif
                                            <div class="mb-2 text-side">
                                                <label for="">Position:</label>
                                                <select wire:model="position_id" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" >
                                                    <option selected hidden disabled value="null">Select Position</option>
                                                    @forelse ($position as $item)
                                                    <option value="{{ $item->id }}">{{ $item->position }}</option>
                                                    @empty
                                                    <option disabled value="">No Position Available</option>
                                                    @endforelse
                                                </select> 
                                                @error('position_id') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror 
                                            </div>
                                            <div class="mb-2 text-side">
                                                <label class="inline-flex items-center mt-3">
                                                    <input wire:model="isdependent" value="1" type="checkbox" class="form-checkbox h-5 w-5 text-nav" ><span class="ml-2 text-gray-700">Dependent</span>
                                                </label>
                                            </div>
                                           
                                        </div>
                                        <div class=" w-6/12">
                                            <div class="mb-2 text-side">
                                                <label for="">Image:</label>
                                                @if ($photo)
                                               <div class="border border-nav h-96 rounded-sm shadow-lg mb-1">
                                                <img src="{{ $photo->temporaryUrl() }}" class="h-96">
                                               </div>
                                               @else
                                               <div class="border flex relative h-96 shadow-lg rounded-sm mb-1"></div>
                                            @endif
            
                                            <div class="relative">
                                                <input type="file" wire:model="photo">
                                            </div>
            
                                            @error('photo') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
            
                                            </div>
                                            
                                            
                                            <div class="mb-2 flex justify-end">
                                                <div  wire:loading wire:target="save">
                                                    <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                                                        <div></div><div></div><div></div>
                                                        </div></div>
                                                    </div>
                                               <button wire:click.prevent="save" class="bg-nav focus:outline-none mt-1 flex rounded-md shadow-md text-white hover:bg-green-600 cursor-pointer p-2">
                                                 
                                                   <i class="material-icons">save</i>
                                                   <h1 class="ml-1">SAVE</h1>
                                               </button>
                                               
                                             </div>
                                        </div>
                                    </form>
                                   </div>
                               </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
            @empty
                
            @endforelse
            
            
            
           
          </div>
    </div>
</div>