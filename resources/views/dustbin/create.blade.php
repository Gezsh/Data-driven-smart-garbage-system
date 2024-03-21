{{-- 
<x-layout>
  <div class="container">
    <h1>Create Dustbin</h1>
<form action="/dustbin/store" method="POST">
    @csrf
      <div class="form-group">
        <label >Location</label>
        <input name="location" type="text" class="form-control"  placeholder="Enter ID Number">
      </div>
    
      <div class="form-group">
        <label >Capacity</label>
        <input name="capacity"  type="text" class="form-control"  placeholder="Enter First Name">
      </div>
      <button type="submit" class="btn btn-info mb-2">Register</button>
    
    </form>
  </div>
  </x-layout>
 --}}


  <x-layout>
    
    <div class="flex flex-col items-center justify-center mt-10 mx-auto w-full lg:w-1/2 p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-center text-2xl font-bold text-blue-600 mb-6">Register</h2>
        <form action="/dustbin/store" method="POST" class="w-full">
            @csrf
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input name="location" type="text" id="location" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Location">
            </div>
            <div class="mb-4">
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                <input name="capacity" type="text" id="capacity" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter First Name">
            </div>
            
            
           
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-red-700 transition duration-300">Register</button>
        </form>
    </div>
  
  </x-layout>
  