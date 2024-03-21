<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dustbin extends Model
{
    use HasFactory;
    protected $fillable = ['location', 'capacity'];
    public static function scopeFilter($query, array $filters)
    {
        if ($filters['capacity'] ?? false) {
            $query->where('capacity', 'like', '%' . request('capacity') . "%");
        }
        if ($filters['search'] ?? false) {
            $query->where('location', 'like', '%' . request('search') . "%")
                ->orWhere('capacity', 'like', '%' . request('search') . "%");
        }
    }
}
