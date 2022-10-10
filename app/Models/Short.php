<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Short extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'country_id', 'link', 'thumbnail'];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            Storage::delete($model->thumbnail);
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
