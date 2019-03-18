@extends('admin.master')
@section('content')

    <!--heder end here-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a><i class="fa fa-angle-right"></i>Student<i class="fa fa-angle-right"></i> Manage Student</li>
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
                        <th>Student Name</th>
                        <th>Project Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($projects))
                        <?php $i=1; ?>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$project->student_name}}</td>
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
                                    @if($project->status == 0)
                                        <a href="{{url('admin/publish/studentResource/').'/'.$project->id}}" class="text-info btn-info" style="padding: 3%">Publish</a>
                                    @else
                                        <a href="{{url('admin/unPublish/studentResource/').'/'.$project->id}}" class="text-danger btn-danger" style="padding: 3%">Unpublish</a>
                                    @endif
                                    <a href="{{url('admin/view/studentResource/').'/'.$project->id}}" class="text-info btn-info" style="padding: 3%">View</a>
                                    <a href="{{url('admin/studentResource/delete/').'/'.$project->id}}" class="text-danger btn-danger" style="padding: 3%">Delete</a>
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