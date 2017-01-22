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
  <link rel="stylesheet" href="css/search.css" media="screen" title="no title" charset="utf-8">
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
  <div class="container" id="tourpackages-carousel">
    <div class="row">
      <div class="form-horizontal">
        <div class="input-group" id="adv-search">
          <input type="text" class="form-control" placeholder="Search for a class!" />
          <div class="input-group-btn">
            <div class="btn-group" role="group">
              <div class="dropdown dropdown-lg">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label for="filter">Specific Perspective:</label>
                      <br />
                      <label class="checkbox-inline"><input type="checkbox" value="">General Knowledge</label>
                      <label class="checkbox-inline"><input type="checkbox" value="">Sunni</label>
                      <label class="checkbox-inline"><input type="checkbox" value="">Shia</label>
                      <label class="checkbox-inline"><input type="checkbox" value="">Sufi</label>
                      <label class="checkbox-inline"><input type="checkbox" value="">Kharajite</label>
                      <label class="checkbox-inline"><input type="checkbox" value="">Quranists</label>
                      <br />
                      Don't see your sect? Click the box below and type it in:
                      <div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                          </span>
                          <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                      </div>
                    </div>
                    <label for="checkboxes">Taught in:</label>
                    <br />
                    <label class="checkbox-inline"><input type="checkbox" value="">English</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Arabic</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">French</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Swedish</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Chinese</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Russian</label>
                    <br />
                    Don't see your language? Click the box below and type it in:
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </span>
                      <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <br />
                    <div class="form-group">
                      <label for="contain">Author</label>
                      <input class="form-control" type="text" />
                    </div>
                    <br />
                    <div class="form-group">
                      <label for="contain">Contains the words</label>
                      <input class="form-control" type="text" />
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </form>
                </div>
              </div>
              <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <h2>Recommended for You</h2>
    </div>
    <div class="row">
      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/01.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <a href="history-of-kabaa.php"><img src="img/cardplaceholder/02.png"/></a>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/03.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/04.png"/>
      </div>

    </div>


    <div class="row">
      <h2>Most Popular Courses</h2>
    </div>
    <div class="row">
      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/04.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/05.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/02.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/03.png"/>
      </div>
    </div>


    <div class="row">
      <h2>Top Courses in Life of Prophets</h2>
    </div>
    <div class="row">
      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/01.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/03.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/04.png"/>
      </div>

      <div class="col-xs-18 col-sm-6 col-md-3">
        <img src="img/cardplaceholder/05.png"/>
      </div>
    </div>

  </div><!-- End container -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
