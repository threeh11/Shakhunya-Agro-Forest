<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'email',
        'text_message',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}