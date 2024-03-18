<x-layout>
    <div class="flex justify-center mt-20  items-center h-full">
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-96">
            <h2 class="text-center text-xl font-bold text-red-600 mb-6">Driver Details</h2>
            <div class="border border-gray-300 rounded-md p-4 mb-4">
                <div class="flex items-center mb-2">
                    <span class="font-bold mr-2">ID Number:</span>
                    <span>{{ $driver->reg }}</span>
                </div>
                <div class="flex items-center mb-2">
                    <span class="font-bold mr-2">First Name:</span>
                    <span>{{ $driver->firstName }}</span>
                </div>
                <div class="flex items-center mb-2">
                    <span class="font-bold mr-2">Last Name:</span>
                    <span>{{ $driver->lastName }}</span>
                </div>
                <div class="flex items-center mb-2">
                    <span class="font-bold mr-2">Email:</span>
                    <span>{{ $driver->email }}</span>
                </div>
                <div class="flex items-center">
                    <span class="font-bold mr-2">Phone Number:</span>
                    <span>{{ $driver->phonenumber }}</span>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="{{ url('/edit/'.$driver->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mr-2">Edit</a>
                <a href="{{ url('/delete/'.$driver->id) }}" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">Delete</a>
            </div>
        </div>
    </div>
</x-layout>
