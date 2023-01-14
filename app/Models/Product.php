<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $idProduct)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'city',
        'description',
        'path_to_images',
        'rating',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
