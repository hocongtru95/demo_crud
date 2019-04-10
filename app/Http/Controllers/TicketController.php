<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;

class TicketController extends Controller
{

    public function index()
    {
        $tickets = Tickets::where('user_id', auth()->user()->id)->get();
        return view('ticket.home', compact('tickets'));
    }

    public function create()
    {

        return view('ticket.create');
    }
    public function store(Request $request)
    {
        $ticket = new Tickets();
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $ticket->saveTicket($data);
        return redirect('ticket')->with('New support ticket has been created! Wait sometime to get resolved');
    }

    public function edit($id)
    {
        $ticket = Tickets::where('user_id', auth()->user()->id)
                            ->where('id', $id)
                            ->first();
        return view('ticket.edit', compact('ticket', 'id'));
    }
    public function update(Request $request, $id)
    {
        $ticket = new Tickets();
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data['id'] = $id;

        $ticket->updateTicket($data);
        return redirect('ticket')->with('success', 'Your ticket updated');
    }

    public function delete($id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();
        return redirect('ticket')->with('success', 'Your ticket deleted!');
    }
}
