<?php
$status = $_GET['status'];
$report_id = $GET['report_id'];
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<!--这里是头部连接-->
	<?php require_once('headlink.php'); ?>

	</head>
	<body>
	
	
	<div id="fh5co-page">	
	<!--这里是Bar-->
	<?php require_once('head.php'); ?>
<?php if($status == "submitted"){ 
?>
	<?php require_once('f4fRepairmanIntro.php');
	 ?>

<?php } 
else{ 
?>
	<?php require_once('fixforfreecontent.php'); ?>
<?php 
} ?>

		<!--这里是底端栏-->
	<?php require_once('ending.php'); ?>
	
	</div>
	
	
	<!--这里js库-->
	<?php require_once('endlink.php'); ?>

	</body>
</html>

