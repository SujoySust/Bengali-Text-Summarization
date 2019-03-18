@extends('student.master')
@section('content')

<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('student/home')}}">Home</a><i class="fa fa-angle-right"></i>Thesis <i class="fa fa-angle-right"></i> Manage</li>
            </ol>
<!--grid-->
<div class="agile-grids">
    <!-- tables -->

    <div class="agile-tables">
        <div class="w3l-table-info">
        <h3>Manage Thesis</h3>
        <table id="table-breakpoint">
            <thead>
            <tr>
                <th>No</th>
                <th>Thesis Title</th>
                <th>Short Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($projects))
                <?php $i=1; ?>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$project->project_title}}</td>
                        <td>{{$project->short_description}}</td>
                        <td>
                            @if($project->status == 1)
                                <badge style = 'color: green'>Published</badge>
                            @else
                                <badge style = 'color: red'>Not Published</badge>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('student/thesis/edit/').'/'.$project->id}}" class="text-info btn-info" style="padding: 3%">EDIT</a>
                            <a href="{{url('student/thesis/delete/').'/'.$project->id}}" class="text-danger btn-danger" style="padding: 3%">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    </div>
</div>


@endsection