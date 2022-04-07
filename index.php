<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
print_r($user_data);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title></title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>
<?php 
		include 'header.php';
		include 'about me.php';
		include 'skills.php';
		include 'projects.php';
		include 'experience.php';
		include 'testimonial.php';
		include 'contact.php';
		include 'footer.php';
?>

</body>
</html>