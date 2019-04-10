@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif

        <div>
            <a href="{{url('/ticket/create')}}" class="btn btn-success">Create Ticket</a>
            <a href="{{url('/ticket')}}" class="btn btn-default">All Tickets</a>
        </div>
    </div>
    <style>
        table td, thead {
            border: 1px solid #1f648b;
            margin: 3px;
        }
        table {
            margin-top: 20px;
        }
    </style>

    <div class="container">
        <table class="table table-striped" >
            <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->title}}</td>
                    <td>{{$ticket->description}}</td>
                    <td><a href="{{action('TicketController@edit', $ticket->id)}}">Edit</a></td>
                    <td><a href="{{action('TicketController@delete', $ticket->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection