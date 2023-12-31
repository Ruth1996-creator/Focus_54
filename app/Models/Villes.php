<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Villes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pays_id'

    ];
    function Pays(): BelongsTo
    {
        return $this->belongsTo(Pays::class, "pays_id");
    }
    function users(): HasMany
    {
        return $this->hasMany(User::class, "ville_id");
    }
}
