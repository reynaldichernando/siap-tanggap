<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $appends = ['human_readable_time'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function reply() {
        return $this->hasMany('App\Models\Reply');
    }

    public function getHumanReadableTimeAttribute() {
        return $this->created_at->diffForHumans();
    }
}
