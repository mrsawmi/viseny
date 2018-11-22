<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ticketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tickets = ticket::get();
        return view('tickets.list', compact('tickets'));
    }

    public function create()
    {
        $ticket = ticket::get();
        return view('tickets.create', compact('ticket'));
    }

    public function usersNewTicket()
    {
        return view('viseny.user.tickets.form');
    }

/////////////////////////////////////////////////////////////////
    public function usersTicketStore(Request $request)
    {
        $ticket = ticket::create([
            'ticket_user_id' => Auth::user()->user_id,
            'ticket_email' => Auth::user()->email,
            'ticket_title' => $request->input('ticketTitle'),
            'ticket_priority' => $request->input('ticketPriority'),
            'ticket_content' => $request->input('ticketContent'),
        ]);
        if ($request->hasFile('ticketAttach')) {
            $request->file('ticketAttach')->storeAs(
                'public/ticketAttach',
                $request->file('ticketAttach')->getClientOriginalName(),
                'local'
            );
            $ticket['ticket_attach'] = $request->file('ticketAttach')->getClientOriginalName();
        }
        $message = Message::create([
            'message_ticket_id' => $ticket->ticket_id,
            'message_user_id' => Auth::user()->user_id,
            'message_sender' => Auth::user()->user_fullName,
            'message' => $ticket->ticket_content,
        ]);
        $ticket->save();
        $message->save();
        return back()->with('status', 'تیکت با موفقیت ارسال شد...!');

    }

////////////////////////////////////////////////////////////////
    public function showFile(Request $request, $file_id)
    {
        $file = ticket::find($file_id);
        return view('tickets.showfile', compact('file'));
    }

    public function ticketReview(Request $request, $ticket_id)
    {
        $ticket = ticket::find($ticket_id);
        $messages = Message::where('message_ticket_id', '=', $ticket_id)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('viseny.user.tickets.review', compact('ticket','messages'));
    }

}
