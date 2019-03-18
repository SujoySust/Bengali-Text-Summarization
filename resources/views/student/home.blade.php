@extends('student.master')

@section('content')
	@if(Auth::guard('student')->user()->status == 1)
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('student/home')}}">Home</a> <i class="fa fa-angle-right"></i></li>
</ol>

	@else
		<div class="col-md-12 stats-info stats-last widget-shadow">
			<div class="stats-last-agile">
				<h2 style="text-align: center;color: #8d3d1e">You are not approved by Admin.</h2>
				<h4 style="text-align: center">Please wait for admin approval</h4>
			</div>
		</div>
	@endif
@endsection
