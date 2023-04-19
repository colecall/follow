<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealAccount extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'username', 'counter', 'category','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fakeAccounts()
    {
        return $this->hasMany(FakeAccount::class);
    }

    public function follow()
    {
        return $this->hasMany(Follow::class);
    }
}
