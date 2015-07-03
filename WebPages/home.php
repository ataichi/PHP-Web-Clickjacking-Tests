<html>
    <head>
        <style id="antiClickjack">body{display:none !important;}</style>
        <script type="text/javascript">
            if (self === top) {
                var antiClickjack = document.getElementById("antiClickjack");
                antiClickjack.parentNode.removeChild(antiClickjack);
            } else {
                top.location = self.location;
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="../../favicon.ico">
        <script src="../DesignAndChecks/js/logincheck.js" type="text/javascript"></script>
        <script src="../DesignAndChecks/dist/js/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="../DesignAndChecks/dist/js/bootstrap.min.js" type="text/javascript"></script>

        <title>HOME PAGE</title>
        <link href="../DesignAndChecks/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body  {
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <?php session_start(); ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project NAME</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php"><span class="glyphicon glyphicon-home active"></span> Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle media-heading" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> &nbsp; <?php echo $_SESSION['loguser']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Account</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Change Password</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-usd"></span>Transactions</a></li>
                            </ul>
                        </li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" action='#SearchProduct' method="post">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </body>
</html>
