<x-layout>
  <div class="mt-10">
    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse">
  <thead class="thead-light">
    <tr>
      <th class="px-4 py-2 bg-gray-200" scope="col">ID</th>
      <th class="px-4 py-2 bg-gray-200" scope="col">Location</th>
      <th class="px-4 py-2 bg-gray-200" scope="col">Capacity</th>
      <th class="px-4 py-2 bg-gray-200" scope="col">Actions</th>
    </tr>
  </thead>
    <tbody>
      @unless ($dustbins->isEmpty())
          
      @foreach($dustbins as $dustbin)
      <tr>
        <td class="border px-4 py-2" >{{ $dustbin->id }}</td>
        <td class="border px-4 py-2">{{ $dustbin->location }}</td>
        <td class="border px-4 py-2">{{ $dustbin->capacity }}</td>
        
        <td class="border px-4 py-2">
          <a href="{{ url('/dustbin/show/'.$dustbin->id)}}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Show</a>
          <a href="{{ url('/dustbin/edit/'.$dustbin->id)}}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-blue-600 transition duration-300">Edit</a>
            <a href="{{ url('/dustbin/delete/'.$dustbin->id)}}" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-blue-600 transition duration-300">Delete</a>
        </td>
      </tr>
      @endforeach
      @else
      <tr class="border-gray-300">
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <p class="text-center">No Dustbins are Found</p>
        </td>
      </tr>
      @endunless
    </tbody>
  </table>
  </div>
  </div>
</x-layout>