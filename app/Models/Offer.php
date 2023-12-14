<?php

namespace App\Models;

use App\Models\Location;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offer extends Model
{
    use HasFactory;protected $fillable = [
        'title', 
        'description', 
        'price', 
        'status', 
        'author_id', 
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function locations(): BelongsToMany {
        return $this->belongsToMany(Location::class);
    }
}