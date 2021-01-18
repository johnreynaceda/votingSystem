<div>
    <div x-data="{ show: @entangle('addModal') }" class="flex justify-end items-center mb-3">
        <div wire:click.prevent="add" class="bg-nav px-6 text-white p-2 rounded-full space-x-2 shadow-md cursor-pointer hover:bg-green-500 flex">
            <i class="material-icons md-32">person_add</i>
            <h1>Add User</h1>
        </div>
        <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
            <div class="text-left bg-white h-auto mx-72  mt-6" @click.away="show = false">
                <div class="flex bg-nav text-white">
                    <div class=" px-3 py-2 font-medium text-lg w-11/12">
                     <h1>Add User</h1>
                 </div>
                    <div class=" flex justify-center items-center w-1/12">
                     <div @click="show = false" class="hover:bg-red-600 p-1 cursor-pointer rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
                 </div>
                </div>
                <div class="body bg-white text-side ">
                    <form class="flex space-x-7 py-2 px-4" action="">
                        <div class="w-6/12">
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
                           
                        </div>
                        <div class=" w-6/12">
                           
                            <div class="mb-2 text-side">
                                <label for="">Email:</label>
                                <input wire:model="email" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                                @error('email') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                           
                            <div class="mb-2 text-side">
                                <label for="">Password:</label>
                                <input wire:model="password" type="password" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Password">
                                @error('password') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-2 text-side">
                                <label for="">Student ID Number:</label>
                                <input wire:model="sidn" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="53598">
                                @error('sidn') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-2 flex justify-end">
                                <div  wire:loading wire:target="save">
                                    <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                                        <div></div><div></div><div></div>
                                        </div></div>
                                    </div>
                               <button wire:click.prevent="save" class="bg-nav focus:outline-none flex rounded-md shadow-md text-white hover:bg-green-600 cursor-pointer p-2">
                                 
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
    <div class="flex">
        <div class=" flex items-center w-6/12">
         <div class="bg-green-300 border-r  w-11/12"><input class="h-10 border border-green-600 focus:border-side w-full outline-none px-3" type="text" name="" id="" placeholder="Search User"></div>
         <div class="bg-nav text-white border border-green-600 flex justify-center items-center h-full w-1/12"><i class="material-icons md-36">search</i></div>
     </div>
        <div class=" w-6/12">
     </div>
    </div>
    <div class="tbl mt-4">
        <div class="bg-nav font-medium text-white p-2">
            <h1>List of Users</h1>
        </div>
        <div class="body mt-1 shadow-md">
         <table class="text-left w-full border-collapse "> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
             <thead class="bg-side text-white">
               <tr class="">
                 <th width="10" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">#</th>
                 <th width="300" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">FULLNAME</th>
                 <th width="200" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">SIDN</th>
                 <th  width="350" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">EMAIL</th>
                 <th width="100" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">ACTIONS</th>
               </tr>
             </thead>
             <tbody>
                <?php $i = 1; ?>
               @forelse ($users as $user)
               <tr class="hover:bg-gray-200">
                <td class="py-1 px-1 border-b border-side">{{ $i++ }}</td>
                <td class="py-1 px-1 border-b border-side">{{ $user->lastname.", ".$user->firstname." ".$user->middlename[0]."." }}</td>
                <td class="py-1 px-1 border-b border-side">{{ $user->sidn }}</td>
                <td class="py-1 px-1 border-b border-side">{{ $user->email }}</td>
                
                
                <td class="py-1 px-1 border-b border-side">
                  <div x-data="{ show: @entangle('editModal') }" class="flex cursor-pointer">
                    <div wire:click.prevent="edit({{ $user->id }})" class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                    <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0, 0, 0, 0.158);" x-show="show">
                        <div class="text-left bg-white h-auto mx-72  mt-6" @click.away="open = false">
                            <div class="flex bg-nav text-white">
                                <div class=" px-3 py-2 font-medium text-lg w-11/12">
                                 <h1>Update User</h1>
                             </div>
                                <div class=" flex justify-center items-center w-1/12">
                                 <div @click="show = false" class="hover:bg-red-600 p-1 cursor-pointer rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
                             </div>
                            </div>
                            <div class="body bg-white text-side ">
                                <form class="flex space-x-7 py-2 px-4" action="">
                                    <div class="w-6/12">
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
                                       
                                    </div>
                                    <div class=" w-6/12">
                                       
                                        <div class="mb-2 text-side">
                                            <label for="">Email:</label>
                                            <input wire:model="email" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                                            @error('email') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                        </div>
                                       
                                        <div class="mb-2 text-side">
                                            <label for="">Password:</label>
                                            <input wire:model="password" type="password" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Password">
                                            @error('password') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div class="mb-2 text-side">
                                            <label for="">Student ID Number:</label>
                                            <input wire:model="sidn" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="53598">
                                            @error('sidn') <span class="text-red-700 text-sm error">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div class="mb-2 flex space-x-2 justify-end">
                                           
                                           <button wire:click.prevent="canceledit" class="bg-red-600 focus:outline-none flex rounded-md shadow-md text-white hover:bg-red-700 cursor-pointer p-2">
                                             
                                               <h1 class="ml-1">CANCEL</h1>
                                           </button>
                                           <div  wire:loading wire:target="saveedit">
                                            <div class="loadingio-spinner-dual-ball-7d9kijy1d27"><div class="ldio-es4i676yvyv">
                                                <div></div><div></div><div></div>
                                                </div></div>
                                            </div>
                                           <button wire:click.prevent="saveedit" class="bg-nav focus:outline-none flex rounded-md shadow-md text-white hover:bg-green-600 cursor-pointer p-2">
                                             
                                               <i class="material-icons">save</i>
                                               <h1 class="ml-1">SAVE</h1>
                                           </button>
                                           
                                         </div>
                                    </div>
                                </form>
                               </div>
                           </div>
                        </div>
                    <div wire:click="delete({{ $user->id }})" class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                  </div>
                </td>
            </tr>
               @empty
                   <tr>
                       <td colspan="7" class="py-1 px-1 border-b text-center border-side">
                        <h1>No Users Data!</h1>
                       </td>
                   </tr>
               @endforelse
              
               
             </tbody>
           </table>
        </div>
    </div>
</div>
