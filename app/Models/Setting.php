<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'about_app',
        'phone_number',
        'email',
        'fb_link',
        'tw_link',
        'insta_link',
        'notification_setting_text',
    ];
}
