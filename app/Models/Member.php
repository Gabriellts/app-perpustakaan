<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Loan;

class Member extends Model
{
    protected $fillable = [
        'nama', 'nim', 'email', 'nomor_telepon', 'alamat', 'status',
    ];
    public function loans(): HasMany
{
    return $this->hasMany(Loan::class);
}
}
