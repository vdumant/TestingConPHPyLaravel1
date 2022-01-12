<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    //accessors
    public function getSlugAttribute($value)
    {
        return str_replace(' ', '-', $this->name);
    }

    public function href()
    {
        return "blog/{$this->slug}";
    }
}
