<x-layout>
  <div class="flex flex-col items-center justify-center mt-10 mx-auto w-full lg:w-1/2 p-8 bg-white shadow-lg rounded-lg">
    <h2 class="text-center text-2xl font-bold text-blue-600 mb-6">Edit dustbin</h2>
    <form action={{"/dustbin/update/".$dustbin->id}} method="POST" class="w-full">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="reg" class="block text-sm font-medium text-gray-700"> Dustbin ID Number</label>
            <input id="id" value="{{ $dustbin->id }}" name="id" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" readonly>
        </div>
        <div class="mb-4">
            <label for="firstName" class="block text-sm font-medium text-gray-700">Location</label>
            <input id="firstName" value="{{ $dustbin->location }}" name="location" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter First Name">
        </div>
        <div class="mb-4">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Capacity</label>
            <input id="lastName" value="{{ $dustbin->capacity }}" name="capacity" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Last Name">
        </div>
       
        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-red-700 transition duration-300">Update</button>
    </form>
</div>
  </x-layout>