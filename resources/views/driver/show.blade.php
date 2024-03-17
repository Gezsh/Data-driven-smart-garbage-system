<x-layout>
    <form action="" method="POST">
        @csrf
          <div class="form-group">
            <label >ID Number</label>
            <input value="{{ $driver->reg }}" name="reg" type="text" class="form-control"  placeholder="Enter ID Number" readonly="">
          </div>
        
          <div class="form-group">
            <label >First Name</label>
            <input value="{{ $driver->firstName }}" name="firstName"  type="text" class="form-control"  placeholder="Enter First Name" readonly="">
          </div>
        
          <div class="form-group">
            <label >Last Name</label>
            <input value="{{ $driver->lastName }}" name="lastName"  type="text" class="form-control"  placeholder="Enter Last Name" readonly="">
          </div>
        
          <div class="form-group">
            <label >Email</label>
            <input value="{{ $driver->email }}" name="email" type="text" class="form-control"  placeholder="Enter Email" readonly="">
          </div>
        
          <div class="form-group">
            <label >Phone number</label>
            <input value="{{ $driver->phonenumber }}" name="phonenumber"  type="text" class="form-control"  placeholder="Enter phone number" readonly="">
          </div>
        </form>
</x-layout>