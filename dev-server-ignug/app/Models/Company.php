<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'pgsql-authentication';
    protected $fillable = [
        'identity',
        'nature',
        'trade_name',
        'email',
        'comercial_activity',
        'phone',
        'cell_phone',
        'web_page',
        'address',
        'state',
    ];

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function professionals()
    {
        return $this->belongsToMany('AppModels\Professional')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
