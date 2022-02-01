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
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        {{env('WEB_TITLE')}}
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js">
    </script>
    <script src="/js/respond.min.js">
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
            实训基地
            <span>
            管理系统
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
                  1
                </span>
                    </a>

                    <ul class="dropdown-menu extended tasks-bar">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                您有6个订单处理中
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

                        <li class="external">
                            <a href="#">
                                查看所有任务
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
                  1
                </span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                您有1条新信息
                            </p>
                        </li>
                        <li>
                            <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="/img/avatar-mini4.jpg">
                    </span>
                                <span class="subject">
                      <span class="from">
                        毛小文y

                      </span>
                      <span class="time">
                        Just now
                      </span>
                    </span>
                                <span class="message">
                      欢迎使用该系统。
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                查看所有信息
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
                        <span class="badge bg-warning">1</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li class="notify-arrow notify-arrow-blue">
                        </li>
                        <li>
                            <p class="blue">
                                您有1个新通知。
                            </p>
                        </li>
                        <li>
                            <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                                订单审核通过
                                <span class="small italic">
                      34 mins
                    </span>
                            </a>
                        </li>



                        <li>
                            <a href="#">
                                查看所有通知
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
                {{--                <li>--}}
                {{--                    <input type="text" class="form-control search" placeholder="Search">--}}
                {{--                </li>--}}
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img class="portrait" alt="" src="/img/boy.png">
                        <span class="username">
                   @php
                       echo \Illuminate\Support\Facades\DB::table('users')
                       ->where('username',\Illuminate\Support\Facades\Session::get('username'))
                       ->value('name');
                   @endphp
                </span>
                        <b class="caret">
                        </b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up">
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog">
                                </i>
                                账号设置
                            </a>
                        </li>

                        <li>
                            <a href="/admin/out">
                                <i class="fa fa-key">
                                </i>
                                退出登录
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
                    <a href="/admin" class="@if('0'==$id)active
                                @endif">
                        <i class="fa fa-dashboard">
                        </i>
                        <span>
                  {{$mlist[0][0]}}
                </span>
                    </a>
                </li>

                @foreach($marks['list'] as $key=>$value)
                    <li class="sub-menu">
                        <a href="javascript:;" class="@if(in_array($id,$value))
                            active
                        @endif">
                            <i class="fa {{$value[1]}}"></i>
                            <span>{{$value[0]}}</span>
                            @if($value[0]=='仓库')
                                <span class="label label-danger span-sidebar">2</span>
                            @endif

                        </a>
                        <ul class="sub">
                                @foreach($value as $key=>$value)
                                    @if($key>1)
                                    <li class="@if($id==$value)
                                        active
@endif">
                                    <a href="/admin/{{$value}}" target="_self" >
                                        {{$tlist[$value]}}
                                        @if($value==2)
                                            <span class="label label-danger span-sidebar">0</span>
                                        @endif
                                    </a>
                                    </li>
                                    @endif
                                @endforeach


                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
    <!-- END SIDEBAR -->
    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content">


        @include('admin.'.$mlist[$id][1])


    </div>
    <!-- END MAIN CONTENT -->
    <!-- BEGIN FOOTER -->
    <footer class="site-footer">
        <div class="text-center">
            2022 &copy; 实训基地管理系统 by
            <a href="#" target="_self">
                毛小文
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
<script src="/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<script src="/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
<script src="/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
<script src="/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
<script src="/js/respond.min.js" ></script><!-- RESPOND JS -->
<script src="/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
<script src="/js/common-scripts.js"></script><!-- BASIC COMMON JS -->
<script src="/js/count.js"></script><!-- COUNT JS -->
<!--Morris-->
{{--<script src="/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->--}}
{{--<script src="/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->--}}
{{--<script src="/js/chart.js" ></script><!-- CHART JS -->--}}
<!--Calendar-->
<script src="/js/calendar/clndr.js"></script><!-- CALENDER JS -->
<script src="/js/calendar/evnt.calendar.init.js"></script><!-- CALENDER EVENT JS -->
<script src="/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
<script src="/js/underscore-min.js"></script><!-- UNDERSCORE JS -->
<script src="/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->
<script type="text/javascript">
    //knob
    $(".knob").knob();

</script>
@yield('script','')
<!-- END JS -->
</body>
</html>


