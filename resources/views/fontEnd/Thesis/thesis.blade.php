@extends('fontEnd.master')

@section('content')

<div class="banner">
<div class="container">
    @if(isset($projects))
        @foreach($projects as $project)
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">{{$project->student_name}}</div>
        <div class="panel-body">
            <h2 class="card-title">{{$project->project_title}}</h2>
            <h5 class="card-title">{{$project->keywords}}</h5>
            <p class="card-text">{{$project->short_description}}</p>
            <a href="{{url('thesis/view/').'/'.$project->id}}" class="btn btn-primary">View</a> <a href="{{$project->link}}" class="btn btn-primary">Download Project</a>
        </div>

        <!-- List group -->
        <div class="panel-footer text-center">{{$project->updated_at}}</div>
    </div>
            <div class="clearfix"></div>
        @endforeach
    @endif
    
    </div>
</div>
   

@endsection