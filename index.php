<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VWA</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    
  </head>
  <body>
      
      
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VWA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group">
            <input type="text" class="form-control" data-toggle="dropdown" id="search_input">
            <ul class="dropdown-menu" role="menu" aria-labelledby="searchmenu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            </ul>
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="search_button">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div><!-- /input-group -->
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="master row">
        <div id="1" class="col-md-2">1</div>
        <div id="2" class="col-md-2">2</div>
        <div id="3" class="col-md-2">3</div>
        <div id="4" class="col-md-2">4</div>
        <div id="5" class="col-md-2">5</div>
        <div id="6" class="col-md-2">6</div>
    </div>
    <div class="master row">
        <div class="col-md-2">1</div>
        <div class="col-md-2">2</div>
        <div class="col-md-2">3</div>
        <div class="col-md-2">4</div>
        <div class="col-md-2">5</div>
        <div class="col-md-2">6</div>
    </div>
</div>      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>