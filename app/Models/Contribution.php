<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    
    protected $guarded = []; 

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function faculty(){
        return $this->hasOne(Faculty::class, 'id', 'faculty_id');
    }

    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}
