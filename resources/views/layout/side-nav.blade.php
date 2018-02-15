@section('side-nav')
<ul class="nav nav-list">
                        <li class="active"><!-- dashboard -->
                            <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/client/show">
                                <i class="main-icon fa fa-bar-chart-o"></i> <span>Request</span>
                            </a>
                        </li>
                       <li>
                            <a href="/Distribution">
                                <i class="main-icon fa fa-briefcase"></i> <span>Case Distribution</span>
                            </a>
                        </li>
                         <li class="submenu">
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-gears"></i> <span>Maintenance</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/position/show">Position</a></li>
                                <li><a href="/employees">Employees w</a></li>
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i> Client Info</a>
                                    <ul>
                                
                                <li><a href="/religions">Religion w </a></li>
                                <li><a href="/citizenships">Citizenship w</a></li>
                             <li><a href="/language/show">Language Spoken</a></li>
                                <li><a href="/education/show">Educational Attainment </a></li>
                                </li></ul>
                                
                               
                                                            
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i>Case Information</a><ul>
                              
                              <li><a href="/court/show">Court  </a></li>    
                             <li><a href="/courttype/show">Court type</a></li>
                             <li><a href="/casecategory/show">Case Category </a></li>    
                             <li><a href="/lawsuits">Case</a></li>
                             <li><a href="/caseinvolvement/show">Case Involvement </a></li>
                             <li><a href="#">Case Type w</a></li>
                             <li><a href="#">Case Status w</a></li>
                                

                                </li></ul>
                                <li><a href="#">Nature of Request w</a></li>
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