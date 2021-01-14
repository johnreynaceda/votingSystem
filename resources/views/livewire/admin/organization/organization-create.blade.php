<div>
    <div class=" border rounded-md shadow-md">
        <div class="header p-2 border-b space-x-2 flex text-side  border-green-500">
            <i class="material-icons">add_to_photos</i>
            <h1 class="font-medium">Add Organization</h1>
            <div  wire:loading wire:target="edit">
                <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                    <div></div><div></div><div></div>
                    </div></div>
                </div>
        </div>
        <div class="body p-2">
            <form action="">
                <div class="mb-3 text-side">
                    <label for="">Organization:</label>
                    <input wire:model="organization_name" type="text"
                        class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border"
                        placeholder="Enter Organization">
                        @error('organization_name') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                </div>
                <div class="mb-5 text-side">
                    <label for="">Campus:</label>
                    <select wire:model="campus" type="text"
                        class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border"
                        placeholder="Enter Campus Name">
                        <option selected hidden disabled value="null">Select Campus</option>
                        @forelse ($campuses as $campus)
                        <option value="{{ $campus->id }}">{{ $campus->campus }}</option>
                        @empty
                        <option disabled value="">No Campus Available</option>
                        @endforelse
                    </select>
                    @error('campus') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end">
                    <div  wire:loading wire:target="save">
                        <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                            <div></div><div></div><div></div>
                            </div></div>
                        </div>
                    <button wire:click.prevent="save" type="submit" class="bg-nav p-1 focus:outline-none rounded-full px-6 text-white shadow-md hover:bg-green-400">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>