<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assigment_01</title>
       
        <link rel="stylesheet"  href="/Assigment_01/public/css/bootstrap.min.css">        
        <link rel="icon" type="image/png" href="/Assigment_01/logo.png" sizes="30x30"> 
        <script src="/Assigment_01/public/js/jquery-3.3.1.min.js"></script>
        <style>
            .anime 
            {        
                position: relative;
                -webkit-animation: mymove 5s infinite;
                animation: mymove 5s infinite;
            }
            @-webkit-keyframes mymove 
            {
                from {left: 0px;}
                to {left: 100px;}
            }
            @keyframes mymove 
            {
                from {left: 0px;}
                to {left: 100px;}
            }
        </style>
    </head>
    <body style="background-image: url('/Assigment_01/wallpaper2.jpg');color: white;">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Assignment 01</a>
            <ul class="nav justify-content-end">
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link active' href='profile.php'>Profile</a>
                            </li>";
                    }
                ?>
          
                <?php 
                    if(!isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='login.php'>Login</a>
                            </li>";
                    }
                ?>
                
                <?php 
                    if(isset($_COOKIE['session_cookie'])) 
                    {
                        echo "<li class='nav-item'>
                                <a class='nav-link active' href='logout.php'>Logout</a>
                            </li>";
                    }
                ?>
            </ul>
        </nav>
        <div class="container">
            <div class="row" align="center" style="padding-top: 170px;">
                <div class="col-12">
                    <h1 style="font-size: 70px;">Cross-site Request Forgery protection</h1> 
                </div>
            </div>
            <div class="row" align="center" style="padding-top: 20px;">
                <div class="col-12">
                    <h2 style="font-size: 50px;">Synchronizer Token Patterns</h2>  
                </div>
            </div>
            <div class="row" align="center" style="padding-top: 10px;">
                <div class="col-12">
                    <div class="anime">
                        Niran Ramesh Peiris : IT 16106420
                    </div>
                    <div class="anime">
                        3 rd Year Cyber Security
                    </div>  
                </div>
            </div>
        </div>

        <script src="/Assigment_01/public/js/bootstrap.min.js"></script>
        <script src="/Assigment_01/public/js/popper.min.js"></script>
    </body>
</html>
