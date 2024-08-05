<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationRequest extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'patient_name',
        'patient_age',
        'bags_number',
        'hospital_name',
        'hospital_address',
        'patient_phone_number',
        'details',
        'latitude',
        'longitude',
        'client_id',
        'city_id',
        'blood_type_id',
    ];
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function client()
    {
        return $this->morphTo(Client::class, 'clientable');
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class);
    }
    public function notification()
    {
        return $this->hasOne(Notification::class);
    }

    public function scopeFilter($query, $filters)
    {
        return $query->when($filters['city_id'] ?? null, function ($query, $city_id) {
            $query->where('city', $city_id);
        })->when($filters['blood_type_id'] ?? null, function ($query, $blood_type_id) {
            $query->where('BloodType', $blood_type_id);
        });
    }}
