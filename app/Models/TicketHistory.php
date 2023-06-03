<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketHistory extends Model
{
    use HasFactory;

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }
}
