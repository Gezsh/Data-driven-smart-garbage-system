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
                <button type="button" class="inline-block px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300 delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-driver-id="{{ $driver->id }}">
                    Delete
                </button>
            </div>
        </div>
    </div>

<!-- Delete Modal -->
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
    const deleteButton = document.querySelector('.delete-button');
    
    deleteButton.addEventListener('click', () => {
        const driverId = deleteButton.dataset.driverId;
        const deleteLink = document.getElementById('deleteLink');
        deleteLink.setAttribute('href', `{{ url('/delete/') }}/${driverId}`);
    });
</script>

</x-layout>
