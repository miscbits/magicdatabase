<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
	protected $table = '';
    protected $fillable = [
        'name','commander','partner','format','list'
    ];
}
