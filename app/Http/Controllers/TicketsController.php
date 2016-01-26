<?php namespace Test\Http\Controllers;

use Test\Entities\Ticket;
use Test\Entities\TicketComment;
use Test\Http\Requests;
use Test\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller {

    public function latest()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(10);

        return view('tickets/list', compact('tickets'));
    }
    public function popular()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(10);
        return view('tickets/list', compact('tickets'));
    }
    public function closed()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(10);
        return view('tickets/list', compact('tickets'));
    }
    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('tickets/details' ,compact('ticket'));
    }
    public function open()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(10);
        return view('tickets/list', compact('tickets'));
    }

}
