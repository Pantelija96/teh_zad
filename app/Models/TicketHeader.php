<?php

namespace App\Models;

use App\Enums\SubscriberState;
use App\Enums\TicketTypeId;
use Illuminate\Database\Eloquent\Model;

class TicketHeader extends Model
{
    protected $table = "ticket_headers";

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'ticket_type_id' => TicketTypeId::class,
        'subscriber_state' => SubscriberState::class,
        'success' => 'boolean',
        'ticket_creation_timestamp' => 'datetime',
        'session_creation_timestamp' => 'datetime',
    ];

    public function crceConfs()
    {
        return $this->hasOne(CRCEConf::class);
    }

    public function crceCdrs()
    {
        return $this->hasOne(CRCECdr::class);
    }
}
