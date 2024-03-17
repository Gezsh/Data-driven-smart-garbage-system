<x-layout>
    <form action="{{ url('/update/'.$driver->id)}}" method="POST">
        @csrf
          <div class="form-group">
            <label >ID Number</label>
            <input value="{{ $driver->reg }}" name="reg" type="text" class="form-control"  placeholder="Enter ID Number" >
          </div>
        
          <div class="form-group">
            <label >First Name</label>
            <input value="{{ $driver->firstName }}" name="firstName"  type="text" class="form-control"  placeholder="Enter First Name" >
          </div>
        
          <div class="form-group">
            <label >Last Name</label>
            <input value="{{ $driver->lastName }}" name="lastName"  type="text" class="form-control"  placeholder="Enter Last Name" >
          </div>
        
          <div class="form-group">
            <label >Email</label>
            <input value="{{ $driver->email }}" name="email" type="text" class="form-control"  placeholder="Enter email address" >
          </div>
        
          <div class="form-group">
            <label >Phone number</label>
            <input value="{{ $driver->phonenumber }}" name="phonenumber"  type="text" class="form-control"  placeholder="Enter Phone number">
          </div>
          <button type="submit" class="btn btn-success mb-2">Update</button>
        
        </form>
</x-layout>