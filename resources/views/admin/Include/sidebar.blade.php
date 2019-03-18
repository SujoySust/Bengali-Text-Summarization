<div class="sidebar-menu">
    <header class="logo1">
        <a href="{{url('admin/home')}}" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                    <ul id="menu" >
                        <li><a href="{{url('admin/home')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>

                        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Student</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-boletim" ><a href="{{url('admin/manage/student')}}">Manage Student</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="{{url('admin/student/resource')}}">Manage Student Resource</a></li>

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Study</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-boletim" ><a href="{{url('admin/study/post/add')}}">New Post</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="{{url('admin/study/post/manage')}}">Manage Post</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
                </div>
                <div class="clearfix"></div>		
</div>