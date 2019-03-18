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
                        <th>Topic Title</th>
                        <th>Keyword</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($posts))
                        <?php $i=1; ?>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$post->topic_title}}</td>
                                <td>{{$post->tag}}</td>
                                <td>
                                    @if($post->status == 1)
                                        <badge style = 'color: green'>Published</badge>
                                    @else
                                        <badge style = 'color: red'>Not Published</badge>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('admin/study/post/edit').'/'.$post->id}}" class="text-info btn-info" style="padding: 3%">Edit</a>
                                    <a href="{{url('admin/study/post/delete/').'/'.$post->id}}" class="text-danger btn-danger" style="padding: 3%">Delete</a>
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