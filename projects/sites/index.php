<html>
<head>
	<title>About Peter Swire - Some Projects</title>
	<link rel="stylesheet" type="text/css" href="/main.css" />
	<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>

	<!-- set the height for the image column-->
	<script type="text/javascript">
	$(document).ready(function() {
   		var h = $(".middle-column").height();
   		$(".wide-column").height(h+35);
   		$(".thumb-column").height(h+35);
 	});
	</script>


	<?php include($_SERVER['DOCUMENT_ROOT']."/include/styleh1.php"); ?>

	<style type="text/css">
	img {
		margin: auto;
		display:block;
	}

	</style>

<!-- project selector -->	
<?php
ini_set('display_errors', 0);
$project = 0;
try{
	$project = $_GET['project'];
}catch(Exception $e){ /* ... */}


$md = $_SERVER['DOCUMENT_ROOT']."/include/";
switch($project){
	case "swirepe":
		$img = "face.jpg";
		$page = "swirepe.php";
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

<script>


</script>

</head>
<body>
    <div class="body-container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/include/banner.php"); ?>

        <?php include("site-banner.php") ?>

        <div class="wide-column" style="height:100%">

			<div class="thumb-column">
				<img src=<?php echo $img ?> >
			</div>

        	<div class="middle-column" style="float:left">
				<?php include($page) ?>

				
        	</div>


        </div>
    

    </div>
</body>
</html>
