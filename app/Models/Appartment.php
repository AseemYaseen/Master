<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\range;

class Appartment extends Model
{
    use HasFactory;

    
    protected $table = 'appartments';

    protected $primaryKey = 'id';


    protected $fillable = [
        'location',
        'price',
        'description',
        'image',
        'ranges_id ',
    ];


    public function range(){
        return $this->belongsTo(range::class, 'ranges_id');

        
    
    }

}
