<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'date', 'time', 'user_id', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
