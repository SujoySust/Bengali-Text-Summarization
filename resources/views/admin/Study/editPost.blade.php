@extends('admin.master')
@section('content')

    <!--heder end here-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a><i class="fa fa-angle-right"></i>Study <i class="fa fa-angle-right"></i> Edit</li>
    </ol>
    <!--grid-->
    <div class="validation-system">

        <div class="validation-form">
            <!---->
            <h3 class="text-success">{{Session::get('message')}}</h3>

            @if(isset($posts))
                @foreach($posts as $post)
            <form method="POST" action="{{url('admin/study/post/update')}}">
                {{ csrf_field() }}
                <div class="vali-form">
                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Topic Title</label>
                        <input type="text" placeholder="Topic Title" required="" name="topic_title" style="color:black" value="{{$post->topic_title}}">
                        <input type="hidden" name="id" value="{{$post->id}}">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Tag</label>
                        <input type="text" placeholder="Keywords" required="" name="tag" style="color:black" value="{{$post->tag}}">
                    </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-8 form-group1 group-mail">
                        <label class="control-label">Description</label>
                        <textarea  rows="3" id="tarea" name="description" style="min-width: 600px">{{$post->description}}</textarea>
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
                    <div class="col-md-8 form-group1 group-mail">
                        <select name="status">
                            @if($post->status == 1)
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            @else
                                <option value="0">UnPublished</option>
                                <option value="1">Published</option>
                            @endif

                        </select>

                    </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
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