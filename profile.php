<?php
session_start();
if(isset($_SESSION['user'])=="") 
{
	header("location:login.php?msg=stop");
	exit();
}
include("connect.php");
$u=$_SESSION['user'];
$q=mysql_query("select * from registration_table where rid=$u")or die ("QF");
$data=mysql_fetch_array($q);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>

</head>
<body>
    
<!-- header section starts  -->

<header>

<?php include("top.php");?>

<?php include("menu.php");?>

</header>

<section class="order" id="order" >

<h1 class="heading"> <span> User Profile </span> </h1>
 
<form action="" method="post" name="form1" id="form1" onSubmit="return f1();">
<font size="+1">
<div class="inputBox">       
Full Name : <?php echo $data['first_name']."   ".$data['last_name'];?>
<br><br><br>
</div>

<div class="inputBox">       
Full Name : <?php echo $data['contact_number'];?>
<br><br><br>
</div>


<div class="inputBox">       
Full Name : <?php echo $data['email'];?>
<br><br><br>
</div>


      


  </font>  
<br> 
  
    

</form>
</section>

 
<?php include("footer.php");?>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>
