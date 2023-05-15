<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $fillable = [
        'title',
        'original_filename',
        'filename',
        'file_size',
        'url',
        'expired_at'
    ];

    public function categories()
    {
        return $this->belongsToMany(SubCategory::class);
    }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
}
