<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <?php 
	    include ("function/area.php");
        include ("function/function.php");
		include ("include/header.php");
		include ("include/bannar.php");
		include ("include/search.php");
	?>

    <br>
    <section id="content">
        <div class="container fwhite">
            <div class="row hcontent">
                <div class="col-md-6">
                    <h3>Welcome to LogeAchi.com</h3>
                    <h3>Buy and sell used items,<br> Only for UITS students</h3>
                    </div>
                   
                
            </div>
        </div>
        </div>
    </section>
    
    <section class="text-center bottom">
        <h3>Do you have something to sell in out site?</h3>
        <h4>Post your ad on LogeAchi.com</h4>
        <a href="adspost.php"><button class="btn btn-warning" type="submit"> Post Your ad now!</button></a>
    </section>

    



    
    <script src="js/jquery.min.js "></script>

    <script src="js/bootstrap.min.js "></script>
</body>

</html>