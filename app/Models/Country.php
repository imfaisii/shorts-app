<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lat', 'long', 'quotes'];

    public function shorts()
    {
        return $this->hasMany(Short::class);
    }
}
