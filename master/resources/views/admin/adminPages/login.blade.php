<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="dashboard/css/pace.min.css" rel="stylesheet"/>
  <script src="dashboard/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="dashboard/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="dashboard/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="dashboard/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="dashboard/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="dashboard/css/app-style.css" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form action="{{route('login-auth')}}" method="get">
          @if (Session::has('success'))

            <div class="alert alert-success">{{Session::get('Success')}}</div>

          @endif
           @if (Session::has('fail'))

            <div class="alert alert-danger">{{Session::get('fail')}}</div>

          @endif
                @csrf

			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username" name="email" value='{{old('email')}}'>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
                  <span class ="text-danger">@error('email') {{$message}} @enderror</span>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
                  <span class ="text-danger">@error('password') {{$message}} @enderror</span>

			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />

			  </div>
			 </div>

			</div>
			 <button type="submit" class="btn btn-light btn-block">Sign In</button>

			</div>

			 </form>
		   </div>
		  </div>

	     </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>

      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>


     </div>
   </div>
  <!--end color switcher-->

	</div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="dashboard/js/jquery.min.js"></script>
  <script src="dashboard/js/popper.min.js"></script>
  <script src="dashboard/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="dashboard/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="dashboard/js/app-script.js"></script>

</body>
</html>
