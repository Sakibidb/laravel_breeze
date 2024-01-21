<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'catagory_id', 'tags', 'image'];

    public function catagory(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function setTagAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    }


    public function getTagAttribute($value)
    {
        // return $this->attributes['tag'] = json_decode($value);
        return is_array($value) ? $value : json_decode($value, true);
    }
}
