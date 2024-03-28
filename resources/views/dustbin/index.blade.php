<x-layout>



@include('partial._search')

  <div class="fixed top-0 mt-16 mb-10 left-0 w-full  shadow-md py-4 px-6 z-10 bg-transparent">
    <div class="container mx-auto flex justify-between items-center ">
      <h1 class="text-2xl font-bold">Dustbins List</h1>
      <a href="{{ url('/dustbin/create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300">Register New Dustbin</a>
    </div>
  </div>

  <div class="container mx-auto mt-22 px-4 ">
   

    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse">
        {{-- Table Header --}}
        <thead>
          <tr>
            <th class="px-4 py-2 bg-gray-200 text-gray-700 uppercase font-semibold text-sm">ID</th>
            <th class="px-4 py-2 bg-gray-200 text-gray-700 uppercase font-semibold text-sm">Location</th>
            <th class="px-4 py-2 bg-gray-200 text-gray-700 uppercase font-semibold text-sm">Capacity</th>
            <th class="px-4 py-2 bg-gray-200 text-gray-700 uppercase font-semibold text-sm">Actions</th>
          </tr>
        </thead>

        {{-- Table Body --}}
        <tbody>
          @unless ($dustbins->isEmpty())
          @foreach($dustbins as $dustbin)
          <tr>
            <td class="border px-4 py-2">{{ $dustbin->id }}</td>
            <td class="border px-4 py-2">{{ $dustbin->location }}</td>
            <td class="border px-4 py-2">{{ $dustbin->capacity }}</td>
            <td class="border px-2 py-2 flex gap-2 justify-around">
              <a href="{{ url('/dustbin/show/'.$dustbin->id)}}" class="inline-block px-3 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Detaile</a>
              <a href="{{ url('/dustbin/edit/'.$dustbin->id)}}" class="inline-block px-3 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition duration-300">Edit</a>
              <button type="button" class="inline-block px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300 delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-dustbin-id="{{ $dustbin->id }}">
                Delete
              </button>
            </td>
          </tr>
          @endforeach
          @else
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" colspan="4">
              <p class="text-center">No Dustbins Found</p>
            </td>
          </tr>
          @endunless
        </tbody>
      </table>
    </div>
  </div>


  
<!--Delete  Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure you want to delete ?
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
      const dustbinId = button.dataset.dustbinId;
      const deleteLink = document.getElementById('deleteLink');
      deleteLink.setAttribute('href', `{{ url('/dustbin/delete/') }}/${dustbinId}`);
    });
  });
</script>

</x-layout>
