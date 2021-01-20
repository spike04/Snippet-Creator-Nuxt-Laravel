<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'title',
        'body',
        'uuid'
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function (Step $step) {
            $step->uuid = Str::uuid();
        });
    }
}
