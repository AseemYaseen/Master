<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Appartment;
use  App\Models\Restaurant;

class range extends Model
{
    use HasFactory;

    
    protected $table = 'ranges';

    protected $primaryKey = 'id';

    protected $fillable = [
        'budget_Range'
    ];



    public function Appartment(){
        return $this->hasOne(Appartment::class);
    }

    public function Restaurant(){
        return $this->hasOne(Restaurant::class);
    }




}
