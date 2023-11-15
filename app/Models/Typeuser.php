<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Typeuser extends Model
{
    use HasFactory;
    function Users(): HasMany
    {
        return $this->hasMany(User::class, "type_user");
    }
    
}

