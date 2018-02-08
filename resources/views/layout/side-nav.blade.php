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
                       
                         <li class="submenu">
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-gears"></i> <span>Maintenance</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/position/register">Position</a></li>
                                <li><a href="/employees">Employees</a></li>
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i> Client Info</a>
                                    <ul>
                                
                                <li><a href="/religions">Religion </a></li>
                                <li><a href="/citizenships">Citizenship </a></li>
                             <li><a href="/language/register">Language Spoken</a></li>
                                <li><a href="/education/register">Educational Attainment </a></li>
                                </li></ul>
                                
                                <li><a href="/interviewees">Interviewee </a></li>
                                                          
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i>Case Information</a><ul>
                             <li><a href="/casecategory/register">Case Category </a></li>    
                             <li><a href="/lawsuits">Case</a></li>
                             <li><a href="/caseinvolvement/register">Case Involvement </a></li>
                             <li><a href="#">Case Type w</a></li>
                             <li><a href="#">Case Status w</a></li>
                                
                                </li></ul>
                                <li><a href="#">Nature of Request w</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-briefcase"></i> <span>Case</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="#">Case Raffle</a></li>
                                <li><a href="#">Case Transfer</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="main-icon fa fa-database"></i> <span>Queries</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="main-icon fa fa-print"></i> <span>Reports</span>
                            </a>
                        </li>
</ul>
@stop