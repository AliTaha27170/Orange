<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function meetingRoom()
    {
        return $this->belongsTo(MeetingRoom::class,'id');
    }


    public function bookingours()
    {
        return $this->hasMany(Bookingtime::class,"booking_id");
    }
}
