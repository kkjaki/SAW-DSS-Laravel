<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Criterion extends Model
{
    protected $fillable = [
        'enum',
        'attribute',
        'name',
        'weight'
    ];

    /**
     * Get the user that owns the Criterion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function alternativeValues():HasMany
    {
        return $this->hasMany(AlternativeValue::class, 'criteria_id');
    }
}
