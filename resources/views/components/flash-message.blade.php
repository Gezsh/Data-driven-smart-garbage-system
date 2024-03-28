@if(session()->has('message'))

   <div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)"  x-show="show" class="fixed z-999 top-10 mt-8 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-48 py-3">
         <p>
            {{session('message')}}
         </p>
   </div>
   
@endif 
