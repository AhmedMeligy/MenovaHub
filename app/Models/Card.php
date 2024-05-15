<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'id',
        'title',
        'image_url',
        'category_id',
        'created_at',
        'updated_at'
    ];
}