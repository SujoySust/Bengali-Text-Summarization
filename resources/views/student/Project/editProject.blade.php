@extends('student.master')
@section('content')

<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Thesis <i class="fa fa-angle-right"></i> Edit</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
     <h3 class="text-success">{{Session::get('message')}}</h3>
  	    @if(isset($projects))
            @foreach($projects as $project)
        <form method="POST" action="{{url('student/thesis/update')}}">
        {{ csrf_field() }}
         	<div class="vali-form">
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Thesis Title</label>
              <input type="text" placeholder="Thesis Title" required="" name="project_title" style="color:black" value="{{$project->project_title}}">
                <input type="hidden" name="id" value="{{$project->id}}">
            </div>
            <div class="clearfix"> </div>
            
            
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Keywords</label>
              <input type="text" placeholder="Keywords" required="" name="keywords" style="color:black" value="{{$project->keywords}}">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Short Description</label>
              <input type="text" name="short_description"  placeholder="Short Description..." required="" style="color:black" value="{{$project->short_description}}">
            </div>
             <div class="clearfix"> </div>

             <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Abstract</label>
              <textarea  rows="3" id="tarea" name="abstract" style="min-width: 600px">{{$project->abstract}}</textarea>
                <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace( 'tarea', options );
                </script>
            </div>

             <div class="clearfix"> </div>
             <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Project Dependencies and Instruction</label>
              <textarea  rows="3" id="tarea2" name="instruction" style="min-width: 600px">{{$project->instruction}}</textarea>
                <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace( 'tarea2', options );
                </script>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Thesis Link</label>
              <input type="text" placeholder="Thesis Link" required="" class="form-control" name="link" style="color:black" value="{{$project->link}}">
            </div>
            <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
          </div>
        </form>
                @endforeach
            @endif
    
 	<!---->
 </div>

</div>


@endsection