<x-layout>
    <div class="flex flex-row my-10">
        <!-- Left Side -->
        <div class="w-1/2 flex items-center justify-center bg-gradient-to-r from-blue-400 to-purple-500 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-101">
            <!-- Add your image and title here -->
            <div class="text-center text-white">
                <img src="/register.jpg" alt="Your Image" class="w-64 h-64 rounded-full shadow-lg mb-4">
                <h2 class="text-4xl font-bold">Register the Driver</h2>
            </div>
           
        
        </div>

             <div class=" top-0 bottom-0  w-1 h-full bg-white-300"></div>
        
        <!-- Right Side -->
        <div class="w-1/2 flex items-center justify-center bg-gray-100  transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-101">
            <div class="w-96 p-8 bg-white shadow-lg rounded-lg">
                <h2 class="text-center text-2xl font-bold text-blue-600 mb-6">Register</h2>
                <form action="{{ url('/store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="reg" class="block text-sm font-medium text-gray-700">ID Number</label>
                        <input name="reg" type="text" id="reg" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter ID Number">
                    </div>
                    <div class="mb-4">
                        <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input name="firstName" type="text" id="firstName" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter First Name">
                    </div>
                    <div class="mb-4">
                        <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input name="lastName" type="text" id="lastName" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Last Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" id="email" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter email address">
                    </div>
                    <div class="mb-4">
                        <label for="phonenumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input name="phonenumber" type="text" id="phonenumber" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Enter phone number">
                    </div>
                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
