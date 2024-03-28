<x-layout>

@include('partial._searchDriver')

  <div class="fixed top-0 mt-16 mb-10 left-0 w-full  shadow-md py-4 px-6 z-10 bg-transparent">
    <div class="container mx-auto flex justify-between items-center ">
      <h1 class="text-2xl font-bold">Driver List</h1>
      <a href="{{ url('/register') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300">Register New Driver</a>
    </div>
  </div>

  <div class="mt-22 px-4">
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
              <button type="button" class="inline-block px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300 delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-driver-id="{{ $driver->id }}">
                Delete
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

   
<!--Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="bg-blue-500 hover:bg-blue-900 text-white py-2 px-4 rounded-md mr-2" data-bs-dismiss="modal">No</button>
        <a id="deleteLink" href="#"><button type="button" class="bg-red-500 hover:bg-red-900 text-white py-2 px-4 rounded-md mr-2">Yes</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Your existing JavaScript code -->
<script>
  const deleteButtons = document.querySelectorAll('.delete-button');

  deleteButtons.forEach(button => {
    button.addEventListener('click', () => {
      const driverId = button.dataset.driverId;
      const deleteLink = document.getElementById('deleteLink');
      deleteLink.setAttribute('href', `{{ url('/delete/') }}/${driverId}`);
    });
  });
</script>

</x-layout>
