<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="tables">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-2 left_col">
                <div class="nav-sidemenu">
                    <div class="navbar nav_logo">
                        <a href="#" class="site_title">
                            <i class="fa fa-paw"></i>
                            <span>Gentelella Alela!</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="nav_profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>John Doe</h2>
                        </div>
                    </div>
                    <div class="nav_mainmenu">
                        <div class="menu-list">
                            <h3>General</h3>
                            <ul class="nav side-menu panel-group" id="collapsed">
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-home">
                                        <i class="fa fa-home"></i> Home 
                                        <i class="down fa fa-chevron-down"></i></a>
                                    <ul class="nav child_menu collapse" id="nav-home">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                        <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-forms">
                                        <i class="fa fa-edit"></i>
                                        Forms
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-forms">
                                        <li><a href="#">General Form</a></li>
                                        <li><a href="#">Advanced Components</a></li>
                                        <li><a href="#">Form Validation</a></li>
                                        <li><a href="#">Form Wizard</a></li>
                                        <li><a href="#">Form Upload</a></li>
                                        <li><a href="#">Form Buttons</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ui">
                                        <i class="fa fa-desktop"></i> UI Elements 
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-ui">
                                        <li><a href="#">General Elements</a></li>
                                        <li><a href="#">Media Gallery</a></li>
                                        <li><a href="#">Typography</a></li>
                                        <li><a href="#">Icons</a></li>
                                        <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                        <li><a href="#">Widgets</a></li>
                                        <li><a href="../invoice/invoice.php">Invoice</a></li>
                                        <li><a href="#">Inbox</a></li>
                                        <li><a href="#">Calendar</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-tables">
                                        <i class="fa fa-table"></i> Tables
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-tables">
                                        <li><a href="tables.php">Tables</a></li>
                                        <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-data">
                                        <i class="fa fa-bar-chart-o"></i> Data Presentation
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-data">
                                        <li><a href="#">Chart JS</a></li>
                                        <li><a href="#">Chart JS2</a></li>
                                        <li><a href="#">Moris JS</a></li>
                                        <li><a href="#">ECharts</a></li>
                                        <li><a href="#">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-layouts">
                                        <i class="fa fa-clone"></i>Layouts 
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-layouts">
                                        <li><a href="#">Fixed Sidebar</a></li>
                                        <li><a href="#">Fixed Footer</a></li>
                                    </ul>
                                </li>
                                <h3 class="live-on">Live On</h3>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-pages">
                                        <i class="fa fa-bug"></i> Additional Pages 
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-pages">
                                        <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                        <li><a href="../projects/projects.php">Projects</a></li>
                                        <li><a href="../project_detail/project_detail.php">Project Detail</a></li>
                                        <li><a href="../contacts/contacts.php">Contacts</a></li>
                                        <li><a href="../profile/profile.php">Profile</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ex">
                                        <i class="fa fa-windows"></i> Extras
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-ex">
                                        <li><a href="#">403 Error</a></li>
                                        <li><a href="#">404 Error</a></li>
                                        <li><a href="#">500 Error</a></li>
                                        <li><a href="#">Plain Page</a></li>
                                        <li><a href="../login/login.php">Login Page</a></li>
                                        <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                    </ul>
                                </li>
                                <li class="panel panel-default">
                                    <a data-toggle="collapse" data-parent="#collapsed" href="#nav-multilevel">
                                        <i class="fa fa-sitemap"></i> Multilevel Menu
                                        <i class="down fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="nav child_menu collapse" id="nav-multilevel">
                                        <li>
                                            <a href="#level1_1">Level One</a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" href="#nav-levelOne">
                                                Level One<span class="fa fa-chevron-down"></span>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-levelOne">
                                                <li><a href="#">Level Two</a></li>
                                                <li><a href="#">Level Two</a></li>
                                                <li><a href="#">Level Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level One</a></li>
                                    </ul>
                                </li>                  
                                <li>
                                    <a href="#">
                                        <i class="fa fa-laptop"></i> Landing Page 
                                        <span class="label label-success pull-right">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>>

                        </div>
                    </div><!-- End Sidebar Menu -->
                    <div class="nav_footer hidden-small">
                        <a href="#">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="nav_response">
                    <div class="logo-res">
                        <a href="../dashboard2/index.php"><i class="fa fa-paw"></i></a>
                    </div>
                    <nav class="menu-res">
                        <ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-home"></i><h5>Home</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                    <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-edit"></i><h5>Form</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">General Form</a></li>
                                    <li><a href="#">Advanced Components</a></li>
                                    <li><a href="#">Form Validation</a></li>
                                    <li><a href="#">Form Wizard</a></li>
                                    <li><a href="#">Form Upload</a></li>
                                    <li><a href="#">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-laptop"></i><h5>UI Elements</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">General Elements</a></li>
                                    <li><a href="#">Media Gallery</a></li>
                                    <li><a href="#">Typography</a></li>
                                    <li><a href="#">Icons</a></li>
                                    <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                    <li><a href="#">Widgets</a></li>
                                    <li><a href="../invoice/invoice.php">Invoice</a></li>
                                    <li><a href="#">Inbox</a></li>
                                    <li><a href="#">Calendar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-table"></i><h5>Tables</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="tables.php">Tables</a></li>
                                    <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bar-chart-o"></i><h5>Data Present</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Chart JS</a></li>
                                    <li><a href="#">Chart JS2</a></li>
                                    <li><a href="#">Moris JS</a></li>
                                    <li><a href="#">Echarts</a></li>
                                    <li><a href="#">Other Charts</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-clone"></i><h5>Layouts</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Fixed Sidebar</a></li>
                                    <li><a href="#">Fixed Footer</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bug"></i><h5>Additional Pages</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                    <li><a href="../projects/projects.php">Projects</a></li>
                                    <li><a href="../project_detail/project_detail.php">Project Detail</a></li>                                    
                                    <li><a href="../contacts/contacts.php">Contacts</a></li>
                                    <li><a href="../profile/profile.php">Profile</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-windows"></i><h5>Extras</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">403 Error</a></li>
                                    <li><a href="#">404 Error</a></li>
                                    <li><a href="#">500 Error</a></li>                                    
                                    <li><a href="#">Plain Page</a></li>
                                    <li><a href="../login/login.php">Login Page</a></li>
                                    <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-sitemap"></i><h5>Mullevel Menu</h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Level One</a></li>
                                    <li><a href="#">Level One</a></li>
                                    <li><a href="#">Level One</a></li>    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    <i class="fa fa-laptop"></i><small>Landing page</small>
                                </a>
                                <span class="label label-success pull-right">Comming Soon</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-10 right_col">
                <div class="top-nav">
                    <div class="nav_menu">
                        <nav>
                            <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
                            <ul class="nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="images/img.jpg" alt="">John Doe
                                        <i class="fa fa-angle-down"></i>
                                    </a>


                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Settings</span>
                                                <span class="badge">50%</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Help</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Logout<i class="fa fa-sign-out"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
        </div>
    </div>
</div>