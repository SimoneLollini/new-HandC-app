<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Day extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_name'
    ];
    /**
     * The weeks that belong to the Day
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function weeks(): BelongsToMany
    {
        return $this->belongsToMany(Week::class);
    }

    /**
     * The exercises that belong to the Day
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class);
    }
}
