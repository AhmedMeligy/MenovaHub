<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'image_url',
        'category_id',
        'created_at',
        'updated_at'
    ];

    function category() {
        return $this->belongsTo(Category::class);
    }
}
