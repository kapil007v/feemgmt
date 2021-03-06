<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 

  <link rel="shortcut icon" href="img/favicon.png">
  <title>MCRPV||Admin </title>
<script src="{{ url('front/js/jquery-1.8.3.min.js') }}"></script> 
  <!-- Bootstrap CSS -->
  <link href="{{ url('front/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ url('front/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ url('front/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ url('front/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('front/css/style-responsive.css') }}" rel="stylesheet" />
 
  <style type="text/css">
    #image-preview,#image-preview1,#image-preview2{
      width: 200px;
      height: 150px;
      position: relative;
      overflow: hidden;
      background-color: #ffffff;
      color: #ecf0f1;
      border: 2px solid gray;
    }
    #image-preview input ,#image-preview1 input,#image-preview2 input  {
      line-height: 200px;
      font-size: 200px;
      position: absolute;
      opacity: 0;
      z-index: 10;
      color: green;
    }
    #image-preview label,#image-preview1 label ,#image-preview2 label{
      position: absolute;
      z-index: 5;
      opacity: 0.8;
      cursor: pointer;
      background-color: #4cd964;
      width: 200px;
      height: 50px;
      font-size: 20px;
      line-height: 50px;
      text-transform: uppercase;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      text-align: center;
    }
     .error {
       color: red;
            }

      .error-box{
        position: fixed;
        right: 500px;
        display: none;
        top: 100px;
        background: #00002f;
        height: 100px;
        width: 250px;
        z-index: 10;
        color: #fff;
      }
     #err-msg{
        margin-top: 40px;
        text-align: center;
        font-size:  20px;
      }
      
      .sub-dropdown a:hover{
          color:aqua;
      }
      
      ul.sidebar-menu li ul.sub li {
    background: #f8f8f8;
         
   
}
         ul.sidebar-menu li ul.sub li a{
    
          color: #54667a;
   
}
   
      ul.sidebar-menu li ul.sub li a:hover{
  
          color: #3377ec;
   
}
  </style>
  <script type="text/javascript">
    function showMsg(type,msg,duration=1500){
      if(msg != "" || msg != null){
       $("#err-msg").html(msg);
      }
      $(".error-box").show()
      $(".error-box").animate({"opacity":1},1500);
      $(".error-box").animate({"opacity":0},duration);   
    }

    var APP_URL = "{{url('/')}}"; 
  </script>


</head>

<body>
  <div class="error-box">
    <center>
        <label id="err-msg">File is Uploading</label>
    <center>
  </div>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg hidden-print">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
     <!-- <a href="/" class="logo">MCRPV <span class="lite">Admin</span></a>-->
        <a href="/" class="logo"><img src="{{url('front/img/india.png')}}" height="60" width="60" ></a>
      <!--logo end-->

       

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
        {{--notification start  --}}
          <!-- task notificatoin start -->
          {{-- <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="{{ url('/img/avatar-mini2.jpg') }}"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li> --}}
          <!-- alert notification end-->
          <!-- user login dropdown start-->
        {{-- notification end --}}
@auth
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                 <img alt="" src="{{ url('front/img/user.png') }}"> 
                            </span>
                            <span class="username">{{Auth::user()->name}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              {{-- <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li> --}}
              <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
              </li>
              <li>
              </li>
            </ul>
          </li>


       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
      </form>
@endauth
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside class="hidden-print">
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li >
            <a class="active" href="/">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="{{route('institute.index') }} " class="">
                          <i class="fa fa-cog"></i>
                          <span>Institute</span>
                          
                      </a>
            
          </li>
          <li class="sub-menu">
            <a href="{{ route('courses.index') }}" class="">
                          <i class="icon_documents_alt"></i>
                          <span> Course</span>
                         
                      </a>
            <ul class="sub">
              {{-- <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li> --}}
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-edit"></i>
                          <span>Enquiry</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li class="sub-dropdown" ><a  href="{{route('enquiry.index') }} ">New Enquiry</a></li>
              <li class="sub-dropdown"><a  href=" {{ route('enquiry.create') }} ">View Enquiry</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-university"></i>
                          <span>Admission</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="sub-dropdown" href="{{ route('admission.index') }}">New Admission</a></li>
              <li><a class="sub-dropdown" href="{{ route('admission.create') }}">Student List</a></li>
              {{-- <li><a class="" href="grids.html">Grids</a></li> --}}
            </ul>
          </li>
        {{--   <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>

                      </a>

          </li> --}}

          <li >
            <a href="{{ route('feesmaster.index') }}" class="">
                          <i class="fa fa-rupee"></i>
                          <span>Fees Master</span>
                      </a>
          </li>

          <li >
            <a href="{{ route('createuser.index') }}" class="">
                          <i class="fa fa-user"></i>
                          <span>Users</span>

                      </a>
          </li>


          <li >
            <a href="{{ route('report.index') }}" class="">
                          <i class="fa fa-user"></i>
                          <span>Reports</span>

                      </a>
          </li>

          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
   @yield('body') 




<!-- javascripts -->
  
  <script src="{{ url('front/js/jquery-ui-1.10.4.min.js') }}"></script>
  
  <script type="text/javascript" src="{{ url('front/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ url('front/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ url('front/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  
  <!-- jQuery full calendar -->
    <!--script for this page only-->
    
    <script src="{{ url('front/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ url('front/js/jquery.customSelect.min.js') }}"></script>
    

    <!--custome script for all page-->
    <script src="{{ url('front/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script>
      
     
      
      </script>
    <script src="{{ url('front/js/jquery.slimscroll.min.js') }}"></script>
@extends('layouts.footer')


</section>
</body>
</html>