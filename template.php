<?php session_start();
if(empty($_SESSION['user'])){
	header('Location:index.php');	
}else{
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>SuperAdmin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="admin-bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="admin-bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin-bootstrap/css/main.css">

    <script src="admin-bootstrap/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">SuperAdmin</span>

                <div class="nav-collapse collapse">

                  

                 

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <p class="navbar-text pull-right">
                      <a href="logout.php" title="click here to logout" style="text-decoration:none" >Logout</a>
                    </p>
                 
                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                  


                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span2 pull-left">
        <div class="well sidebar-nav">
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Navigation</li>
                <li class="active" title="view items"><a href="#">view items</a></li>
                 <li><a href="#" title="insert items">Insert items</a></li>
                <li><a href="#" title="Delete items">Delete items</a></li>
                <li><a href="#" title="edit items">Edit Items</a></li>
            </ul>
        </div>
    </div>
    <!--/.well -->
    <!--/span3-->

    <div class="span10 pull-left">

        <div class="well">
            <h1>Hello, World!</h1>

            <p>
                A super admin interface for your projects !
                For more information about usage, visit <a href="http://twitter.github.com/bootstrap/"
                                                           target="_blank">Bootstrap</a><br><br>
                <a class="btn btn-primary btn-large" href="layout-options.html">Layout Options &raquo;</a>
            </p>
        </div>

    </div>
    <!--/span9-->

</div>
<!--/row-fluid-->

<hr>

<footer align="center">
    <p>Copyright &copy; 2013 <strong>Company Name</strong></p>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="admin-bootstrap/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="admin-bootstrap/js/vendor/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>
<?php } ?>