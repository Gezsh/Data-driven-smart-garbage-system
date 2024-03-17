<x-layout>
  <div class="container">
    {{-- <h1>Edit Dustbin</h1> --}}
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Location</th>
      <th scope="col">Capacity</th>
      <th scope="col">Actions</th>

      
    </tr>
  </thead>
    <tbody>
      @unless ($dustbins->isEmpty())
          
      @foreach($dustbins as $dustbin)
      <tr>
        <th>{{ $dustbin->id }}</th>
        <td>{{ $dustbin->location }}</td>
        <td>{{ $dustbin->capacity }}</td>
        
        <td>
          <a href="{{ url('/dustbin/show/'.$dustbin->id)}}" class="bnt btn-sm btn-info">Show</a>
          <a href="{{ url('/dustbin/edit/'.$dustbin->id)}}" class="bnt btn-sm btn-warning">Edit</a>
            <a href="{{ url('/dustbin/delete/'.$dustbin->id)}}" class="bnt btn-sm btn-danger">Delete</a>
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
</x-layout>