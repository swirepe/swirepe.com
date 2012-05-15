<html>
<head>
	<title>About Peter Swire - Some Projects</title>
	<link rel="stylesheet" type="text/css" href="/main.css" />

	<?php include($_SERVER['DOCUMENT_ROOT']."/include/styleh1.php"); ?>

	<style type="text/css">
	img {
		margin: auto;
		display:block;
	}

	</style>
<?php
ini_set('display_errors', 0);
$project = 0;
try{
	$project = $_GET['project'];
}catch(Exception $e){ /* ... */}


$md = $_SERVER['DOCUMENT_ROOT']."/include/";
switch($project){
	case "swirepe":
		$img = 0;
		$page = 0;
		break;
	case "inappropriamatic":
		$img = "inappro.png";
		$page = "inappropriamatic.php";
		break;

	case "important4batia":
		$img = "important4batia.jpg";
		$page = "important4batia.php";
		break;
	case "victoriant":
		$img = "victoriant.jpg";
		$page =  "victoriant.php";
		break;
	case "tireless":
		$img = "tireless.png";
		$page = "tireless.php";
		break;
	case "drfiveminutes":
	default:
		$img = "drfive.gif";
		$page = "drfiveminutes.php";
		break;
}

$page = $md . $page;

?> 
</head>
<body>
        <div class="body-container">
                <?php include($_SERVER['DOCUMENT_ROOT']."/include/banner.php"); ?>


            <div class="selector-panel">

        	</div>
            <div class="wide-column">

				<div class="thumb-column">
					<img src=<?php echo $img ?> >
				</div>

            	<div class="middle-column">
					<?php include($page) ?>
            	</div>

            </div>
        </div>
    </body>
</html>
