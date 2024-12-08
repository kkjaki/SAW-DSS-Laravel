<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlternativeValue extends Model
{

    protected $table = 'alternativevalues'; // Nama tabel eksplisit

    protected $fillable = [
        'score'
    ];

    public function alternative(): BelongsTo
    {
        return $this->belongsTo(Alternative::class);
    }

    public function criteria(): BelongsTo
    {
        return $this->belongsTo(Criteria::class);
    }
}
