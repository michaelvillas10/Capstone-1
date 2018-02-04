@section('side-nav')
<ul class="nav nav-list">
                        <li class="active"><!-- dashboard -->
                            <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/clients">
                                <i class="main-icon fa fa-bar-chart-o"></i> <span>Request</span>
                            </a>
                        </li>
                       
                         <li class="submenu">
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-gears"></i> <span>Maintenance</span>
                            </a>
                            <ul><!-- submenus -->
                                 <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i> Client Info</a>
                                    <ul>
                                <li><a href="clients">Client Table</a></li>
                                <li><a href="religions">Religion Table</a></li>
                                <li><a href="citizenships">Citizenship Table</a></li>
                                <li><a href="/position/register">Position Table</a></li>
                                <li><a href="/language/register">Language Spoken Table</a></li>
                                <li><a href="/education/register">Educational Attainment Table</a></li>
                                </li></ul>
                                
                                <li><a href="interviewees">Interviewee Table</a></li>
                                <li><a href="lawyer_t">Lawyer Table</a></li>                               
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i>Case Information</a><ul>
                                <li><a href="lawsuits">Case Table</a></li>
                                <li><a href="/casecategory/register">Case Category Table</a></li>
                                <li><a href="/caseinvolvement/register">Case Involvement Table</a></li>
                                <li><a href="clients">Nature of Request</a></li>
                                </li></ul>
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