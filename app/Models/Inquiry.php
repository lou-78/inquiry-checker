<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'original_text',
        'category',
        'priority',
        'country',
        'summary',
        'suggested_reply',
    ];
}
