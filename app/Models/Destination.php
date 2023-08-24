<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable =[
        'image' , 
        'title' ,
        'location', 
        'reason'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    static function search($query){
    $results = Destination::where('title', 'LIKE', "%$query%")
                          ->orWhere('location', 'LIKE', "%$query%")
                          ->get();
    return $results;
                        }
}
