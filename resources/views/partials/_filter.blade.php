{{-- <form  class="p-2 border-">
    <label for="capacity">Capacity:</label>
   
    <button type="submit">
      
    </button>
</form> --}}


<form action="/dustbin/">
<div class="relative border-2 border-gray-100 rounded-lg">
    <select name="capacity" id="capacity" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none">
        <option disabled value="">capacity</option>
        <option value="empty">Empty</option>
        <option value="full">Full</option>
    </select>
    <div class="top-2 right-2">
      <button type="submit" class="h-10 w-10 text-white rounded-full bg-red-500 hover:bg-red-600">
        <i class="fa fa-filter"></i>
      </button>
    </div>
  </div>
</form>