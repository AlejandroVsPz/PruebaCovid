<?php
	session_start();

	include("header.php");

	if (!isset($_SESSION["user_email"])) {
		header("location: index.php");
	}
  $id = $_GET['user_id'];
	$sql = "SELECT * FROM User WHERE user_id='$id'";
	$run_sql = mysqli_query($con, $sql);

 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Simulador Covid</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
         integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
         integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
     </script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

     <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
 </head>

 <style media="screen">

 body{
  overflow-x: hidden;
  background-image: url("images/covid.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
.main-content{
  width: 90%;
  height: 100%;
  margin: 60px auto;
  background-color: rgba(255,255,255, 0.5);
  border: 2px solid #34495e;
  padding: 40px 50px;
   border-radius: 20px;
}


#h3{
  background: -webkit-linear-gradient(#34495e,  #34495e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.overlap-text{
  position: relative;
}

.overlap-text a{
  position: absolute;
  top: 8px;
  right: 10px;
  font-size: 14px;
  text-decoration: none;
  font-family: 'Overpass Mono', monospace;
  letter-spacing: -1px;
}

 </style>

 <body>

 </body>
 </html>
