<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SubCategory extends Model
{
    use Sluggable;

    protected $table = 'sub_categories';

    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function links()
    {
        return $this->belongsToMany(Link::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
    }
    
}
