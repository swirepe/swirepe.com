<html>
<head>
	<title>About Peter Swire - Contact</title>
	<link rel="stylesheet" type="text/css" href="/main.css" />

	<?php include($_SERVER['DOCUMENT_ROOT']."/include/styleh1.php"); ?>

	<style type="text/css">
		canvas {
			position:fixed;
			top:0;
			left:0;
			width:0%;
			height:0%;
		}

	</style>

<?php 
ini_set('display_errors', 0);
$page = $_GET['page'];

$inc;
switch($page){
	case 'pgp':
		$inc = "pgp.php";
		break;
	case 'skype':
		$inc = "skype-button.php";
		break;
	case 'email':
	default:
		$inc = 'email.php';
}


?>

</head>
<body>
	<canvas id="gameoflifecanvas">
	</canvas>
    <div class="body-container">
            <?php include($_SERVER['DOCUMENT_ROOT']."/include/banner.php"); ?>
			<?php include("./contact-banner.php"); ?>

			<?php include($inc); ?>
    </div>
</body>	
</html>
  