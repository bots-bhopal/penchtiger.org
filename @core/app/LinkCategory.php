<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkCategory extends Model
{
    protected $table = 'category_link';

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }
}
