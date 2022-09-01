<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Get the cars for the category.
     */
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
