<div class="mb-10 relative">
   @if (auth()->user()->isvoted == 1)
        <div class="flex justify-center items-center md:py-5 py-3">
            <h1 class="md:mt-10 mt-5 text-center font-bold md:text-4xl text-xl text-side ">YOU'RE DONE SUBMITTING YOUR VOTES!!</h1>
        </div>
        <div class="bg-white rounded-md mb-10 shadow-lg p-2">
           @forelse ($partylists as $key => $partylist)
           <h1 class="underline text-lg font-medium">{{ App\Models\Partylist::find($key)->partylist }}-PARTYLIST</h1>
           <div class="grid md:grid-cols-6 grid-cols-2 mb-5 md:gap-4 gap-1">
              @foreach ($partylist as $candidate)
              <div class="border relative h-64">
                <img src="{{ asset('/storage/candidates/' . $candidate->image->url) }}" class="h-full" alt="">
                <div   class="bg-red-600 text-white hover:bg-red-800 cursor-pointer hover:text-ye  absolute right-4 px-3 rounded-full   shadow-lg    bottom-10">
                    <div class="flex justify-center items-center p-1">
                  <h1>
                    {{ $candidate->finalVotes->count() }}
                  </h1>
                    </div>
                 </div> 
              </div>
              
              @endforeach
             </div>
           @empty
               
           @endforelse
        </div>

       @else
       <div class="flex space-x-2 text-green-800 mt-5  border-b border-green-600">
        <i class="material-icons">how_to_vote</i>
        <h1 class="font-medium  text-xl ">{{ $organization->organization }}-{{ $organization->campus->campus }} CANDIDATES</h1>
    </div>
    <div class=" justify-end md:hidden">
        <div wire:click="voted_list" class="text-side hover:text-gray-600 flex justify-end items-center">
            <h1>Voted List</h1>
            <i class="material-icons md-36">ballot</i>
        </div>

        @if ($this->list == true)
        <div wire:model="list" class="bg-white rounded-sm shadow-md px-1">
            <div class=" mt-2 mb-4 grid md:grid-cols-4 md:gap-3 grid-cols-4 gap-2">
                @forelse ($vote as $item)
                <div  class="border relative border-gray-500 rounded-sm md:h-28 h-20 shadow-xl">
                    <img src="{{ asset('/storage/candidates/' . $item->candidate->image->url) }}" class="h-full" alt="">
                    <div wire:click="delete({{ $item->id }})"  class="bg-red-600 text-white hover:bg-red-800 cursor-pointer hover:text-ye  absolute right-0  shadow-lg    bottom-0">
                       <div class="flex justify-center items-center p-1">
                        <i class="material-icons">delete</i>
                       </div>
                    </div> 
                </div>
                @empty
                    
                @endforelse
                </div>
        </div>
        @else
        
        @endif
    </div>
   <div class=" flex  mt-2">
      
        <div class="md:w-8/12 w-full p-2  text-side">
        @forelse ($positions as $key => $position)
       
        <h1 class="font-bold text-xl underline">{{ App\Models\Position::find($key)->position }}</h1>
        <div class="relative mt-2 mb-4 grid md:grid-cols-3 grid-cols-1 gap-3">
            @foreach ($position as $candidate)
            {{--  --}}
             <div wire:poll.750ms class="border relative border-gray-500 rounded-sm md:h-80 h-96 shadow-xl">
                 <img src="{{ asset('/storage/candidates/' . $candidate->image->url) }}" class="h-full w-full" alt="">
             @if (auth()->user()->hasVoted($candidate->id))
                 <div  class="bg-red-600 text-ye  absolute right-0 px-5 shadow-lg rounded-bl-full py-4  top-0">
                    <div class="flex space-x-1 justify-center items-center">
                        <h1 class="font-bold">VOTED!</h1>
                    </div>
                </div> 
            @else
                <div wire:click="vote({{ $candidate->id }},{{App\Models\Position::find($key)->id}})" class="bg-ye text-nav hover:bg-nav hover:text-ye cursor-pointer absolute right-0 px-5 shadow-lg rounded-bl-full py-4  top-0">
                    <div class="flex space-x-1 justify-center items-center">
                        <h1 class="font-bold">VOTE!</h1>
                    </div>
                </div> 
             @endif
               
                
                
              
             </div>
           
            @endforeach
        </div>

       
        @empty
            
        @endforelse
      
        
        <div class="flex mb-5 justify-center">
            <div wire:click="submit({{ auth()->user()->id }})" class="bg-side text-white rounded-sm hover:bg-gray-600 cursor-pointer p-2">SUBMIT VOTE</div>
        </div>
    </div>
       <div class=" hidden md:block w-4/12 p-2">
        <div class="bg-white  rounded-lg shadow-md ">
            <div class="relative px-2 text-side py-1">
                <h1 class="font-bold">Your Voted Candidates:</h1>
                <div class=" mt-2 mb-4 grid md:grid-cols-4 grid-cols-1 gap-3">
                @forelse ($vote as $item)
                <div  class="border relative border-gray-500 rounded-sm md:h-28 shadow-xl">
                    <img src="{{ asset('/storage/candidates/' . $item->candidate->image->url) }}" class="h-full" alt="">
                    <div wire:click="delete({{ $item->id }})"  class="bg-red-600 text-white hover:bg-red-800 cursor-pointer hover:text-ye  absolute right-0  shadow-lg    bottom-0">
                       <div class="flex justify-center items-center p-1">
                        <i class="material-icons">delete</i>
                       </div>
                    </div> 
                </div>
                @empty
                    
                @endforelse
                </div>
            </div>
        </div>
    </div>
      
   </div>
   @endif

   
   
</div>
