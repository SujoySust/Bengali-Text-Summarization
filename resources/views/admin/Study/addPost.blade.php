@extends('admin.master')
@section('content')

    <!--heder end here-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a><i class="fa fa-angle-right"></i>Study <i class="fa fa-angle-right"></i> Add Study</li>
    </ol>
    <!--grid-->
    <div class="validation-system">

        <div class="validation-form">
            <!---->
            <h3 class="text-success">{{Session::get('message')}}</h3>

            <form method="POST" action="{{url('admin/study/post/save')}}">
                {{ csrf_field() }}
                <div class="vali-form">
                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Topic Title</label>
                        <input type="text" placeholder="Topic Title" required="" name="topic_title" style="color:black">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Tag</label>
                        <input type="text" placeholder="Keywords" required="" name="tag" style="color:black">
                    </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Description</label>
                        <textarea  rows="3" id="tarea" name="description" style="min-width: 600px"></textarea>
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