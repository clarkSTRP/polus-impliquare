<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responses extends Model
{
    use HasFactory;
    public function offers(): BelongsTo
    {
        return $this->belongsTo(Offers::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(users::class);
    }
}
