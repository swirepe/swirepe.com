<style type="text/css">

div.site-banner-panel{
	background-color: #3AA6D0;
	width:100%;
	margin-bottom:50px;
	margin-left:0;
	margin-right:auto;
	text-align:center;
    right:0px;

    position:absolute;
    top: 65px;
}

ul.site-banner-panel {
    list-style-type:none;
    margin:0 auto;
    padding:0px;
    width:854px;
}

li.site-button {
    float:left;
}

a.site-button{
    padding:0px;
    margin:0px;
    text-align:center;
    color:white;
    font-size:15px;
    font-weight:bold;
    line-height:30px;
    display:block;
    width:122px;
    text-decoration:none;
}


a.site-button:hover{
    background-color:#024C68;
}

a.site-button:visited{
    color:white;
}

#chosen {
    background-color: #0776a0
}

</style>


    
<div class="site-banner-panel">
	<ul class="site-banner-panel">
		<li class="site-button"><a class="site-button" href="/">Home</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "drfiveminutes.php"){ echo 'id="chosen"'; } ?> href="?project=drfiveminutes">DRFVMN</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "important4batia.php"){ echo 'id="chosen"'; } ?> href="?project=important4batia">Important4batia</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "victoriant.php"){ echo 'id="chosen"'; } ?> href="?project=victoriant">Victoriant</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "tireless.php"){ echo 'id="chosen"'; } ?> href="?project=tireless">Tireless</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "inappropriamatic.php"){ echo 'id="chosen"'; } ?> href="?project=inappropriamatic">Inappropriamatic</a></li>
		<li class="site-button"><a class="site-button" <?php if($inc == "swirepe.php"){ echo 'id="chosen"'; } ?> href="?project=swirepe">swirepe.com</a></li>

	</ul>
</div>
