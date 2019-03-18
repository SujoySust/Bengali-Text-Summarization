@extends('fontEnd.master')

@section('content')

<div class="banner">
<div class="container">
    @if(isset($viewProject))
        @foreach($viewProject as $project)
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">{{$project->student_name}}</div>
        <div class="panel-body">
            <h1 class="card-title text-center">{{$project->project_title}}</h1>
            <h2 class="card-title text-center">Abstract</h2>
            <div class="card-text text-center">{!! $project->abstract !!}</div>
            <h5 class="card-title text-center"><stron>Keywords : {{$project->keywords}}</stron></h5>
            <h2 class="card-title text-center">Run and Instructions</h2>
            <div class="card-text text-center">
                    {!! $project->instruction !!}
            </div>
            <a href="{{url('resources')}}" class="btn btn-primary">All Projects</a> <a href="{{$project->link}}" class="btn btn-primary">Download Project</a>
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