<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <title>Peter Swire - CV</title>
        <link rel="stylesheet" type="text/css" href="cv.css" />
        <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript">

        function mouseHomeIn(){
            // stretch the bar
            $(this).animate({ width: "78"}, 250);
            
            // make the text happen
            $(this).find("p").fadeOut(300, function(){$(this).text("Home").fadeIn(300)});
        }
        
        function mouseHomeOut(){
            // shrink the bar and reset text
            $(this).animate({ width: "50"}, 250).find("p").text("H");
        }
        
        
        function mouseContactIn(){
             // stretch the bar
            $(this).animate({ width: "88"}, 250);
            
            // make the text happen
            $(this).find("p").fadeOut(300, function(){$(this).text("Contact").fadeIn(300)});
        }
        
        function mouseContactOut(){
            // reset bar and text
            $(this).animate({ width: "50"}, 250).find("p").text("C");
        }
        
        $(document).ready(function() { 
           $("#home-button").mouseenter(mouseHomeIn);
           $("#home-button").mouseleave(mouseHomeOut);
           
           $("#contactbutton").mouseenter(mouseContactIn);
           $("#contactbutton").mouseleave(mouseContactOut);
        });     
        
        

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php include_once($_SERVER['DOCUMENT_ROOT']."/include/analytics.php") ?>
        
        <a href="/"><div class="button" id="home-button"><p class="button-text" id="home">H</p> </div></a>
        <a href="/contact"><div class="button" id="contactbutton"><p class="button-text" id="contact">C</p></div></a>
    
        <div class="body-container">
            Hosted on Google Docs.  <a href="https://docs.google.com/document/d/1JvV7ok0oLLRonnPre95SXHup9ITqevOFEDE6L8yAt2E/edit">Direct Link.</a>
            <iframe class="google-doc" src="https://docs.google.com/document/d/1JvV7ok0oLLRonnPre95SXHup9ITqevOFEDE6L8yAt2E/pub?embedded=true" height="2500">Loading...</iframe>
        </div>
    </body>
</html>
