<div class=" border rounded-md shadow-md">
    <div class="header p-2 border-b space-x-2 flex text-side  border-green-500">
        <i class="material-icons">add_to_photos</i>
        <h1 class="font-medium">Update Position</h1>
    </div>
    <div class="body p-2">
        <form action="">
            <div class="mb-5 text-side">
                <label for="">Position:</label>
                <input wire:model="position_name" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Position">
                @error('position_name') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
            </div>
            <div class="flex space-x-2 justify-end">
                
                <button wire:click.prevent="canceledit" class="bg-red-600 p-1 focus:outline-none rounded-full px-6 text-white shadow-md hover:bg-red-700">CANCEL</button>
                <div  wire:loading wire:target="saveedit">
                    <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                        <div></div><div></div><div></div>
                        </div></div>
                    </div>
                <button wire:click.prevent="saveedit" class="bg-nav p-1 focus:outline-none rounded-full px-6 text-white shadow-md hover:bg-green-400">SAVE</button>
            </div>
        </form>
    </div>
</div>