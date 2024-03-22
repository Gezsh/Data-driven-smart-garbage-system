<x-layout>
    <div class="flex justify-center mt-20 items-center h-full">
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-96">
            <h2 class="text-center text-xl font-bold text-red-600 mb-6">Dustbin Details</h2>
            <div class="border border-gray-300 rounded-md p-4 mb-4">
                <div class="flex items-center mb-2">
                    <span class="font-bold mr-2">ID:</span>
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
                <button type="button" class="inline-block px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300 delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-dustbin-id="{{ $dustbin->id }}">
                  Delete
                </button>
            </div>
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
    const deleteButton = document.querySelector('.delete-button');
  
    deleteButton.addEventListener('click', () => {
      const dustbinId = deleteButton.dataset.dustbinId;
      const deleteLink = document.getElementById('deleteLink');
      deleteLink.setAttribute('href', `{{ url('/dustbin/delete/') }}/${dustbinId}`);
    });
  </script>
  
  </x-layout>
  