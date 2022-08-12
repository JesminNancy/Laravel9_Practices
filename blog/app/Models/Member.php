<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function setNameAttribute($value)
    {
        return $this->attributes['name']=$value."Akther"." Nancy";
    }

    public function setCityAttribute($value)
    {
        return $this->attributes['city']="Mirpur ".$value;
    }
}