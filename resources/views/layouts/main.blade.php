<!DOCTYPE html>

<html>
    <head>
        <title>Mobile Money Analytics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {!!Html::style('css/bootstrap.min.css')!!}
          {!!Html::style('fontawesome/css/font-awesome.min.css')!!}
            {!!Html::style('css/metisMenu.css')!!}
        {!!Html::style('css/morris-0.4.3.min.css')!!}
      {!!Html::style('css/style.css')!!}
       {!!Html::style('css/parsley.css')!!}
        {!!Html::script('js/modernizr.js')!!}
    </head>
    <body class="fixed-left">

        <div id="wrapper">

            <!--top bar-->
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center">

                    </div>
                </div>
                <div class="pull-left menu-toggle">
                    <i class="fa fa-bars"></i>
                </div>
                <form class="pull-left app-search hidden-xs">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <i class="fa fa-search"></i>
                </form>
                <ul class="nav navbar-nav  top-right-nav hidden-xs">
                    <li>

                        <span id="para2"></span>
                        <span id="para3"></span>
                        <span id="para1"></span>
                    </li>
                    <li class="dropdown  hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>
                        <ul class="dropdown-menu dropdown-lg">
                            <li><a>Notifications (3)</a></li>
                            <li class="clearfix"><a href="#"><i class="fa fa-twitter"></i> <div class="drop-content">
                                        <h4>New Follower</h4>
                                        <span>3 New Follower</span>
                                    </div></a>
                            </li>
                            <li class="clearfix"><a href="#"><i class="fa fa-envelope-o"></i> <div class="drop-content">
                                        <h4>New Emails</h4>
                                        <span>3 New Emails</span>
                                    </div></a>
                            </li>
                            <li class="clearfix"><a href="#"><i class="fa fa-tasks"></i> <div class="drop-content">
                                        <h4>Pending tasks</h4>
                                        <span>you have 3 pending tasks</span>
                                    </div></a>
                            </li>
                            <li class="text-right"><a href="#">View All Notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown profile-link hidden-xs">
                        <div class="clearfix">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" alt="" class="pull-left">
                                <span>Angila Deo <br><em>Admin</em></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class=" hidden-xs"><a href="#" id="sidebar-toggle"><i class="fa fa-comments-o"></i></a></li>
                </ul>
            </div>
            <!--end top bar-->

            <!--left menu start-->
            <div class="side-menu left" id="side-menu">

                <ul class="metismenu clearfix" id="menu">
                    <li class="profile-menu visible-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" alt="" class="pull-left">
                            <span>Angila Deo <br><em>Admin</em></span>
                        </a>
                        <ul class="dropdown-menu profile-drop">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="/"><i class="fa fa-home"></i>  <span>Dashboard</span></a></li>

                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> <span>Mailbox </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span>Agents</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="#">AgentsCompliance</a></li>
                            <li><a href="#">AgentsCompliance</a></li>
                            <li><a href="#">Agents Concentrations</a></li>
                            <li><a href="#">Agents Visit History</a></li>
                            <li><a href="#">Questionnaire</a></li>
                              <li><a href="{{route('questions.index')}}"</a>Agents Visits</li>
                        </ul>
                    </li>

              </ul>
            </div>
            <!--left menu end-->
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">

                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                        <strong>Success:</strong> {{Session::get('success')}}

                        </div>
                      @endif
                      @if($errors->has())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                    <div>{{ $error }}</div>
                  </div>
                   @endforeach
                   @endif


                      @yield('content')


                    </div><!--content-->
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
        <div class="sidebar">
            <div class='nicescroll'>
                <h4>Quick Support</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows='5' placeholder="Name"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class=" btn btn-theme btn-lg">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <span>Copyright &copy; 2016. Pink-Desh.</span>
        </div>
        <!-- Plugins  -->
        {!!Html::script('js/jquery.min.js')!!}
      {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/jquery.slimscroll.js')!!}
      {!!Html::script('js/metisMenu.js')!!}
      {!!Html::script('js/moment.js')!!}
        {!!Html::script('js/jquery.sparkline.min.js')!!}
      {!!Html::script('js/jquery.flot.js')!!}
        {!!Html::script('js/jquery.flot.time.js')!!}
      {!!Html::script('js/jquery.flot.tooltip.min.js')!!}
        {!!Html::script('js/jquery.flot.resize.js')!!}
      {!!Html::script('js/jquery.flot.pie.js')!!}
      {!!Html::script('js/jquery.flot.selection.js')!!}
      {!!Html::script('js/jquery.flot.stack.js')!!}
        {!!Html::script('js/jquery.flot.crosshair.js')!!}
        {!!Html::script('js/raphael-2.1.0.min.js')!!}
      {!!Html::script('js/morris.js')!!}
      {!!Html::script('js/Chart.min.js')!!}
        {!!Html::script('js/core.js')!!}
        {!!Html::script('js/mediaquery.js')!!}
      {!!Html::script('js/equalize.js')!!}
        {!!Html::script('js/app.js')!!}
         {!!Html::script('js/parsley.js')!!}

        <!--page js-->

    </body>
</html>
