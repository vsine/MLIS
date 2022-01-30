<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        {{env('WEB_TITLE')}}
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
    <!-- END STYLESHEET-->
</head>
<body>
<!-- BEGIN SECTION -->
<section id="container">
    <!-- BEGIN HEADER -->
    <header class="header white-bg">
        <!-- SIDEBAR TOGGLE BUTTON -->
        <div class="sidebar-toggle-box">
            <div  data-placement="right" class="fa fa-bars tooltips">
            </div>
        </div>
        <!-- SIDEBAR TOGGLE BUTTON  END-->
        <a href="index.html" class="logo">
            Olive
            <span>
            Admin
          </span>
        </a>
        <!-- START HEADER  NAV -->

        <nav class="nav notify-row" id="top_menu">

            <ul class="nav top-menu">
                <!-- START NOTIFY TASK BAR -->

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks">
                        </i>
                        <span class="badge bg-success">
                  6
                </span>
                    </a>

                    <ul class="dropdown-menu extended tasks-bar">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                You have 6 pending tasks
                            </p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Dashboard v1.3
                                    </div>
                                    <div class="percent">
                                        40%
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success set-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          40% Complete (success)
                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Database Update
                                    </div>
                                    <div class="percent">
                                        60%
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning set-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          60% Complete (warning)
                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Iphone Development
                                    </div>
                                    <div class="percent">
                                        87%
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info set-87" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          87% Complete
                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Mobile App
                                    </div>
                                    <div class="percent">
                                        33%
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger set-33" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          33% Complete (danger)
                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">
                                        Dashboard v1.3
                                    </div>
                                    <div class="percent">
                                        45%
                                    </div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar set-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          45% Complete
                        </span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">
                                See All Tasks
                            </a>
                        </li>
                    </ul>

                </li>
                <!-- END NOTIFY TASK BAR -->

                <!-- START NOTIFY INBOX BAR -->

                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o">
                        </i>
                        <span class="badge bg-important">
                  5
                </span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                You have 5 new messages
                            </p>
                        </li>
                        <li>
                            <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini.jpg">
                    </span>
                                <span class="subject">
                      <span class="from">
                        Chintan Pandya
                      </span>
                      <span class="time">
                        Just now
                      </span>
                    </span>
                                <span class="message">
                      Hello, this is an example msg.
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini2.jpg">
                    </span>
                                <span class="subject">
                      <span class="from">
                        Parth Jani
                      </span>
                      <span class="time">
                        10 mins
                      </span>
                    </span>
                                <span class="message">
                      Hi, Bro how are you ?
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini3.jpg">
                    </span>
                                <span class="subject">
                      <span class="from">
                        Jay Bardolia
                      </span>
                      <span class="time">
                        3 hrs
                      </span>
                    </span>
                                <span class="message">
                      This is awesome dashboard.
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini4.jpg">
                    </span>
                                <span class="subject">
                      <span class="from">
                        Pruthvi Bardolia
                      </span>
                      <span class="time">
                        Just now
                      </span>
                    </span>
                                <span class="message">
                      Hello, this is metrolab
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See all messages
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFY INBOX BAR -->

                <!-- START NOTIFY NOTIFICATION BAR -->

                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-bell-o">
                        </i>
                        <span class="badge bg-warning">
                  7
                </span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                You have 7 new notifications
                            </p>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                                Server #3 overloaded.
                                <span class="small italic">
                      34 mins
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-warning">
                      <i class="fa fa-bell">
                      </i>
                    </span>
                                Server #10 not respoding.
                                <span class="small italic">
                      1 Hours
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                                Database overloaded 24%.
                                <span class="small italic">
                      4 hrs
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-success">
                      <i class="fa fa-plus">
                      </i>
                    </span>
                                New user registered.
                                <span class="small italic">
                      Just now
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-primary">
                      <i class="fa fa-bullhorn">
                      </i>
                    </span>
                                Application error.
                                <span class="small italic">
                      10 mins
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                See all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFY NOTIFICATION BAR -->

            </ul>


        </nav>
        <!-- END HEADER NAV -->

        <!-- START USER LOGIN DROPDOWN  -->

        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username">
                  Pruthvi
                </span>
                        <b class="caret">
                        </b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up">
                        </li>
                        <li>
                            <a href="#">
                                <i class=" fa fa-suitcase">
                                </i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog">
                                </i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bell-o">
                                </i>
                                Notification
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-key">
                                </i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END USER LOGIN DROPDOWN  -->
    </header>
    <!-- END HEADER -->
    <!-- BEGIN SIDEBAR -->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <ul class="sidebar-menu" id="nav-accordion">
                <li >
                    <a href="index.html" class="active">
                        <i class="fa fa-dashboard">
                        </i>
                        <span>
                  Dashboard
                </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop">
                        </i>
                        <span>
                  Layouts
                </span>
                        <span class="label label-success span-sidebar">
                  4
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="boxed_page.html">
                                Boxed Page
                            </a>
                        </li>
                        <li>
                            <a href="horizontal_menu.html">
                                Horizontal Menubar
                            </a>
                        </li>
                        <li>
                            <a href="language_switch_bar.html">
                                Language Bar
                            </a>
                        </li>
                        <li>
                            <a href="email_template.html" target="_blank">
                                Email Templates
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book">
                        </i>
                        <span>
                  UI Elements
                </span>
                        <span class="label label-info span-sidebar">
                  7
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="general.html">
                                General
                            </a>
                        </li>
                        <li>
                            <a href="buttons.html">
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="widget.html">
                                Widget
                            </a>
                        </li>
                        <li>
                            <a href="slider.html">
                                Range Slider
                            </a>
                        </li>
                        <li>
                            <a href="nestable.html">
                                Nestable List
                            </a>
                        </li>
                        <li>
                            <a href="tree.html">
                                Tree View List
                            </a>
                        </li>
                        <li>
                            <a href="font_awesome.html">
                                Font Awesome Icon
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs">
                        </i>
                        <span>
                  Components
                </span>
                        <span class="label label-primary span-sidebar">
                  5
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="grids.html">
                                Grids
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                Calendar
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="todo_list.html">
                                Todo List
                            </a>
                        </li>
                        <li>
                            <a href="draggable_portlet.html">
                                Draggable Portlets
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks">
                        </i>
                        <span>
                  Form Stuff
                </span>
                        <span class="label label-info span-sidebar">
                  7
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="form_component.html">
                                Form Components
                            </a>
                        </li>
                        <li>
                            <a href="advanced_form_components.html">
                                Advanced Components
                            </a>
                        </li>
                        <li>
                            <a href="form_wizard.html">
                                Form Wizards
                            </a>
                        </li>
                        <li>
                            <a href="form_validation.html">
                                Form Validation
                            </a>
                        </li>
                        <li>
                            <a href="dropzone.html">
                                Dropzone File Upload
                            </a>
                        </li>
                        <li>
                            <a href="inline_editor.html">
                                Inline Editor
                            </a>
                        </li>
                        <li>
                            <a href="file_upload.html">
                                Multiple File Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th">
                        </i>
                        <span>
                  Data Tables
                </span>
                        <span class="label label-inverse span-sidebar">
                  5
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="basic_table.html">
                                Basic Table
                            </a>
                        </li>
                        <li>
                            <a href="responsive_table.html">
                                Responsive Table
                            </a>
                        </li>
                        <li>
                            <a href="dynamic_table.html">
                                Dynamic Table
                            </a>
                        </li>
                        <li>
                            <a href="advanced_table.html">
                                Advanced Table
                            </a>
                        </li>
                        <li>
                            <a href="editable_table.html">
                                Editable Table
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-envelope">
                        </i>
                        <span>
                  Mail
                </span>
                        <span class="label label-danger span-sidebar">
                  2
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="inbox.html">
                                Inbox
                            </a>
                        </li>
                        <li>
                            <a href="inbox_details.html">
                                Mail Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o">
                        </i>
                        <span>
                  Charts
                </span>
                        <span class="label label-warning span-sidebar">
                  4
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="morris.html">
                                Morris Chart
                            </a>
                        </li>
                        <li>
                            <a href="chartjs.html">
                                Chartjs Chart
                            </a>
                        </li>
                        <li>
                            <a href="flot_chart.html">
                                Flot Charts
                            </a>
                        </li>
                        <li>
                            <a href="xchart.html">
                                xChart
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart">
                        </i>
                        <span>
                  Product
                </span>
                        <span class="label label-success span-sidebar">
                  2
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="product_list.html">
                                List View
                            </a>
                        </li>
                        <li>
                            <a href="product_details.html">
                                Details View
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="google_maps.html">
                        <i class="fa fa-map-marker">
                        </i>
                        <span>
                  Google Maps
                </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-glass">
                        </i>
                        <span>
                  Extra Pages
                </span>
                        <span class="label label-primary span-sidebar">
                  10
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="blank.html">
                                Blank Page
                            </a>
                        </li>
                        <li>
                            <a href="lock_screen.html">
                                Lock Screen
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="invoice.html">
                                Invoice
                            </a>
                        </li>
                        <li>
                            <a href="search_result.html">
                                Search Result
                            </a>
                        </li>
                        <li>
                            <a href="pricing_table.html">
                                Pricing Table
                            </a>
                        </li>
                        <li>
                            <a href="faq.html">
                                FAQ
                            </a>
                        </li>
                        <li class="active">
                            <a href="fb_wall.html">
                                Timeline
                            </a>
                        </li>
                        <li>
                            <a href="404.html">
                                404 Error
                            </a>
                        </li>
                        <li>
                            <a href="500.html">
                                500 Error
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user">
                        </i>
                        <span>
                  Login Page
                </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-sitemap">
                        </i>
                        <span>
                  Multi level Menu
                </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="javascript:;">
                                Menu Item 1
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="boxed_page.html">
                                Menu Item 2
                                <span class="label label-primary">
                      1
                    </span>
                            </a>
                            <ul class="sub">
                                <li>
                                    <a href="javascript:;">
                                        Item 2.1
                                    </a>
                                </li>
                                <li class="sub-menu">
                                    <a href="javascript:;">
                                        Menu Item 3
                                        <span class="label label-primary">
                          3
                        </span>
                                    </a>
                                    <ul class="sub">
                                        <li>
                                            <a href="javascript:;">
                                                Item 3.1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Item 3.2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Item 3.2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!-- END SIDEBAR -->
    <!-- BEGIN MAIN CONTENT -->


    <div id="main-content">
        <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
            <!-- BEGIN ROW  -->
            <div class="row state-overview">

            </div>
            <!-- END ROW  -->
            <div id="morris">
                <!-- END ROW  -->
            </div>
            <!-- BEGIN ROW  -->
            <div class="row">

            </div>
            <!-- END ROW  -->
        </section>
        <!-- END WRAPPER  -->
    </div>
    <!-- END MAIN CONTENT -->
    <!-- BEGIN FOOTER -->
    <footer class="site-footer">
        <div class="text-center">
            2013 &copy; Olive Admin by
            <a href="" target="_blank">
                Olive Enterprise
            </a>
            <a href="#top" class="go-top">
                <i class="fa fa-angle-up">
                </i>
            </a>
        </div>
    </footer>
    <!-- END  FOOTER -->
</section>
<!-- END SECTION -->
<!-- BEGIN JS -->
<script src="js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
<script src="js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
<script src="js/respond.min.js" ></script><!-- RESPOND JS -->
<script src="js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
<script src="js/common-scripts.js"></script><!-- BASIC COMMON JS -->
<script src="js/count.js"></script><!-- COUNT JS -->
<!--Morris-->
<script src="assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
<script src="assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
<script src="js/chart.js" ></script><!-- CHART JS -->
<!--Calendar-->
<script src="js/calendar/clndr.js"></script><!-- CALENDER JS -->
<script src="js/calendar/evnt.calendar.init.js"></script><!-- CALENDER EVENT JS -->
<script src="js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
<script src="js/underscore-min.js"></script><!-- UNDERSCORE JS -->
<script src="assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->
<script >
    //knob
    $(".knob").knob();

</script>
<!-- END JS -->
</body>
</html>


