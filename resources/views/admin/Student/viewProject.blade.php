@extends('admin.master')
@section('content')

    <!--heder end here-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a><i class="fa fa-angle-right"></i>Student<i class="fa fa-angle-right"></i> Manage Student</li>
    </ol>
    <!--grid-->
    <div class="agile-grids">
        <!-- tables -->
        <div class="container">
            @if(isset($projects))
                @foreach($projects as $project)
                    <div class="panel panel-success">
                        <!-- Default panel contents -->
                        <div class="panel-heading">{{$project->student_name}}</div>
                        <div class="panel-body" style="background: aliceblue">
                            <h1 class="card-title text-center">{{$project->project_title}}</h1>
                            <h2 class="card-title text-center">Abstract</h2>
                            <div class="card-text text-center">{!! $project->abstract !!}</div>
                            <h5 class="card-title text-center"><stron>Keywords : {{$project->keywords}}</stron></h5>
                            <h2 class="card-title text-center">Run and Instructions</h2>
                            <div class="card-text text-center">
                                {!! $project->instruction !!}
                            </div>
                            @if($project->status == 0)
                            <a href="{{url('admin/publish/studentResource').'/'.$project->id}}" class="btn btn-primary">Publish</a>
                            @endif
                            <a href="{{url('admin/studentResource/delete').'/'.$project->id}}" class="btn btn-danger">Delete</a>
                            <a href="{{url('admin/student/resource')}}" class="btn btn-primary">All Project</a>
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