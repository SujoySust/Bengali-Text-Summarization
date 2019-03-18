@extends('fontEnd.master')

@section('content')

<div class="container">
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading text-center">Abstractive English Summarization</div>
        <div class="panel-body">
            <h1 class="card-title text-center"></h1>
            <div class="row">
                <div class="col-md-12">
                    <form id="task-form" method="post" action="{{url('summary/abstract/english')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <lable class="form-control">Input English  Text Here For Abstractive Summary</lable>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <textarea name="text" class="form-control" style="min-height: 300px"></textarea>
                        </div>
                        <div class="clearfix"></div>
                        <input type="submit" value="Summary" name="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading text-center">Summary Result</div>
        <div class="panel-body">
            <h3 class="card-title text-center"> </h3>
            <p>{{Session::get("summary")}}</p>
        </div>
        <div class="panel panel-success">
            <!-- Default panel contents -->
            <div class="panel-heading text-center">Document</div>
            <div class="panel-body">
                <p>{{Session::get("text")}}</p>
            </div>

        </div>

        <!-- List group -->
    </div>
</div>
    
    @endsection