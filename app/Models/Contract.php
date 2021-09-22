<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'fecha',
    ];

    public function rates()
    {
        return $this->hasMany(Rates::class);
    }
}

