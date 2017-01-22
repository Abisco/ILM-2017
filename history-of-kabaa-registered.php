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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.1/css/star-rating.css">
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
      <div class="row">
        <div class="col-md-4">
          <figure class="pull-left">
              <img class="media-object img-rounded img-responsive"  src="img/CoursePics/01.png" alt="placehold.it/350x250" >
          </figure>
          </div>
          <div class="col-md-8">
            <h1>History of the Ka'baa</h1>
            <a href="#"><h3>By Sheikh Abbas</h3></a>
            <p>
              A Course on the History of the Ka'baa and the significance of Ka'baa to Muslims.
            </p>
            <label for="input-4" class="control-label">Rate This</label>
            <input id="input-4" name="input-4" class="rating rating-loading" data-show-clear="false" data-show-caption="true">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                0% Completed
              </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="row">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#tab-01" aria-controls="tab-01" role="tab" data-toggle="tab"> Overview </a></a></li>
            <li role="presentation"><a href="#tab-02" aria-controls="tab-02" role="tab" data-toggle="tab">Course Content</a></li>
            <li role="presentation"><a href="#tab-03" aria-controls="tab-03" role="tab" data-toggle="tab">Discussion Board</a></li>
            <li role="presentation"><a href="#tab-03" aria-controls="tab-03" role="tab" data-toggle="tab">FAQ</a></li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab-01">
              <h3>Sheikh Abbas</h3>
              <h4 line-height="1.2">Taught by Sheikh Abbas, a respected Sheikh from Al-Azhar University.
              Sheikh Abbas has been a history buff for as long as he can remember, having devoted countless hours to his pursuit of knowledge and of the past
              Having taught many students before, he now brings his world renowned class to you. With over 2000 students, Sheikh Abbas's class is one of the top classes available.
              Not only does it have information students of all ages would appreciate</h4>

              <h3>Information on the Class</h3>
              <h4 line-height="1.2">Beginning with the very building of the Kaaba, follow Sheikh Abbas through a journey of truly epic proportion, as we come to learn how the Ka'baa became the place of worship it is today.
              What made Allah to ask Prophet Ibrahim to build it?
              How was it built?
              What took place before the Prophet Muhammad's (SAW) birth?
              Sit in for the most engrossing history lesson you will ever experience, as Sheikh Abbas weaves the tale of the true History of the Ka'baa</h4>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-02">
              content of tab 2
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-03">
              content of tab 3
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-04">
              content of tab 4
            </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.1/js/star-rating.js" charset="utf-8"></script>
  </body>
</html>
