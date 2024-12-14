<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'card_number',
        'card_name',
        'card_type',
        'expiry_date',
        'cvv',
        'billing_address',
        'billing_city',
        'billing_zip',
        'save_card',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
