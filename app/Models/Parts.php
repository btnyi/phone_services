<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    
    use HasFactory;

    protected $table = 'parts';
    public function getAllParts()
{
    $parts = Parts::all();
    return response()->json($parts);
}
}
