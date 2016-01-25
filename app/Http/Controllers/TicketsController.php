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
        return view('tickets/list');
    }
    public function closed()
    {
        return view('tickets/list');
    }
    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);
        $comments = TicketComment::select('ticket_comments.*', 'users.name')
            ->join('users', 'ticket_comments.user_id', '=','users.id')
            ->where('ticket_id', $id)
            ->get();
        return view('tickets/details' ,compact('ticket', 'comments'));
    }
    public function open()
    {
        return view('tickets/list');
    }

}
