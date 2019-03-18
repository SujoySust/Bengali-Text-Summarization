@extends('admin.master')

@section('content')
<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Student</h3>
								<h4>{{App\Student::count()}}</h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Thesis</h3>
								<h4>{{\App\Project::count()}}</h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Study Post</h3>
								<h4>{{\App\Study::count()}}</h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4>14,430</h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
</div>
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="w3-agileits-pane">
		<div class="agile-grids">
			<!-- tables -->

			<div class="agile-tables">
				<div class="w3l-table-info">
					<h3>Comments</h3>
					<table id="table-breakpoint">
						<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contract</th>
							<th>Message</th>
							<th style="width: 20%">Action</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($comments))
							<?php $i=1; ?>
							@foreach($comments as $comment)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$comment->name}}</td>
									<td>{{$comment->email}}</td>
									<td>{{$comment->contract}}</td>
									<td>{{$comment->message}}</td>
									<td>
										<a href="{{url('admin/view/comment/').'/'.$comment->id}}" class="text-info btn-info" style="padding: 3%">View</a>
										<a href="{{url('admin/comment/delete/').'/'.$comment->id}}" class="text-danger btn-danger" style="padding: 3%">Delete</a>
									</td>
								</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
			</div>

		  <div class="clearfix"></div>
	  </div>
@endsection
