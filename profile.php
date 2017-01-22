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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Navbar -->
    <?php include('templates/header-loggedin.php'); ?>
    <div class="container">
    	<div class="row">
            <div class="col-md-3">
              <div class="profile-header-container">
                  <div class="profile-header-img">
                      <img class="img-circle" src="img/ProfilePicture.png" width="150px" />
                      <!-- badge -->
                  </div>
              </div>
            </div>
            <div>
              <h1> Shums Kassam</h1>
              <div <div class="col-m-6">

                <h4>
                  I'm a smart and awesome guy who loves learning about Islam! My favourite pass times are reading, learning, coding and long walks by the beach!
                </h4>
              </div>
            </div>
    	</div>
      <div class="row">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#tab-01" aria-controls="tab-01" role="tab" data-toggle="tab"> Student </a></a></li>
          <li role="presentation"><a href="#tab-02" aria-controls="tab-02" role="tab" data-toggle="tab">Teacher</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab-01">
            <div class="container">
                <div class="row">
            		    <div class="well">
                    <h1 class="text-center">Your Current Courses</h1>
                    <div class="list-group">
                      <a href="history-of-kabaa.php" class="list-group-item" id="course-profile">
                            <div class="media col-md-3">
                                <figure class="pull-left">
                                    <img class="media-object img-rounded img-responsive"  src="img/CoursePics/04.png" alt="placehold.it/350x250" >
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <h4 class="list-group-item-heading"> Life of Prophet Noah (Nuh) </h4>
                                <p class="list-group-item-text"> A course on the Islamic Perspective of Prophet Noah
                                </p>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="col-s-2">
                                  <button type="button" class="btn btn-primary btn-lg btn-block">Continue Course</button>
                                </div>
                                <div class="col-s-1">
                                    <img src="img/Mailbox.png" id="mail" />
                                </div>

                                <div class="stars">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </div>
                                <p> Average 4.9 <small> / </small> 5 </p>
                            </div>
                            <div class="col-md-9 text-center">
                              <p>
                                You have 3 hours and 12 minutes remaining in this course of 3 hours and 22 minutes
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                                  5% Completed
                                </div>
                                <div style="width: 8px; height: 20px; position: absolute; background: red; right: 40%;" title="Hasanain is 60% done!">
                                </div>
                              </div>
                            </div>
                      </a>
                      <a href="#" class="list-group-item" id="course-profile">
                            <div class="media col-md-3">
                                <figure class="pull-left">
                                    <img class="media-object img-rounded img-responsive" src="img/CoursePics/02.png" alt="placehold.it/350x250" >
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <h4 class="list-group-item-heading"> Life of the Last Prophet </h4>
                                <p class="list-group-item-text"> This is a short description of what the course is going to talk about in regards to the life of the Prophet from the perspective of Sunni Muslims. Information is presented with vivid detail in order to help students picture exactly what the landscape of the Prophet's life was like.
                                </p>
                            </div>
                            <div class="col-md-3 text-center">
                                <button type="button" class="btn btn-primary btn-lg btn-block">Continue Course</button>
                                <div class="col-s-1">
                                    <img src="img/Mailbox.png" id="mail" />
                                </div>
                                <div class="stars">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </div>
                                <p> Average 4.6 <small> / </small> 5 </p>
                            </div>
                            <div class="col-md-9 text-center">
                              <p>
                                You have 25 minutes remaining in this course of 3 hours and 54 minutes. Almost there!!!
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width:89%">
                                  89% Completed
                                </div>
                                <div style="width: 8px; height: 20px; position: absolute; background: red; right: 15%;" title="Muhammad Ali is 85% done!">
                                </div>
                                <div style="width: 8px; height: 20px; position: absolute; background: red; right: 69%;" title="Shabbar is 31% done!">
                                </div>
                              </div>
                            </div>
                      </a>
                      <a href="#" class="list-group-item" id="course-profile">
                            <div class="media col-md-3">
                                <figure class="pull-left">
                                    <img class="media-object img-rounded img-responsive" src="img/CoursePics/03.png" alt="placehold.it/350x250">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <h4 class="list-group-item-heading"> Life of Prophet Moses (Musa) </h4>
                                <p class="list-group-item-text"> A course all about the life of Prophet Moses.
                            </div>
                            <div class="col-md-3 text-center">
                                <button type="button" class="btn btn-primary btn-lg btn-block">Continue Course</button>
                                <div class="col-s-1">
                                    <img src="img/Mailbox.png" id="mail" />
                                </div>
                                <div class="stars">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </div>
                                <p> Average 4.3 <small> / </small> 5 </p>
                            </div>
                            <div class="col-md-9 text-center">
                              <p>
                                You have 39 minutes remaining in this course of 2 hours and 11 minutes.
                              </p>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                  70% Completed
                                </div>
                              </div>
                            </div>
                      </a>
                    </div>
                    </div>
            	  </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab-02">
            content of tab 2
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
