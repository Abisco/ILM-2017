<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/instructor.css" media="screen" title="no title" charset="utf-8">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <img src="img/MainLogo.png"  href="search-course.html" width="130px"/>
            <li><a href="#"></a></li>

          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><div class="btn-nav"><a class="btn btn-small navbar-btn" href="instructor.html">Become an Instructor</a></div></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
            			<ul id="login-dp" class="dropdown-menu">
            				<li>
            					 <div class="row">
            							<div class="col-md-12">
            								Login via
            								<div class="social-buttons">
            									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
            									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
            								</div>
                                            or
            								 <form class="form" action="profile.html" id="login-nav">
            										<div class="form-group">
            											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
            											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
            										</div>
            										<div class="form-group">
            											 <label class="sr-only" for="exampleInputPassword2">Password</label>
            											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
            										</div>
            										<div class="form-group">
            											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            										</div>
            										<div class="checkbox">
            											 <label>
            											 <input type="checkbox"> keep me logged-in
            											 </label>
            										</div>
            								 </form>
            							</div>
            							<div class="bottom text-center">
            								New here ? <a href="#"><b>Join Us</b></a>
            							</div>
            					 </div>
            				</li>
            			</ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
    	<div class="row">
        <img src="img/Test-info.jpg" id="bg">
    	</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>