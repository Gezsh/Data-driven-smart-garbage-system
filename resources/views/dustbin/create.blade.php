
<x-layout>
  <div class="container">
    <h1>Create Dustbin</h1>
<form action="/dustbin/store" method="POST">
    @csrf
      <div class="form-group">
        <label >Location</label>
        <input name="location" type="text" class="form-control"  placeholder="Enter ID Number">
      </div>
    
      <div class="form-group">
        <label >Capacity</label>
        <input name="capacity"  type="text" class="form-control"  placeholder="Enter First Name">
      </div>
      <button type="submit" class="btn btn-info mb-2">Register</button>
    
    </form>
  </div>
  </x-layout>