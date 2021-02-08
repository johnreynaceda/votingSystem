<div x-data="{ show: @entangle('showModal') }" class="relative">
    <div wire:click="request" class=" text-blue-600 text-sm underline cursor-pointer hover:text-blue-500">Request for your password here!</div>
    <div  wire:loading wire:target="request">
        <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
            <div></div><div></div><div></div>
            </div></div>
        </div>
    <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
        <div class="text-left bg-white h-auto md:mx-96 mx-6  mt-20" @click.away="open = false">
            <div class="flex bg-nav text-white">
                <div class=" px-3 py-2 font-medium text-lg w-11/12">
                 <h1>REQUEST PASSWORD</h1>
             </div>
                <div class=" flex justify-center mr-2 items-center w-1/12">
                 <div @click="show = false" class="hover:bg-red-600 p-1 cursor-pointer rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
             </div>
            </div>
            <div class="body bg-white text-side ">
               
                <form class="flex space-x-7 py-2" action="">
                    <div class="p-2 md:px-20 px-12 mt-5">
                        <div class="mb-5 text-side">
                            <label for="">YOUR STUDENT ID NUMBER:</label>
                            <input wire:model="sidn" type="number" class="h-10 w-full shadow-md outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="53598">
                            @error('sidn') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex mb-3 justify-center items-center">
                         
                            <button wire:click.prevent="send" class="bg-nav shadow-md focus:outline-none p-1 px-4 text-white">SEND REQUEST</button>
                            <div  wire:loading wire:target="send">
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