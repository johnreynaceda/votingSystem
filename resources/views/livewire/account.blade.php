<div  x-data="{ show: @entangle('showModal') }">
    <div wire:click="show" class="flex border p-1 space-x-2 px-4 rounded-full bg-nav text-white  hover:bg-green-600  cursor-pointer border-gray-400 shadow-md">
        <i class="material-icons">person</i>
    </div>
    
    <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
        <div class="text-left bg-white h-auto md:mx-96 mx-6  mt-10" @click.away="open = false">
            <div class="flex bg-nav text-white">
                <div class=" px-3 py-2 font-medium text-lg w-11/12">
                 <h1>STUDENT ACCOUNT</h1>
             </div>
                <div class=" flex justify-center mr-2 items-center w-1/12">
                 <div @click="show = false" class="hover:bg-red-600 p-1 cursor-pointer rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
             </div>
            </div>
            <div class="body bg-white text-side ">
                <form class="flex space-x-7 justify-center py-2 px-2" action="">
                    <div class="">
                        <div class="mb-2 text-side">
                            <label for="">Firstname:</label>
                            <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Firstname">
                            @error('firstname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Middlename:</label>
                            <input wire:model="middlename" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Middlename">
                            @error('middlename') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Lastname:</label>
                            <input wire:model="lastname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                            @error('lastname') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Address:</label>
                            <input wire:model="address" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Address">
                            @error('address') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Birthdate:</label>
                            <input wire:model="birthdate" type="date" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                            @error('birthdate') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Age:</label>
                            <input wire:model="age" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Age">
                            @error('age') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Course:</label>
                            <input wire:model="course" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Course">
                            @error('course') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Email:</label>
                            <input wire:model="email" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                            @error('email') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2 text-side">
                            <label for="">Password:</label>
                            <input wire:model="password" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                            @error('password') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex mb-3 justify-center items-center">
                         
                            <button wire:click.prevent="save" class="bg-nav shadow-md focus:outline-none p-1 px-4 text-white">SAVE</button>
                            <div  wire:loading wire:target="save">
                                <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                                    <div></div><div></div><div></div>
                                    </div></div>
                                </div>
                        </div>
                    </div>
                </form>
               </div>
           </div>
        </div>
</div>
