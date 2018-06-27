<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Beranda-KONI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/facebook.css" rel="stylesheet">
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <!--
          The codes are free, but we require linking to our web site.
          Why to Link?
          A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google!
          Where to Put the Link?
          home, about, credits... or in a good page that you want
          THANK YOU MY FRIEND!
        -->
        <title>Profil-KONI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/facebook.css" rel="stylesheet">
        <style type="text/css">
          body{margin-top:20px;}

    .profile {
      width: 100%;
      position: relative;
      background: #FFF;
      border: 1px solid #D5D5D5;
      padding-bottom: 5px;
      margin-bottom: 20px;
    }

    .profile .image {
      display: block;
      position: relative;
      z-index: 1;
      overflow: hidden;
      text-align: center;
      border: 5px solid #FFF;
    }

    .profile .user {
      position: relative;
      padding: 0px 5px 5px;
    }

    .profile .user .avatar {
      position: absolute;
      left: 20px;
      top: -85px;
      z-index: 2;
    }

    .profile .user h2 {
      font-size: 16px;
      line-height: 20px;
      display: block;
      float: left;
      margin: 4px 0px 0px 135px;
      font-weight: bold;
    }

    .profile .user .actions {
      float: right;
    }

    .profile .user .actions .btn {
      margin-bottom: 0px;
    }

    .profile .info {
      float: left;
      margin-left: 20px;
    }

    .img-profile{
        height:100px;
        width:100px;
    }

    .img-cover{
        width:800px;
        height:300px;
    }

    @media {
      .btn-responsive {
        padding:2px 4px;
        font-size:80%;
        line-height: 1;
        border-radius:3px;
      }
    }

    @media {
      .btn-responsive {
        padding:4px 9px;
        font-size:90%;
        line-height: 1.2;
      }
    }
        </style>
    </head>

    <body>

        <div class="wrapper">
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">

					<!-- sidebar -->
					<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

						<ul class="nav">
							<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
						</ul>

						<ul class="nav hidden-xs" id="lg-menu">
              <h1> Kategori </h1>
							<li class="active"><a href="#featured"><i class="glyphicon glyphicon-leaf"></i> pertumbuhan</a></li>
							<li><a href="#stories"><i class="glyphicon glyphicon-leaf"></i> penyakit</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-leaf"></i> perawatan</a></li>
						</ul>
						<ul class="list-unstyled hidden-xs" id="sidebar-footer">
							<li>
							  <a href="http://usebootstrap.com/theme/facebook"><h3>KONI</h3> <i class="glyphicon glyphicon-heart-empty"></i> Konsultasi Tani</a>
							</li>
						</ul>

						<!-- tiny only nav-->
					  <ul class="nav visible-xs" id="xs-menu">
							<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
							<li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
							<li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
							<li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
						</ul>

					</div>

					<!-- /sidebar -->

					<!-- main right col -->
					<div class="column col-sm-10 col-xs-11" id="main">

						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static-top">
							<div class="navbar-header">
							  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a href="{{ route('facebook') }}" class="navbar-brand logo">K</a>
							</div>
							<nav class="collapse navbar-collapse" role="navigation">
							<form class="navbar-form navbar-left">
								<div class="input-group input-group-sm" style="max-width:360px;">
								  <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
								  <div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								  </div>
								</div>
							</form>
							<ul class="nav navbar-nav">
							  <li>
								<a href="{{ route('facebook') }}"><i class="glyphicon glyphicon-home"></i> Home </a>
							  </li>
                <li>
								<a href="{{ route('profil') }}"><i class="glyphicon glyphicon-user"></i> Profile </a>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }}</a>
								<ul class="dropdown-menu">
								  <li>
									<a href="{{ route('logout') }}"
										 onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
									</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form
									</li>
								</ul>
							  </li>
							</ul>
							</nav>
						</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
