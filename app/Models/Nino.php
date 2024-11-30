<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nino extends Model
{
    /** @use HasFactory<\Database\Factories\NiñoFactory> */
    use HasFactory;

    protected $guarded = [];

    public function tutor(): BelongsTo
    {
        return $this->belongsTo(Tutor::class);
    }
}
