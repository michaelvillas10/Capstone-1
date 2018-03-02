@section('side-nav')
<ul class="nav nav-list">
                        <li class="active"><!-- dashboard -->
                            <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-folder"></i> <span>Request </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/client/show">New Request</a></li>
                                <li><a href="/approve/show">Approved Requests</a></li>
                               </ul>
                        </li>
                       <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-briefcase"></i> <span>Case </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/lawyers">Lawyers</a></li>
                                <li><a href="/casetbh/show">Manage Case</a></li>
                               </ul>
                        </li>
                         <li class="submenu">
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-gears"></i> <span>Maintenance</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/position/show">Position</a></li>
                                <li><a href="/employee/show">Employees </a></li>
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i> Client Info</a>
                                    <ul>
                                
                                <li><a href="/religion/show">Religion  </a></li>
                                <li><a href="/citizenship/show">Citizenship</a></li>
                             <li><a href="/language/show">Language Spoken</a></li>
                                <li><a href="/education/show">Educational Attainment </a></li>
                                </li></ul>
                                
                               
                                                            
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i>Case Information</a><ul>
                              
                              <li><a href="/court/show">Court  </a></li>    
                             <li><a href="/courttype/show">Court type</a></li>
                             <li><a href="/casecategory/show">Case Category </a></li>    
                             <li><a href="/lawsuit/show">Case</a></li>
                             <li><a href="/caseinvolvement/show">Case Involvement </a></li>
                             <li><a href="/casetype/show">Case Type </a></li>
                             <li><a href="/casestatus/show">Case Status </a></li>
                                

                                </li></ul>
                                <li><a href="#">Nature of Request </a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="/schedule/show">
                                <i class="main-icon fa fa-calendar"></i> <span>Schedules</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="main-icon fa fa-database"></i> <span>Queries</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="main-icon fa fa-print"></i> <span>Reports</span>
                            </a>
                        </li>
</ul>
@stop