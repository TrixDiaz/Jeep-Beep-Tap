<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;

class Revenue extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'card_amount',
        'fare',
        'jnumber',
        'payment_method',
        'status',
        'name',
        'discount'
    ];

    public function card()
    {
        return $this->belongsTo(Card::class, 'card_id', 'card_id');
    }
}
