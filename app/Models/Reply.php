<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $appends = ['human_readable_time'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function getHumanReadableTimeAttribute() {
        return $this->created_at->diffForHumans();
    }
}
