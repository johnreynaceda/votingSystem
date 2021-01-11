@extends('layouts.master')
@section('content')
<div class="flex space-x-2 border-b border-green-500 items-center text-nav">
    <i class="material-icons md-36">view_column</i>
    <h1 class="text-xl font-medium ">Organization</h1>
</div>
<div class="main-body mt-4">
    <div class="flex space-x-3">
        <div class=" w-4/12">
        <div class=" border rounded-md shadow-md">
            <div class="header p-2 border-b space-x-2 flex text-side  border-green-500">
                <i class="material-icons">add_to_photos</i>
                <h1 class="font-medium">Add Organization</h1>
            </div>
            <div class="body p-2">
                <form action="">
                    <div class="mb-3 text-side">
                        <label for="">Organization:</label>
                        <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Organization">
                    </div>
                    <div class="mb-5 text-side">
                        <label for="">Campus:</label>
                        <select wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Campus Name">
                        <option value="">Select Campus</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button class="bg-nav p-1 focus:outline-none rounded-full px-6 text-white shadow-md hover:bg-green-400">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <div class=" w-8/12 border-l-2 border-green-500 p-2">
    <h1 class="font-medium text-side text-lg">LIST OF ORGANIZATIONS</h1>
    <h1 class="font-medium text-side text-sm flex justify-center">Please Toggle on <i class="material-icons text-red-600">toggle_on</i> to set DEFAULT!</h1>
    <div class=" mt-3 grid grid-cols-4 gap-4">
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="text"><h1 class="font-medium text-center underline">SBO-ISULAN</h1></div>
                <div class="flex p-2 items-center justify-center w-full ">
  
                    <!-- Toggle Button -->
                    <label 
                      for="toogleA"
                      class="flex items-center cursor-pointer"
                    >
                      <!-- toggle -->
                      <div class="relative">
                        <!-- input -->
                        <input id="toogleA" type="checkbox" class="hidden" />
                        <!-- line -->
                        <div
                          class="toggle__line w-10 h-4 bg-white rounded-full shadow-inner"
                        ></div>
                        <!-- dot -->
                        <div
                          class="toggle__dot absolute w-6 h-6 bg-nav rounded-full shadow inset-y-0 left-0"
                        ></div>
                      </div>
                      <!-- label -->
                      
                    </label>
                    
                  </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="text"><h1 class="font-medium text-center underline">SBO-TACURONG</h1></div>
                <div class="flex p-2 items-center justify-center w-full ">
  
                    <!-- Toggle Button -->
                    <label 
                      for="toogleB"
                      class="flex items-center cursor-pointer"
                    >
                      <!-- toggle -->
                      <div class="relative">
                        <!-- input -->
                        <input id="toogleB" type="checkbox" class="hidden" />
                        <!-- line -->
                        <div
                          class="toggle__line w-10 h-4 bg-white rounded-full shadow-inner"
                        ></div>
                        <!-- dot -->
                        <div
                          class="toggle__dot absolute w-6 h-6 bg-nav rounded-full shadow inset-y-0 left-0"
                        ></div>
                      </div>
                      <!-- label -->
                      
                    </label>
                    
                  </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="text"><h1 class="font-medium text-center underline">SBO-ACCESS</h1></div>
                <div class="flex p-2 items-center justify-center w-full ">
  
                    <!-- Toggle Button -->
                    <label 
                      for="toogleA"
                      class="flex items-center cursor-pointer"
                    >
                      <!-- toggle -->
                      <div class="relative">
                        <!-- input -->
                        <input id="toogleA" type="checkbox" class="hidden" />
                        <!-- line -->
                        <div
                          class="toggle__line w-10 h-4 bg-white rounded-full shadow-inner"
                        ></div>
                        <!-- dot -->
                        <div
                          class="toggle__dot absolute w-6 h-6 bg-nav rounded-full shadow inset-y-0 left-0"
                        ></div>
                      </div>
                      <!-- label -->
                      
                    </label>
                    
                  </div>
            </div>
        </div>
        
        
      </div>
    </div>
    </div>
</div>
@endsection