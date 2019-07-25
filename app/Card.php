<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $table = '';
    protected $fillable = [
        'name','quantity'
    ];
}
