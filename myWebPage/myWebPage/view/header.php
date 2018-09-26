<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | Bbc MVC</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../public/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar  navbar-fixed-top">

        <div id="HeaderDiv">
      <div class="container">

        <div class="navbar-header">
          <button id="button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span id="span" class="sr-only">Toggle navigation</span>
            <span id="span" class="icon-bar"></span>
            <span id="span" class="icon-bar"></span>
            <span id="span" class="icon-bar"></span>
          </button>
          <a id="a_nav" class="navbar-brand" href="/">Iris Burkhalter</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <?php if($_SESSION['privat']==0){
            ?>
          <ul class="nav navbar-nav">
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/home">Home</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/portraet">Porträt</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/informatik">Stärken</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/informatikprojekte">Projekte</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/login">Vertauliches</a></li>
          </ul>
            <?php } else{?>

                <ul class="nav navbar-nav">
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/home">Home</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/portraet">Porträt</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/informatik">Stärken</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/informatikprojekte">Projekte</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/login">Vertauliches</a></li>
            <li><a id="a_nav" href="<?= $GLOBALS['appurl']?>/login/logout">Logout</a></li>
          </ul>
            <?php }?>
        </div><!--/.nav-collapse -->
      </div>
        </div>
    </nav>

    <div class="container">

    <div id="masterDiv">

        <h1><?= $heading ?></h1>
    </div>

