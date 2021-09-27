<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingRoom extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table    = 'meeting-rooms';
    
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

}
