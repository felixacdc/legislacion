<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    protected $table = 'codes';

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany('App\Article', 'code_id');
    }
}
