@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <table style="margin-top: 50px;">
                <form method="post" action="{{url('/ticket/create')}}">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <tr>
                            <td><label for="title">Ticket Title:</label></td>
                            <td><input type="text" class="form-control" name="title"/></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="description">Ticket Description:</label></td>
                            <td><textarea cols="21" rows="5" class="form-control" name="description"></textarea></td>
                        </tr>
                    </div>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Create</button></td>
                        <td></td>
                    </tr>

                </form>
            </table>
        </div>
    </div>
@endsection