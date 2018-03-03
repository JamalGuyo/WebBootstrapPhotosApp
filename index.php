<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bootstrap</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    
     <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<!--    NAVIGATION-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gaddamnit"
                            aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> BRAND</a>
                </div>
                
                <div class="collapse navbar-collapse" id="gaddamnit">
                    <ul class="nav navbar-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                
            </div>
        </nav>
<!--    JUMBOTRON HEADER-->
    <div class="container">
        <div class="jumbotron">
            <h1><i class="fas fa-camera-retro"></i> The Image Gallery</h1>
            <p>a bunch of really awsome pictures taken by proffessional photographers</p>
        </div>
    </div>
    
<!--    IMAGE GALLERY-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="http://i.imgur.com/qK42fUu.jpg" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1435771112039-1e5b2bcad966?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1442406964439-e46ab8eff7c4?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            
<!--            2nd-->
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1439524970634-649c37a69e5c?ixlib=rb-0.3.5&q=80&fm=jpg
                          &crop=entropy&w=1450&h=825&fit=crop&s=bfda9916c885869b43b70738693428d9" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1444090542259-0af8fa96557e?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1434543177303-ef2cc7707e0d?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            
<!--            3rd-->
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1436262513933-a0b06755c784?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1439396087961-98bc12c21176?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1439694458393-78ecf14da7f9?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450" />
                </div>
            </div>
        </div>
    </div>
<!--    -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>