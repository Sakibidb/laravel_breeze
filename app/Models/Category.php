<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'catagory_id'];

    public function student(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
