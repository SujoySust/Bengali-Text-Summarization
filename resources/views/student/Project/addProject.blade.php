@extends('student.master')
@section('content')

<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('student/home')}}">Home</a><i class="fa fa-angle-right"></i>Thesis<i class="fa fa-angle-right"></i> Add</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
     <h3 class="text-success">{{Session::get('message')}}</h3>
  	    
        <form method="POST" action="{{url('student/thesis/save')}}">
        {{ csrf_field() }}
         	<div class="vali-form">
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Thesis Title</label>
              <input type="text" placeholder="Thesis Title" required="" name="project_title" style="color:black">
            </div>
            <div class="clearfix"> </div>
            
            
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Keywords</label>
              <input type="text" placeholder="Keywords" required="" name="keywords" style="color:black">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Short Description</label>
              <input type="text" name="short_description"  placeholder="Short Description..." required="" style="color:black">
            </div>
             <div class="clearfix"> </div>

             <div class="col-md-8 form-group1 group-mail">
              <label class="control-label">Abstract</label>
              <textarea  rows="3" id="tarea" name="abstract" style="min-width: 600px"></textarea>
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
              <textarea  rows="3" id="tarea2" name="instruction" style="min-width: 600px"></textarea>
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
              <input type="text" placeholder="Thesis Link" required="" class="form-control" name="link" style="color:black">
            </div>
            <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
          </div>
        </form>
    
 	<!---->
 </div>

</div>


@endsection