<?php
namespace Test\Http\Controllers;

use Test\Entities\Ticket;
use Test\Entities\TicketComment;
use Test\Http\Requests;
use Test\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function latest()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(20);

        return view('tickets/list', compact('tickets'));
    }

    public function popular()
    {
        $tickets = Ticket::orderBy('created_at', 'ASC')->paginate(20);

        return view('tickets/list', compact('tickets'));
    }

    public function open()
    {
        $tickets = Ticket::orderBy('created_at', 'ASC')->paginate(20);

        return view('tickets/list', compact('tickets'));
    }

    public function closed()
    {
        $tickets = Ticket::orderBy('created_at', 'ASC')->paginate(20);

        return view('tickets/list', compact('tickets'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     * nos trae un ticket y si no lana error findOrFail($id)
     */
    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);
        $title = "Detalles";
        return view("tickets/details", compact('ticket', 'title'));
    }
}
