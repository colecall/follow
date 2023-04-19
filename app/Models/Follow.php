<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'fake_account_id',
        'real_account_id',
        'type',
        'status',
        'back_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fakeAccount()
    {
        return $this->belongsTo(FakeAccount::class);
    }

    public function realAccount()
    {
        return $this->belongsTo(RealAccount::class);
    }
}
