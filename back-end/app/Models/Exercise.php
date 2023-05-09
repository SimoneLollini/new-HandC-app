<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable =   [
        'exercise_name'
    ];
    /**
     * The days that belong to the Exercise
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function days(): BelongsToMany
    {
        return $this->belongsToMany(Day::class);
    }
}
