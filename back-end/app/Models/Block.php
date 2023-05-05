<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Block extends Model
{
    use HasFactory;
    protected $fillable =   [
        'coach_id',
        'athlete_id'
    ];
    /**
     * Get the coach that owns the Block
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coach(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * The athletes that belong to the Block
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function athletes(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    /**
     * Get all of the weeks for the Block
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function weeks(): HasMany
    {
        return $this->hasMany(Week::class);
    }
}
