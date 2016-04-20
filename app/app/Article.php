<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['number', 'name', 'description1', 'description2', 'description3', 'description4', 'description5', 'description6', 'description7', 'description8', 'description9', 'description10', 'code_id'];

    public function comment ()
    {
        return $this->hasOne('App\Comment', 'article_id');
    }
}
