<div>
    <div class="flex space-x-3">
        <div class="w-4/12">
          <div class="flex space-x-3">
            <div class=" w-6/12">
            <div class="bg-gradient-to-r from-red-400 to-red-600 mb-2 shadow-md rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
              <h1 class="font-medium underline text-white">CAMPUS</h1>
              <div class="flex justify-center items-center">
                <h1 class="text-5xl text-white font-bold">{{ $camp }}</h1>
              </div>
            </div>
            <div class="bg-gradient-to-r from-green-400 to-blue-500 shadow-md mb-2 rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
              <h1 class="font-medium underline text-white">STUDENTS</h1>
              <div class="flex justify-center items-center">
                <h1 class="text-5xl text-white font-bold">{{ $stud }}</h1>
              </div>
            </div>
            <div class="bg-gradient-to-r from-gray-400 to-side     shadow-md mb-2 rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
              <h1 class="font-medium underline text-white">ORGANIZATIONS</h1>
              <div class="flex justify-center items-center">
                <h1 class="text-5xl text-white font-bold">{{ $org }}</h1>
              </div>
            </div>
            <div class="bg-gradient-to-r from-yellow-400 to-nav     shadow-md mb-2 rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
              <h1 class="font-medium underline text-white">PARTYLIST</h1>
              <div class="flex justify-center items-center">
                <h1 class="text-5xl text-white font-bold">{{ $part }}</h1>
              </div>
            </div>
            </div>
            <div class=" w-6/12">
              <div class="bg-gradient-to-r from-orange-400 to-ye mb-2 shadow-md rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
                <h1 class="font-medium underline text-white">POSITIONS</h1>
                <div class="flex justify-center items-center">
                  <h1 class="text-5xl text-white font-bold">{{ $pos }}</h1>
                </div>
              </div>
              <div class="bg-gradient-to-r from-blue-400 to-purple-600 shadow-md mb-2 rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
                <h1 class="font-medium underline text-white">CANDIDATES</h1>
                <div class="flex justify-center items-center">
                  <h1 class="text-5xl text-white font-bold">{{ $can }}</h1>
                </div>
              </div>
              <div class="bg-gradient-to-r from-gray-400 to-side     shadow-md mb-2 rounded-sm p-1 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
                <h1 class="font-medium underline text-white">USERS</h1>
                <div class="flex justify-center items-center">
                  <h1 class="text-5xl text-white font-bold">{{ $user }}</h1>
                </div>
              </div>
             
              </div>
          </div>
        </div>
        <div class=" relative w-8/12 p-2">
            <h1 class="text-sm font-medium text-red-800">This shows only the default organization.</h1>
            <div class="flex mb-3 mt-1">
             <a href="{{ route('admin-print') }}" target="_blank">
              <div  class="bg-nav text-white shadow-md hover:bg-green-600 cursor-pointer space-x-2 flex p-2 px-3">
                <i class="material-icons">print</i>
                <h1 class="font-medium">PRINT RESULT</h1>
               </div>
             </a>
            </div>
            <div class="bg-nav overflow-y-auto shadow-xl  relative h-96">
                <div class="absolute">
                    <img src="{{ asset('images/sksu2.jpg') }}" class=" h-full opacity-25 " alt="">
                </div>
                <div class="relative px-2">
                        @forelse ($partylists as $key => $partylist)
                        <h1 class="underline text-md text-white font-medium">{{ App\Models\Partylist::find($key)->partylist }}-PARTYLIST</h1>
                        <div class="grid md:grid-cols-4 grid-cols-2 mb-5 md:gap-2 gap-1">
                           @foreach ($partylist as $candidate)
                           <div class="border relative h-56 transform transition duration-200 cursor-pointer hover:-translate-y-1 hover:scale-100">
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
            </div>
        </div>
    </div>
</div>
