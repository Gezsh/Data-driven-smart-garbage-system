<x-layout>
    <div class="flex flex-col items-center justify-center mt-10 mx-auto w-full lg:w-1/2 p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-center text-2xl font-bold text-red-600 mb-6">Edit Driver</h2>
        <form action="{{ url('/update/'.$driver->id)}}" method="POST" class="w-full">
            @csrf
            <div class="mb-4">
                <label for="reg" class="block text-sm font-medium text-gray-700">ID Number</label>
                <input id="reg" value="{{ $driver->reg }}" name="reg" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter ID Number">
            </div>
            <div class="mb-4">
                <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                <input id="firstName" value="{{ $driver->firstName }}" name="firstName" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter First Name">
            </div>
            <div class="mb-4">
                <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input id="lastName" value="{{ $driver->lastName }}" name="lastName" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Last Name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" value="{{ $driver->email }}" name="email" type="email" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter email address">
            </div>
            <div class="mb-4">
                <label for="phonenumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input id="phonenumber" value="{{ $driver->phonenumber }}" name="phonenumber" type="text" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter phone number">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-300">Update</button>
        </form>
    </div>
</x-layout>
