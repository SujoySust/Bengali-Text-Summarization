@extends('fontEnd.master')

@section('content')

<div class="banner">
<div class="container">
    @if(isset($viewStudy))
        @foreach($viewStudy as $study)
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">{{$study->tag}}</div>
        <div class="panel-body">
            <h1 class="card-title text-center">{{$study->topic_title}}</h1>
            <div class="card-text text-center">{!! $study->description !!}</div>

            <a href="{{url('study')}}" class="btn btn-primary">Read All</a>
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