<div>
    <div x-data="{ show: @entangle('addModal') }" class="flex justify-end items-center mb-3">
        <div @click="open = true"  class="bg-nav px-6 text-white p-2 rounded-full space-x-2 shadow-md cursor-pointer hover:bg-green-500 flex">
            <i class="material-icons md-32">person_add</i>
            <h1>Add Student</h1>
            <div tabindex="0" class="z-40 overflow-auto  top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="show">
             <div class="text-left  h-auto mx-72  px-6 mt-10" @click.away="open = false">
                <div class="flex bg-nav text-white">
                    <div class=" px-3 py-2 font-medium text-lg w-11/12">
                     <h1>Add Student</h1>
                 </div>
                    <div class=" flex justify-center items-center w-1/12">
                     <div @click="open = false" class="hover:bg-red-600 p-1 rounded-full flex justify-center items-center"><i class="material-icons">close</i></div>
                 </div>
                </div>
                <div class="body bg-white text-side ">
                 <form class="flex space-x-7 py-2 px-4" action="">
                     <div class="w-6/12">
                         <div class="mb-2 text-side">
                             <label for="">Firstname:</label>
                             <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Firstname">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Middlename:</label>
                             <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Middlename">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Lastname:</label>
                             <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Address:</label>
                             <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Address">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Birthdate:</label>
                             <input wire:model="firstname" type="date" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Age:</label>
                             <input wire:model="number" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Age">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Contact:</label>
                             <input wire:model="firstname" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="09123456789">
                         </div>
                     </div>
                     <div class=" w-6/12">
                         <div class="mb-2 text-side">
                             <label for="">Organization:</label>
                             <select class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                                 <option value="">Select Organization</option>
                             </select>
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Course:</label>
                             <input wire:model="firstname" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Course">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Email:</label>
                             <input wire:model="firstname" type="mail" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Email">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Password:</label>
                             <input wire:model="firstname" type="password" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Password">
                         </div>
                         <div class="mb-2 text-side">
                             <label for="">Student ID Number:</label>
                             <input wire:model="firstname" type="number" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="53598">
                         </div>
                         <div class="mb-5 text-side">
                             <label for="">Campus:</label>
                             <select class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Lastname">
                                 <option value="">Select Campus</option>
                             </select>  
                         </div>
                         <div class="mb-2 text-white">
                            <div class="flex justify-end">
                           <button class="bg-nav p-2 px-6 hover:bg-green-600 shadow-md  rounded-full">SAVE</button>
                           </div> 
                         </div>
                     </div>
                 </form>
                </div>
                </div>
             </div>
        </div>
    </div>
    <div class="flex">
        <div class=" flex items-center w-6/12">
         <div class="bg-green-300 border-r  w-11/12"><input class="h-10 border border-green-600 focus:border-side w-full outline-none px-3" type="text" name="" id="" placeholder="Search Student"></div>
         <div class="bg-nav text-white border border-green-600 flex justify-center items-center h-full w-1/12"><i class="material-icons md-36">search</i></div>
     </div>
        <div class=" w-6/12">
     </div>
    </div>
    <div class="tbl mt-4">
        <div class="bg-nav font-medium text-white p-2">
            <h1>List of Students</h1>
        </div>
        <div class="body mt-1 shadow-md">
         <table class="text-left w-full border-collapse "> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
             <thead class="bg-side text-white">
               <tr class="">
                 <th width="10" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">#</th>
                 <th width="200" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">FULLNAME</th>
                 <th width="100" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">SIDN</th>
                 <th class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">COURSE</th>
                 <th class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">ORGANIZATION</th>
                 <th class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">CAMPUS</th>
                 <th width="100" class="py-2 px-2 b font-bold uppercase text-xs text-grey-dark border-b border-grey-light">ACTIONS</th>
               </tr>
             </thead>
             <tbody>
               <tr class="hover:bg-gray-200">
                 <td class="py-1 px-1 border-b border-side">1</td>
                 <td class="py-1 px-1 border-b border-side">Naceda, Johnrey T.</td>
                 <td class="py-1 px-1 border-b border-side">24976</td>
                 <td class="py-1 px-1 border-b border-side">INFORMATION TECHNOLGY</td>
                 <td class="py-1 px-1 border-b border-side">COLLEGE OF COMPUTER STUDIES</td>
                 <td class="py-1 px-1 border-b border-side">ISULAN-CAMPUS</td>
                 <td class="py-1 px-1 border-b border-side">
                   <div class="flex cursor-pointer">
                     <div wire:click.prevent="edit()" class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                     <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                   </div>
                 </td>
             </tr>
               <tr class="hover:bg-gray-200">
                 <td class="py-1 px-1 border-b border-side">1</td>
                 <td class="py-1 px-1 border-b border-side">Naceda, Johnrey T.</td>
                 <td class="py-1 px-1 border-b border-side">24976</td>
                 <td class="py-1 px-1 border-b border-side">INFORMATION TECHNOLGY</td>
                 <td class="py-1 px-1 border-b border-side">COLLEGE OF COMPUTER STUDIES</td>
                 <td class="py-1 px-1 border-b border-side">ISULAN-CAMPUS</td>
                 <td class="py-1 px-1 border-b border-side">
                   <div class="flex cursor-pointer">
                     <div wire:click.prevent="edit()" class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                     <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                   </div>
                 </td>
             </tr>
               <tr class="hover:bg-gray-200">
                 <td class="py-1 px-1 border-b border-side">1</td>
                 <td class="py-1 px-1 border-b border-side">Naceda, Johnrey T.</td>
                 <td class="py-1 px-1 border-b border-side">24976</td>
                 <td class="py-1 px-1 border-b border-side">INFORMATION TECHNOLGY</td>
                 <td class="py-1 px-1 border-b border-side">COLLEGE OF COMPUTER STUDIES</td>
                 <td class="py-1 px-1 border-b border-side">ISULAN-CAMPUS</td>
                 <td class="py-1 px-1 border-b border-side">
                   <div class="flex cursor-pointer">
                     <div wire:click.prevent="edit()" class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                     <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                   </div>
                 </td>
             </tr>
               
             </tbody>
           </table>
        </div>
    </div>
</div>
