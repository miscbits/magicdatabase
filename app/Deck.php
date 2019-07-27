<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $fillable = [
        'name','commander','partner','format','mainboard', 'sideboard', 'maybeboard'
    ];
}
