<?php
//include the config.php file for mysql database access information
include "config.php";

//connect to MYSQL_SERVER
$link = mysql_connect($hostname, $user, $password);
if (!$link) {
    die('MYSQL_ERROR');
}

mysql_select_db($db);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VWA</title>

    <!-- Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
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
              <button class="btn search_set">Kategory</button>
            <div class="input-group-btn">
                <button id="searchbutton" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-search"></span>
                </button>
                <input type="text" class="form-control" id="search_input" data-toggle="dropdown" autocomplete="off">
                <ul class="dropdown-menu" role="menu" aria-labelledby="searchmenu">
                    <li role="presentation"><a role="menuitem" class="searchitem_master" tabindex="-1" href="#"><font color="#ddd">Type something to search</font></a></li>
                    <li role="presentation"><a role="menuitem" class="searchitem_normal" tabindex="-1" href="#"><font color="#ddd">Type something to search</font></a></li>
                    <li role="presentation"><a role="menuitem" class="searchitem_count" tabindex="-1" href="#"><font color="#ddd">0</font></a></li>
                </ul>
            </div>
          </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div id="element_container" class="master row">
        <?php
            include "elements.php";
        ?>
    </div>
</div>
      
<div class="modal fade bs-example-modal-lg" id="element_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Element</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Buy</button>
      </div>
    </div>
  </div>
</div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="main.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>