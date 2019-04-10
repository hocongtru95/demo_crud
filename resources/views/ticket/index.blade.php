@extends('ticket.layout.app')
@section('title', "List ticket")

@section('content')
	<div class="row">
	<div class="col-md-12">
		<div class="card card-tasks">
			<div class="card-header ">
				<h4 class="card-title">Danh sách Ticket</h4>
				@if(\Session::has('success'))
					<div class="alert alert-success">
						{{\Session::get('success')}}
					</div>
				@endif
				<div class="card-category">
					<a href="{{url('ticket/create')}}"><button class="btn btn-success">Create</button></a>
				</div>
			</div>
			<div class="card-body ">
				<div class="table-full-width">
					<table class="table">
						<thead>
						<tr>
							<th>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input  select-all-checkbox" type="checkbox" data-select="checkbox" data-target=".task-select">
										<span class="form-check-sign"></span>
									</label>
								</div>
							</th>
							<th>Title</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach ($tickets as $ticket)
							<tr>
								<td>
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input task-select" type="checkbox">
											<span class="form-check-sign"></span>
										</label>
									</div>
								</td>
								<td>{{$ticket->title}}</td>
								<td>{{$ticket->description}}</td>
								<td class="td-actions text-right">
									<div class="form-button-action">
										<a href="{{url("ticket/edit/$ticket->id")}}">
											<button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link <btn-simple-primary">
												<i class="la la-edit"></i>
											</button></a>
										<a href="{{url("ticket/delete/$ticket->id")}}">
											<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
												<i class="la la-times"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="card-footer ">
			</div>
		</div>
	</div>
</div>
@endsection