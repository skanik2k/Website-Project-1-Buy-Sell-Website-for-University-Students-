<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about products</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">



</head>

<body>
    <?php 
	    include ("function/connection.php");
		include ("include/header.php");
		include ("function/function.php");
		include ("include/bannar.php");
	?>
   <br>
    <div id="detailp" class="container">
      <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="allads.php">Allads</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">Detail</a>
                        </li>
                    </ul>
                </div>
        <div class="row">
            <div class="col-md-7">

                <?php
	
		if(isset($_GET["details"])) {
			$details = $_GET["details"];
			$select = "select * from product where id='".$details."'";
			$see_product=$con->query($select);
			echo "<div id='dteailview'>";
			
			while($row=$see_product->fetch_array()){
			 	echo "<h3 style='color:blue;font-weight:bolder'>".$row['title']."</h3>
				<div class='thumbnail'><img src=images/".$row['image']." alt='Image not found'></div>
				<h4>".$row['price']."</h4>
				<p>".$row['description']."</p>
				<p><strong> Condition :".$row['condition']."</strong></p>
				<p><strong> Adtype : ".$row['adtype']."</strong></p>
				<p style='display:none'>".$row['user_id'];
				$uid = $row['user_id'];
					 $usql = "SELECT * FROM users WHERE id = '$uid'";
					 $userinfo = $con->query($usql);
					 while($urec = $userinfo->fetch_array()){
						?>
                       <div>
                     <?php echo "<h4 class='bg-success'>Post by : " . $urec['name']."</h4>"; ?>
                     </div>
                        <?php 						 
				      }
				;
			}
			echo "</div>";
		}
	
	?>
    <div id="dtailright">
        <h3 class='text-center bannar'><strong>CONTACT</strong></h3>
        <hr>
           <?php
	
		if(isset($_GET["details"])) {
			$details = $_GET["details"];
			$select = "select * from product where id='".$details."'";
			$see_product=$con->query($select);
			while($row=$see_product->fetch_array()){
			 	echo "<p style='display:none'>".$row['user_id']."</P>";
				$uid = $row['user_id'];
					 $usql = "SELECT * FROM users WHERE id = '$uid'";
					 $userinfo = $con->query($usql);
					 while($urec = $userinfo->fetch_array()){
						?>
                       <div class='text-center well'>
                     <?php echo "<h4 > Name :" . $urec['name']."</h4>
					 <h4> Email : " . $urec['email']."</h4>
					  <img src='images/tphone.png'><strong>" . $urec['phone']."</strong>" ?>
                     </div>
                        <?php 						 
				      }
				;
			}
			
		}
	
	?>
         <hr>
         </div>
            </div>
            
         
             
           
            </div>
            </div>
        </div>
    </div>
    
    <?php
	 if(isset($_POST['submit'])){
	   $db =$con;
	   $name =$_POST['name'];
	   $comment =$_POST['comment'];
	   $insertdata = "INSERT INTO `buynsell`.`comment` (`id`, `name`, `comment`) VALUES ('', '$name', '$comment')";
       $result = $db->query($insertdata);
	   if($result){echo "Your Cmment Added!!";}
	   else echo "Error!!!";
	   $db->close();  
	   }
		
	?>

    <!--/Footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed By Imran-->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
