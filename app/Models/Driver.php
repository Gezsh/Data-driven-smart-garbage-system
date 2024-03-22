<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function scopeFilter($query,array $filters){
      
        if($filters['search'] ?? false){
            //dd($filters);
            
           $query->where('firstName','like','%'.request('search').'%')
           ->orWhere('lastName','like','%'.request('search').'%')
           ->orWhere('email','like','%'.request('search').'%');
          
        }
    }
}

