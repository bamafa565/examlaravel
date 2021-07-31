<html>
<head>
<title>CLASSE LAMP</title>
 <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">


  <
     <link rel="stylesheet" href="../../css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="../../css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="../../css/font-awesome/css/font-awesome.min.css">




      <script src="../../js/jquery-1.11.3.min.js"></script>
</head>
<body>

<div class="container-fluid">


<header >

<div class="nav">

	<div class="navbar navbar-default navbar-fixed-top">

        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>

                <h2 class="h1_title">pharmacie <img src="../image/logo-pharmacie.png" alt="image" width="30" height="30"/></h2>

           </div>

            <div class="collapse navbar-collapse nav_right">

				<div class="btn-group">
 <button  type="button" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">
				    <a href="{{route('dashbord')}}" ><i class="glyphicon glyphicon-home large"></i></a></span>
				  </button>
				</div>



             </div>

        </div>

    </div>

</div>

<div class="clear"></div>

</header>


@yield('con')

</div>
  <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
