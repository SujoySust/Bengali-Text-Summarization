@extends('fontEnd.master')

@section('content')

    <div class="banner">
        <div class="container">
            @if(isset($studies))
                @foreach($studies as $study)
                    <div class="panel panel-success">
                        <!-- Default panel contents -->
                        <div class="panel-heading">{{$study->tag}}</div>
                        <div class="panel-body">
                            <h2 class="card-title">{{$study->topic_title}}</h2>
                            @if(strlen($study->description)<=500)
                            <div class="card-text">{!! $study->description !!}</div>
                            @else
                                <div class="card-text">{!!substr($study->description,0,500)!!}</div>
                              <a href="{{url('study/view/').'/'.$study->id}}" class="btn btn-primary">Read More</a>
                            @endif
                        </div>

                        <!-- List group -->
                        <div class="panel-footer text-center">{{$study->updated_at}}</div>
                    </div>
                    <div class="clearfix"></div>
                @endforeach
            @endif

        </div>
    </div>


@endsection