@extends('ticket.layout.app')
@section('title', 'Create new Ticket')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form action="{{url('/ticket/create')}}" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create new Ticket</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Title</label>
                            <input type="text" class="form-control" name="title" id="email" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="comment">Description</label>

                            <textarea id="demo1" name="description"></textarea>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        new SimpleMDE({
            element: document.getElementById("demo1"),
            spellChecker: false,
        });
    </script>
@endsection
