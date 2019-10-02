<!DOCTYPE html>
<html lang="en">
<head>
  <title>R E</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

  .navbar-custom {
    color: #FFFFFF;
    background-color: #000000;
    opacity: 0.9;
  }

  #navbar-menu {
    font-size: 15px;
  }

  .top-nav {
    padding: 0 0px;
  }

  .top-nav>li {
      display: inline-block;
      float: left;
  }

  .top-nav>li>a {
      padding-top: 15px;
      padding-bottom: 15px;
      line-height: 20px;
      color: #999;
  }

  .top-nav>li>a:hover,
  .top-nav>li>a:focus,
  .top-nav>.open>a,
  .top-nav>.open>a:hover,
  .top-nav>.open>a:focus {
      color: #fff;
      background-color: #000;
  }

  .top-nav>.open>.dropdown-menu {
      float: left;
      position: absolute;
      margin-top: 0;
      border: 1px solid rgba(0,0,0,.15);
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      background-color: #fff;
      -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
      box-shadow: 0 6px 12px rgba(0,0,0,.175);
  }

  .top-nav>.open>.dropdown-menu>li>a {
      white-space: normal;
  }

  ul.message-dropdown {
      padding: 0;
      max-height: 250px;
      overflow-x: hidden;
      overflow-y: auto;
  }

  li.message-preview {
      width: 275px;
      border-bottom: 1px solid rgba(0,0,0,.15);
  }

  li.message-preview>a {
      padding-top: 15px;
      padding-bottom: 15px;
  }

  li.message-footer {
      margin: 5px 0;
  }

  ul.alert-dropdown {
      width: 200px;
  }

  /* Side Navigation */

  @media(min-width:768px) {
      .side-nav {
          position: fixed;
          top: 51px;
          left: 225px;
          width: 225px;
          margin-left: -225px;
          border: none;
          border-radius: 0;
          overflow-y: auto;
          background-color: #000;
          bottom: 0;
          overflow-x: hidden;
          padding-bottom: 40px;
      }

      .side-nav>li>a {
          width: 225px;
      }

      .side-nav li a:hover,
      .side-nav li a:focus {
          outline: none;
          background-color: #999 !important;
      }
  }

  .side-nav>li>ul {
      padding: 0;
  }

  .side-nav>li>ul>li>a {
      display: block;
      padding: 10px 15px 10px 38px;
      text-decoration: none;
      color: #999;
  }

  .side-nav>li>ul>li>a:hover {
      color: #fff;
  }

</style>

</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">

    @if(Auth::guard('admin'))
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('/admin')}}"><strong>R E</strong></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-right top-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
              <li class="message-preview">
                <a href="#">
                  <div class="media">
                    <span class="pull-left">
                      <img class="media-object" src="" alt="">
                    </span>
                    <div class="media-body">
                      <h5 class="media-heading"><strong>John Smith</strong>
                      </h5>
                      <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                      <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="message-footer">
                <a href="#">Read All New Messages</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
              <li>
                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">View All</a>
              </li>
            </ul>
          </li>

          <li><a href="{{URL::to('/admin-logout')}}">
            <span style="color:#FFFFFF; font-weight: bold; padding-right: 20px;"><i class="fa fa-fw fa-user fa-lg"></i> Admin</span>
            <i class="fa fa-fw fa-power-off fa-lg"></i> Log Out</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
          <li class="active">
              <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
              <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
          </li>
          <li>
              <a href=""><i class="fa fa-fw fa-table"></i> Tables</a>
          </li>
          <li>
              <a href=""><i class="fa fa-fw fa-edit"></i> Forms</a>
          </li>
          <li>
              <a href=""><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
          </li>
          <li>
              <a href=""><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
          </li>
          <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
              <ul id="demo" class="collapse">
                  <li>
                      <a href="#">Dropdown Item</a>
                  </li>
                  <li>
                      <a href="#">Dropdown Item</a>
                  </li>
              </ul>
          </li>
      </ul>
    </div>
    @endif      

  </nav>

@yield('content')

</body>
</html>

