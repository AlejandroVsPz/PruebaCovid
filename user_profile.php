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
  height: auto;
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

.image_card{
  height: auto;
  width: auto;
  display: block;
}

 </style>

 <body>
   <?php
     while ($resultado = mysqli_fetch_array($run_sql)) {

    ?>
   <div class="row">
   <div class="col-sm-12">
     <div class="main-content">
         <div class="l-part">
           <div class="card" style="width: 18rem;">
             <img src="user_images/<?php echo($resultado['user_image'])  ?>" class="card-img-top image_card" alt="...">
             <div class="card-body">
               <h5 class="card-title"><?php echo($resultado['user_name'])  ?> <?php echo($resultado['user_lastname'])  ?></h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
             <ul class="list-group list-group-flush">
               <li class="list-group-item"><i class="bi bi-envelope-fill" style="font-size: 1.5rem;"></i> <?php echo($resultado['user_email'])  ?></li>
               <li class="list-group-item"><i class="bi bi-telephone-fill" style="font-size: 1.5rem;"></i> <?php echo($resultado['user_phone'])  ?></li>
               <li class="list-group-item"><i class="bi bi-calendar-fill" style="font-size: 1.5rem;"></i> <?php echo($resultado['user_birthday'])  ?></li>
             </ul>
             <form action="user_profile.php?<?php echo "user_id=$user_id" ?>" method='post' enctype='multipart/form-data'>
               <div class="card-body">
                  <div class="input-group">
                      <input type="file" class="form-control" name="user_image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" >
                      <button class="btn  btn-outline-dark" name="update" type="submit" id="inputGroupFileAddon04">Subir</button>
                  </div>
               </div>
             </form>
         </div>
       </div>
     </div>
   </div>
 </div>

 <?php

 $file_path = "user_images/".$profile_pic;

   if (isset($_POST['update'])) {
       $user_image = $_FILES["user_image"]["name"];
       $image_tmp = $_FILES["user_image"]["tmp_name"];
       $random_number = rand(1,100);
       $deleted = unlink($file_path);

       /*printf("$user_image ");
       printf("$image_tmp ");
       printf("$user_id ");
       printf("$user_image.$user_id");*/

       if ($user_image == ' ') {
         echo "<script>alert('Porfavor selecciona una imagen')</script>";
         echo "<script>window.open('user_profile.php?user_id=$user_id','_self')</script>";
         exit();
       }else{
         move_uploaded_file($image_tmp, "user_images/$user_id$user_image");

         $update = "UPDATE User SET user_image='$user_id$user_image' WHERE user_id='$user_id'";

         $run = mysqli_query($con, $update);

         if ($run) {
           echo "<script>alert('Imagen Guardada')</script>";
           echo "<script>window.open('user_profile.php?user_id=$user_id' ,'_self')</script>";
         }
       }
     }

  ?>

 <?php
   }
  ?>

  <?php
  include("footer.php");
   ?>

 </body>
 </html>
