<x-layout>

    <section class="col">
        <form action="{{ url('/store') }}" method="POST">
        @csrf
          <div class="form-group">
            <label >ID Number</label>
            <input name="reg" type="text" class="form-control"  placeholder="Enter ID Number">
          </div>
        
          <div class="form-group">
            <label >First Name</label>
            <input name="firstName"  type="text" class="form-control"  placeholder="Enter First Name">
          </div>
        
          <div class="form-group">
            <label >Last Name</label>
            <input name="lastName"  type="text" class="form-control"  placeholder="Enter Last Name">
          </div>
        
          <div class="form-group">
            <label >Email</label>
            <input name="email" type="text" class="form-control"  placeholder="Enter email address">
          </div>
        
          <div class="form-group">
            <label >Phone Number</label>
            <input name="phonenumber"  type="text" class="form-control"  placeholder="Enter phone number">
          </div>
          <button type="submit" class="btn btn-info mb-2">Register</button>
        
        </form>
                  </section>


</x-layout>