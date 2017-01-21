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
            <div class="profile-header-container">
        		<div class="profile-header-img">
                    <img class="img-circle" src="img/ProfilePicture.png" width="150px" />
                    <!-- badge -->
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
            content of tab 1
          </div>
          <div role="tabpanel" class="tab-pane" id="tab-02">
            content of tab 2
          </div>
          <div role="tabpanel" class="tab-pane" id="tab-03">
            content of tab 3
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
