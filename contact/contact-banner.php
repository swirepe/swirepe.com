<style type="text/css">

div.contact-banner-panel{
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

ul.contact-banner-panel {
    list-style-type:none;
    margin:0 auto;
    padding:0px;
    width:800px;
}

li.contact-button {
    float:left;
}

a.contact-button{
    padding:0px;
    margin:0px;
    text-align:center;
    color:white;
    font-size:15px;
    font-weight:bold;
    line-height:30px;
    display:block;
    width:100px;
    text-decoration:none;
}



a.contact-button:hover{
    background-color:#024C68;
}

a.contact-button:visited{
    color:white;
}

#chosen {
    background-color: #0776a0
}

</style>




<div class="contact-banner-panel">
	<ul class="contact-banner-panel">	    
		<li class="contact-button"><a class="contact-button" href="/">Home</a></li>
		<li class="contact-button"><a class="contact-button" <?php if($inc == "email.php"){ echo 'id="chosen"'; } ?> href="?page=email">Email</a></li>
		<li class="contact-button"><a class="contact-button" <?php if($inc == "pgp.php"){ echo 'id="chosen"'; } ?> href="?page=pgp">PGP</a></li>
        <li class="contact-button"><a class="contact-button" <?php if($inc == "goodreads.php"){ echo 'id="chosen"'; } ?> href="?page=goodreads">Goodreads</a></li>
		<li class="contact-button"><a class="contact-button" <?php if($inc == "skype-button.php"){ echo 'id="chosen"'; } ?> href="?page=skype">Skype</a></li>
		<li class="contact-button"><a class="contact-button" target="_blank" href="https://github.com/swirepe">Github</a></li>
        <li class="contact-button"><a class="contact-button" target="_blank" href="https://plus.google.com/107527688888192155981/posts">G+</a></li>
		<li class="contact-button"><a class="contact-button" target="_blank" href="http://www.kaggle.com/users/3151/peter-swire">Kaggle</a></li>


	</ul>
</div>
