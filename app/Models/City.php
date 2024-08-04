<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'governorate_id',
    ];
    public function governorate()
    {
        return $this->belongsTo(Governorate::class)->withDefault('No Governorate');
    }
    public function clients()
    {
        return $this->morphedByMany(Client::class,'clientable');
    }}
