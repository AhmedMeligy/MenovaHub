<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at'];

        function cards () {
            return $this->hasMany(Card::class);
        }
}
