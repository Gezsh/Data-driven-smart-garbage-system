<x-layout>
  @include('partials\_search')
  <div class="mt-10">
    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse">
        <thead>
          <tr>
            <th class="px-4 py-2 bg-gray-200">ID</th>
            <th class="px-4 py-2 bg-gray-200">First Name</th>
            <th class="px-4 py-2 bg-gray-200">Last Name</th>
            <th class="px-4 py-2 bg-gray-200">Email</th>
            <th class="px-4 py-2 bg-gray-200">Phone number</th>
            <th class="px-4 py-2 bg-gray-200">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($drivers as $driver)
          <tr>
            <td class="border px-4 py-2">{{ $driver->reg }}</td>
            <td class="border px-4 py-2">{{ $driver->firstName }}</td>
            <td class="border px-4 py-2">{{ $driver->lastName }}</td>
            <td class="border px-4 py-2">{{ $driver->email }}</td>
            <td class="border px-4 py-2">{{ $driver->phonenumber }}</td>
            <td class="border px-4 py-2 flex gap-2">
              <a href="{{ url('/show/'.$driver->id)}}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Detail</a>
              <a href="{{ url('/edit/'.$driver->id)}}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition duration-300">Edit</a>
              <a href="{{ url('/delete/'.$driver->id)}}" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>
