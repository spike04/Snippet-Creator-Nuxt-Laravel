<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Snippet extends Model
{
    use HasFactory;

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'title'
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
     */
    public static function boot()
    {
        parent::boot();

        static::created(function (Snippet $snippet) {
            $snippet->steps()->create([
                'order' => 1
            ]);
        });

        static::creating(function (Snippet $snippet) {
            $snippet->uuid = Str::uuid();
        });
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function steps()
    {
        return $this->hasMany(Step::class)->orderBy('order', 'asc');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
