<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
