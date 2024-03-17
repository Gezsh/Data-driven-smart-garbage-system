{{-- @php
    
dd($dustbin);
@endphp --}}
<x-layout>
  <div class="container">
    <h1> Dustbin {{$dustbin->id}} Details</h1>
<div class="form-group">
    <label >Location</label>
    {{-- <p>{{$dustbin->location}}</p> --}}
    <input value="{{ $dustbin->location }}" name="location" type="text" class="form-control"  placeholder="Enter ID Number" readonly="">
  </div>

  <div class="form-group">
    <label >Capacity</label>
    {{-- <p>{{$dustbin->capacity}}</p> --}}
    <input value="{{ $dustbin->capacity }}" name="capacity"  type="text" class="form-control"  placeholder="Enter First Name" readonly="">
  </div>
  </div>
</x-layout>