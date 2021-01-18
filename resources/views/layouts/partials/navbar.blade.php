<div class=" relative  bg-gradient-to-r from-nav to-main h-16 flex space-x-2 items-center ">
    <img src="{{ asset('images/sksu2.jpg') }}"
        class=" opacity-25 top-0 object-cover inset-0 z-0 right-0 w-full h-full absolute " alt="">
    <div class="flex relative w-full">
        <div class="px-3 flex items-center space-x-3 opacity-100  w-10/12   ">
            <img src="{{ asset('images/sksulogo.png') }}" class="h-14" alt="">
            <h1 class="text-xl font-semibold text-white"> ONLINE VOTING SYSTEM</h1>
        </div>
        <div class="bg-white w-2/12 mx-3 my-2 space-x-1 p-1 flex px-4 shadow-md rounded-full">
            <div class=" w-2/12 flex justify-center items-center rounded-full">
                <i class="material-icons md-36">account_circle</i>
            </div>
            <div class=" underline text-side font-medium items-center flex w-9/12">
                @if (auth()->user()->isadmin == 1)
                    <h1>ADMINISTRATOR</h1>
                @else
                <h1>{{ auth()->user()->sidn }}</h1>
                @endif
            </div>
            {{-- <div x-data="{open:false}" class=" cursor-pointer   w-1/12 flex items-center justify-center"> --}}
                <a href="{{ route('login') }}">
                    <div  class="bg-nav cursor-pointer hover:bg-green-600 hover:text-ye  rounded-full border text-white flex justify-center items-center  border-side p-1  mr-3 ">
                        <i class="material-icons">vpn_key</i>
                    </div>
                </a>
                {{-- <div tabindex="0" class="z-40  left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="open"  x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                    <div class="text-left bg-nav p-2 top-0 absolute right-0 h-full w-64" @click.away="show = false">
                        <div class="flex">
                            <div class=" flex text-white hover:text-red-600 justify-center items-center"><i class="material-icons">close</i></div>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('images/sksulogo.png') }}" class="opacity-25 absolute mt-36 shadow-l-lg" alt="">
                        </div>
                        <div class="flex space-x-2 py-2 border-b mt-10 relative justify-center items-center text-white">
                            <i class="material-icons md-36">person_pin</i>
                            <h1 class="text-sm font-medium">Please Login your Account!</h1>
                        </div>
                        <div class="relative mt-5  ">
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                         <form method="POST" action="{{ route('login') }}">
                            @csrf 
                            <div class="mb-3 text-white ">
                                <label for="">Student ID Number:</label>
                                <input type="text" required class="h-10 text-side w-full outline-none focus:border-side  text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="53598">
                                
                            </div>
                            <div class="mb-5 text-white ">
                                <label for="">Password:</label>
                                <input  type="password" required class="h-10 text-side w-full outline-none focus:border-side text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="*********">
                               
                            </div>
                            <div class="mb-5">
                                <button  class="bg-white p-1 px-4 rounded text-side font-medium shadow-md hover:bg-nav hover:text-white">LOGIN</button>
                            </div>
                            @livewire('navbar')
                         </form>
                        </div>
                       </div>
                    </div> --}}
            </div>
            
        </div>
        
    </div>
  
</div>