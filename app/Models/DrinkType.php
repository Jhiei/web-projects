<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkType extends Model
{
    protected $table = "drink_types";
    public $primaryKey = "type";
    public $timestamps = "true";

    public function drinks() {

        return $this->hasMany("App\Drink");

    }
}
