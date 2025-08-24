<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRCEConf extends Model
{
    use HasFactory;

    protected $table = 'crce_confs';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function ticketHeader()
    {
        return $this->belongsTo(TicketHeader::class, 'ticketHeaderId');
    }
}
