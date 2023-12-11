<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'type_id',
        'prefecture_id',
        'city',
        'address',
        'level_id',
        'url',
        'detail',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function prefecture()
    {
        return $this->belongsTo('App\Models\Prefecture');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }
}
