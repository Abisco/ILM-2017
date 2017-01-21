<nav id="main-header" class="navbar navbar-default navbar-fixed-top" role="navigation">
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
        <a href="search-course.php"><img src="img/MainLogo.png" width="130px"/></a>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beliefs</a></li>
            <li><a href="#">Quran & Hadiths</a></li>
            <li><a href="#">Laws (Fiqh)</a></li>
            <li><a href="#">Philosophy</a></li>
            <li><a href="#">History</a></li>
          </ul>
        </li>
      </ul>
      <div class="col-sm-3 col-md-3">
      <form class="navbar-form" role="search">
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
      </div>
      </form>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><div class="btn-nav"><a class="btn btn-small navbar-btn" href="instructor.php">Become an Instructor</a></div></li>
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
                  <form class="form" action="/profile.php" id="login-nav">
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
