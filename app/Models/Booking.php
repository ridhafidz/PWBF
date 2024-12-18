<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'lapangan_id',
        'booking_date',
        'start_time',
        'end_time',
        'status',
        'payment_id',
    ];

    /**
     * Relationships
     */

    // User relationship (a booking belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Lapangan relationship (a booking belongs to a lapangan)
    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }

    // Payment relationship (a booking may have a payment)
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    /**
     * Accessors and Mutators
     */

    // Example accessor for formatting booking date
    public function getFormattedBookingDateAttribute()
    {
        return \Carbon\Carbon::parse($this->booking_date)->format('d-m-Y');
    }

    // Example accessor for calculating the total booking duration in hours
    public function getBookingDurationAttribute()
    {
        $start = \Carbon\Carbon::parse($this->start_time);
        $end = \Carbon\Carbon::parse($this->end_time);
        return $start->diffInHours($end);
    }
}
