<div>
   <div class="flex items-center space-x-3">
    <h1 class="text-gray-600">: Please select organization to manage.</h1>
   
    <select wire:model="organization_id" class="h-8  outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
       
        <option selected hidden disabled value="null">Select Organization</option>
         @forelse ($organizations as $organization)
        <option value="{{ $organization->id }}">{{ $organization->organization }}</option>
        @empty
        <option disabled value="">No Organization Available</option>
         @endforelse
    </select> 
    @error('campus') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror 
   </div>
   
       @if ($this->organization_id == null)
       @else
       <div class=" mt-2 font-medium underline text-side text-xl">
       <h1>{{ $this->manage->organization}}-{{ $this->manage->campus->campus }}</h1>
        </div>
        <div x-data="{ show: @entangle('addModal') }" class="flex mt-2">
            <div wire:click="add" class="bg-nav flex cursor-pointer hover:bg-green-600 p-2 rounded-full shadow-md text-white px-3 space-x-2">
                <i class="material-icons">person_add</i>
                <h1>Add Candidate</h1>
            </div>
            <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
                <div class="text-left bg-white h-auto mx-72  mt-6" @click.away="show = false">
                    <div class="flex bg-nav text-white">
                        <div class=" px-3 py-2 font-medium text-lg w-11/12">
                         <h1>Add Candidate</h1>
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
           @include('livewire.admin.candidate.carousel')
       @endif
      
</div>
