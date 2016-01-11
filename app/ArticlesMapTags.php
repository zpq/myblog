<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesMapTags extends Model
{
    protected $fillable = ['articles_id', 'tags_id'];
}
