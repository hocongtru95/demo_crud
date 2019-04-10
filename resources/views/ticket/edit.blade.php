@extends('ticket.layout.app')
@section('title', 'Edit Ticket')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{action('TicketController@update', $id)}}" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create new Ticket</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" name="title" id="email" value="{{$ticket->title}}" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="comment">Description</label>
                            <textarea class="form-control" id="comment" name="description" rows="5">{{$ticket->description}}</textarea>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection