<x-layout>
    <div class="container">
        <h1>Edit Dustbin</h1>
        <form action="/dustbin/update/{{$dustbin->id}}" method="POST">
            @csrf
            @method('PUT')

            <!-- Add your form fields here -->
            {{-- <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                  value="{{$dustbin->location}}" />
                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <div class="mb-6">
                <label for="capacity" class="inline-block text-lg mb-2">Capacity</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="capacity"
                  placeholder="" value="{{$dustbin->capacity}}" />
        
               
              </div> --}}
              <div class="form-group">
                <label >Location</label>
                {{-- <p>{{$dustbin->location}}</p> --}}
                <input value="{{ $dustbin->location }}" name="location" type="text" class="form-control"  placeholder="Enter ID Number" >
              </div>
              @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            
              <div class="form-group">
                <label >Capacity</label>
                {{-- <p>{{$dustbin->capacity}}</p> --}}
                <input value="{{ $dustbin->capacity }}" name="capacity"  type="text" class="form-control"  placeholder="Enter First Name" >
                @error('capacity')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
        

            <button type="submit" class="btn btn-info mb-2">Update</button>
        </form>
    </div>
  </x-layout>