<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'profile_id',
        'image'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
