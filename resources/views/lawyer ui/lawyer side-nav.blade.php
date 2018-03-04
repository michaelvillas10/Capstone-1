@section('nav')
<ul class="nav nav-list">
                        <li class="active" style="background-color: #182634;"><!-- dashboard -->
                            <a href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home </span>
                            </a>
                        </li>
                        <li style="background-color: #182634">
                             <a href="profile" style="background-color: #182634"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-user"></i> <span>Profile </span>
                            </a>
                        </li>
                       <li style="background-color: #182634">
                            <a href="#" style="background-color: #182634">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-briefcase"></i> <span>Case </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="lawyers">Cases Handled</a></li>
                                <li><a href="casess">Manage Case</a></li>
                               </ul>
                        </li>
                        <li style="background-color: #182634">
                            <a href="/schedule/show" style="background-color: #182634">
                                <i class="main-icon fa fa-calendar"></i> <span>Schedules</span>
                            </a>
                        </li>  
</ul>
@stop