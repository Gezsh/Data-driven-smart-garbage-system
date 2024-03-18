<x-layout>
    
  <div class="flex flex-col items-center justify-center mt-10 mx-auto w-full lg:w-1/2 p-8 bg-white shadow-lg rounded-lg">
      <h2 class="text-center text-2xl font-bold text-blue-600 mb-6">Register</h2>
      <form action="{{ url('/store') }}" method="POST" class="w-full">
          @csrf
          <div class="mb-4">
              <label for="reg" class="block text-sm font-medium text-gray-700">ID Number</label>
              <input name="reg" type="text" id="reg" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter ID Number">
          </div>
          <div class="mb-4">
              <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
              <input name="firstName" type="text" id="firstName" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter First Name">
          </div>
          <div class="mb-4">
              <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
              <input name="lastName" type="text" id="lastName" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter Last Name">
          </div>
          <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input name="email" type="email" id="email" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter email address">
          </div>
          <div class="mb-4">
              <label for="phonenumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
              <input name="phonenumber" type="text" id="phonenumber" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" placeholder="Enter phone number">
          </div>
          <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-red-700 transition duration-300">Register</button>
      </form>
  </div>

</x-layout>
