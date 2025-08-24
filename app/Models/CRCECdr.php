<?php

namespace App\Models;

use App\Enums\CRCEaccountReferenceId;
use App\Enums\CRCETrafficType;
use Illuminate\Database\Eloquent\Model;

class CRCECdr extends Model
{
    protected $table = "crce_cdr";

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'traffic_type' => CRCETrafficType::class,
        'account_reference_id' => CRCEaccountReferenceId::class,
        'is_caller_id_suppressed' => 'boolean',
        'is_roaming' => 'boolean',
        'is_charge_free_action' => 'boolean',
        'answer_timestamp' => 'datetime',
    ];

    public function ticketHeader()
    {
        return $this->belongsTo(TicketHeader::class, 'ticketHeaderId');
    }
}
