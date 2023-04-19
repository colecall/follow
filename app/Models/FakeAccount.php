<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakeAccount extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'social_media', 'username', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function realAccount()
    {
        return $this->belongsTo(RealAccount::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }
    public function fl()
    {
        return $this->hasMany(Follow::class);
    }
}
