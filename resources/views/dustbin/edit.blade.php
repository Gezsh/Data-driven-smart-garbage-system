<x-layout>
  <div class="flex justify-center mt-20 items-center h-full">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-96">
          <h2 class="text-center text-xl font-bold text-red-600 mb-6">Edit Dustbin</h2>
          <form action="/dustbin/update/{{$dustbin->id}}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-4">
                  <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                  <input id="location" value="{{ $dustbin->location }}" name="location" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Location">
                  @error('location')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
              </div>
              <div class="mb-4">
                  <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                  <input id="capacity" value="{{ $dustbin->capacity }}" name="capacity" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Capacity">
                  @error('capacity')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
              </div>
              <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-red-700 transition duration-300">Update</button>
          </form>
      </div>
  </div>

 
</x-layout>
