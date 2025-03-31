<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'logo',
        'app_title',
        'app_subtitle',
        'app_description',
        'app_keywords',
        'app_version',
        'web_login_link',
        'web_register_link'
    ];
}
