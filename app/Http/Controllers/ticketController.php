<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ticketController extends Controller
{
    public function index()
    {
        $tickets = ticket::with('user')->get();
        return view('tickets.list', compact('tickets'));
    }

    public function create()
    {
        $ticket = ticket::with('tablo', 'user')->get();
        return view('tickets.create', compact('ticketTablo'));
    }

    public function store(Request $request)
    {
        $ticket = ticket::create([
            'ticket_title' => $request->input('ticketTitle'),
            'ticket_tablo_id' => $request->input('relatedTablo'),
            'ticket_priority' => $request->input('ticketPriority'),
            'ticket_content' => $request->input('ticketContent'),
            'ticket_attach' => $request->file('ticketAttach')
        ]);
        if ($request->hasFile('ticketAttach')) {
            $request->file('ticketAttach')->storeAs(
                'public/ticketAttach',
                $request->input('ticketTitle') . '.' . $request->file('ticketAttach'),
                'local'
            );
        }
        $ticket->save();
        return back()->with('status', 'تیکت با موفقیت ارسال شد.');
    }

    public function answer()
    {

    }

    public function feedback()
    {

    }

    public function close()
    {

    }
}
