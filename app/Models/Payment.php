<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'midtrans_transaction_id',
        'reference_type',
        'reference_id',
        'amount',
        'status',
    ];

    /**
     * Relationships
     */

    // User relationship (a payment belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Polymorphic relationship for the reference (e.g., booking, sparing, or main_bareng)
    public function reference()
    {
        return $this->morphTo();
    }

    /**
     * Accessors and Mutators
     */

    // Example accessor for formatted amount
    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 2, ',', '.');
    }

    // Example accessor for payment status
    public function getStatusLabelAttribute()
    {
        $statusLabels = [
            'pending' => 'Menunggu Pembayaran',
            'completed' => 'Pembayaran Selesai',
            'failed' => 'Pembayaran Gagal',
        ];

        return $statusLabels[$this->status] ?? $this->status;
    }
}
