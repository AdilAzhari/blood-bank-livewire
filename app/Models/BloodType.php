<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function clients()
    {
        return $this->morphedByMany(Client::class, 'clientable');
    }
    public function donations()
    {
        return $this->hasMany(DonationRequest::class);
    }
}
