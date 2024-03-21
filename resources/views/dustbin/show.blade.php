{{-- @php
    
dd($dustbin);
@endphp --}}
<x-layout>
  <div class="flex justify-center mt-20  items-center h-full">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-96">
        <h2 class="text-center text-xl font-bold text-red-600 mb-6">Driver Details</h2>
        <div class="border border-gray-300 rounded-md p-4 mb-4">
            <div class="flex items-center mb-2">
                <span class="font-bold mr-2">Dustbin ID Number:</span>
                <span>{{ $dustbin->id }}</span>
            </div>
            <div class="flex items-center mb-2">
                <span class="font-bold mr-2">Location:</span>
                <span>{{ $dustbin->location }}</span>
            </div>
            <div class="flex items-center mb-2">
                <span class="font-bold mr-2">Capacity:</span>
                <span>{{ $dustbin->capacity }}</span>
            </div>
           </div>
        <div class="flex justify-center">
            <a href="{{ url('/dustbin/edit/'.$dustbin->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-2">Edit</a>
            <a href="{{ url('/dustbin/delete/'.$dustbin->id) }}" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">Delete</a>
        </div>
    </div>
</div>

</x-layout>