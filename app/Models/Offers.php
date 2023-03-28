<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offers extends Model
{
    use HasFactory;

    protected $fillable = [

        'title','description','salary','type','location','available_for'
    ];
}
