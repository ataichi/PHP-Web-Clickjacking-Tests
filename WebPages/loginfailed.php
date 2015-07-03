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

        <title>Failed Log In</title>
        <link href="../DesignAndChecks/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body  {
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Project NAME</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li><a href="home.php">Home</a></li>-->
                        <li class="active"><a href="login.php">Log In</a></li>
                        <li><a href="#signup.php">Sign Up</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="panel-body"  style="padding-left: 600px">
            <div class="row" style="padding-top: 200px;">
                <form class="col-md-4" id="login" name="login" onsubmit="return logcheck();" method="post" action="authenticate.php">
                    <div class="form-group">
                        <input id="loguser" name='loguser' onblur="usernameCheck();" onfocus="backWhite(this);" type="text" class="form-control input-lg" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input id="logpass" name='logpass' onblur="passwordCheck();" onfocus="backWhite(this);" type="password" class="form-control input-lg" placeholder="Password" required>
                        <input type='hidden' value='0' name='ctr_try'/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                        <span class="pull-right">INVALID LOGIN</span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
