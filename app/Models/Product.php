<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'video',
        'desc',
        'card_id',
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}