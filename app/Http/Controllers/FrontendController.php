<?php

namespace App\Http\Controllers;

use App\Models\TicketHeader;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $data = [];


    public function index()
    {
        $this->data['tickets'] = TicketHeader::with(['crceCdrs', 'crceConfs'])
            ->orderBy('ticketCreationTimestamp', 'desc')
            ->paginate(10);

//        return dd($this->data);

        return view('home', $this->data);
    }
}
