<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\range;

class Restaurant extends Model
{
    use HasFactory;


    protected $table = 'restaurants';

    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'location',
        'price',
        'description',
        'image ',
        'ranges_id'
    ];

    
    public function range(){
        return $this->belongsTo(range::class, 'range_id');
    
    }
}
