<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Governorate extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
    ];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
    public function clients()
    {
        return $this->morphedByMany(Client::class, 'clientable');
    }
}
