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
    <?php include('templates/header-loggedin.php'); ?>
    <div class="container">
      <div class="row" id="course-row">
        <a href="history-of-kabaa-registered.php"><img src="img/CourseDescription/CourseDetails.png" /></a>
      </div>
      <hr>
      <div class="row" id="course-row">
        <img src="img/CourseDescription/CourseDetails_Bot.png" alt="" />
      </div>
      <hr>
      <div class="row" id="course-row">
        <img src="img/CourseDescription/Lesson_plan.png" alt="" />
      </div>
      <hr>

      <div class="row" id="course-row">
    <div class="col-sm-6">
      <div class="rating-block">
        <h4>Average user rating</h4>
        <h2 class="bold padding-bottom-7">4.7 <small>/ 5</small></h2>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>
      </div>
    </div>
    <div class="col-sm-3">
      <h4>Rating breakdown</h4>
      <div class="pull-left">
        <div class="pull-left" style="width:35px; line-height:1;">
          <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
        </div>
        <div class="pull-left" style="width:180px;">
          <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
            <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="pull-right" style="margin-left:10px;">100</div>
      </div>
      <div class="pull-left">
        <div class="pull-left" style="width:35px; line-height:1;">
          <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
        </div>
        <div class="pull-left" style="width:180px;">
          <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
            <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="pull-right" style="margin-left:10px;">81</div>
      </div>
      <div class="pull-left">
        <div class="pull-left" style="width:35px; line-height:1;">
          <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
        </div>
        <div class="pull-left" style="width:180px;">
          <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
            <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="pull-right" style="margin-left:10px;">3</div>
      </div>
      <div class="pull-left">
        <div class="pull-left" style="width:35px; line-height:1;">
          <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
        </div>
        <div class="pull-left" style="width:180px;">
          <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
            <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="pull-right" style="margin-left:10px;">0</div>
      </div>
      <div class="pull-left">
        <div class="pull-left" style="width:35px; line-height:1;">
          <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
        </div>
        <div class="pull-left" style="width:180px;">
          <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
            <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="pull-right" style="margin-left:10px;">2</div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-7">
      <hr/>
      <div class="review-block">
        <div class="row">
          <div class="col-sm-3">
            <img src="img/ProfilePicture.png" class="img-rounded" width="50px">
            <div class="review-block-name"><a href="#">nktailor</a></div>
            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
          </div>
          <div class="col-sm-9">
            <div class="review-block-rate">
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
            </div>
            <div class="review-block-title">this was nice in buy</div>
            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
          </div>
        </div>
        <hr/>
        <div class="row">
          <div class="col-sm-3">
            <img src="img/ProfilePicture.png" class="img-rounded" width="50px">
            <div class="review-block-name"><a href="#">Jaffer Abbas</a></div>
            <div class="review-block-date">January 5th, 2017<br/>16 days ago</div>
          </div>
          <div class="col-sm-9">
            <div class="review-block-rate">
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
            </div>
            <div class="review-block-title">Best Islamic Course I've Ever Done</div>
            <div class="review-block-description">Wow, Sheikh Abbas is amazing. He has just done an incredible job telling the story of the History of the Ka'baa. Every single moment is expertly told and really makes you love it. I'm truly impressed and can't wait to try more of Sheikh Abbas's Classes</div>
          </div>
        </div>
        <hr/>
        <div class="row">
          <div class="col-sm-3">
            <img src="img/ProfilePicture.png" class="img-rounded" width="50px">
            <div class="review-block-name"><a href="#">nktailor</a></div>
            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
          </div>
          <div class="col-sm-9">
            <div class="review-block-rate">
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
            </div>
            <div class="review-block-title">this was nice in buy</div>
            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
          </div>
        </div>
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
