<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
    </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    @if(Auth::guard('student')->user()->status == 1)
            <div class="menu">
                    <ul id="menu" >
                        <li><a href="{{url('student/home')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                        
                        
                     
                    <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Thesis</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                            <li id="menu-academico-boletim" ><a href="{{url('student/thesis/add')}}">Add Thesis</a></li>
                            <li id="menu-academico-avaliacoes" ><a href="{{url('student/thesis/manage')}}">Manage Thesis</a></li>
                            </ul>
                    </li>

                    </ul>
                </div>
        @endif
                </div>
                <div class="clearfix"></div>		
</div>