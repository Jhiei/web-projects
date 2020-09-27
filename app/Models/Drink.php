<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = "drinks";
    public $primarykey = "id";
    public $timestamps = "true";

    public function drink_type() {

        return $this->belongsTo("App\DrinkType");

    }
}
