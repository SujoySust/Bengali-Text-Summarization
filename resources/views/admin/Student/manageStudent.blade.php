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
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($students))
                        <?php $i=1; ?>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>
                                    @if($student->status == 1)
                                        <badge style = 'color: green'>Approved</badge>
                                    @else
                                        <badge style = 'color: red'>Not Approved</badge>
                                    @endif
                                </td>
                                <td>
                                    @if($student->status == 0)
                                        <a href="{{url('admin/approve/student/').'/'.$student->id}}" class="text-info btn-info" style="padding: 3%">Approve</a>
                                    @else
                                        <a href="{{url('admin/block/student/').'/'.$student->id}}" class="text-info btn-info" style="padding: 3%">Block</a>
                                    @endif
                                    <a href="{{url('admin/student/delete/').'/'.$student->id}}" class="text-danger btn-danger" style="padding: 3%">Delete</a>
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