<?php require_once('Connections/db_mmsp135b.php'); ?>
<?php require_once('recordset-home.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Mitchell's Business Company</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel="stylesheet" href="stylesheets/layout.css">
    <link rel="stylesheet" href="stylesheets/flexslider.css">
    <link rel="stylesheet" href="stylesheets/superfish.css">
    <link rel="stylesheet" href="stylesheets/ui.totop.css">

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
	$(function() {
		$('.flexslider') .flexslider();
	})

	$(function(){ 
 		$('ul.sf-menu').superfish(); 
 	});
	
	$(function(){
  		$().UItoTop();	
	});
</script>
    
</head>
<body class="page-1">



    <!-- Primary Page Layout
    ================================================== -->

    <!-- Delete everything in this .container and get started on your own site! -->

    <div class="container">
        <div class="sixteen columns">
           <?php require_once('header.php'); ?>
 
         </div>
        <section class="clearfix">
        
    
        
            <div class="sixteen columns">
            <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/slide-1.jpg" alt="">
      <div class="flex-caption">
        <div class="">Customer</div>
        <div class="slide-text-bold ident-top-1">Support</div>
	<div class="slide-text-bold ident-top-1">Team <a class="slide-button" href="#"><img src="images/flex-button.png" alt="" /></a></div>
      </div>
    </li>
    <li>
      <img src="images/slide-2.jpg" alt="">
      <div class="flex-caption">
        <div class="slide-text-bold">timely and</div>
        <div class="slide-text-bold ident-top-1">correct</div>
	<div class="ident-top-1">decisions <a class="slide-button" href="#"><img src="images/flex-button.png" alt="" /></a></div>
      </div>
    </li>
    <li>
      <img src="images/slide-3.jpg" alt="">
      <div class="flex-caption">
        <div class="slide-text-bold">Reach</div>
	<div class="slide-text-bold ident-top-1">stability</div>
	<div class="ident-top-1">with us! <a class="slide-button" href="#"><img src="images/flex-button.png" alt="" /></a></div>
      </div>
    </li>
    <li>
      <img src="images/slide-4.jpg" alt="">
      <div class="flex-caption">
        <div class="slide-text-bold">Advance</div>
        <div class="ident-top-1">your</div>
        <div class="ident-top-1">business! <a class="slide-button" href="#"><img src="images/flex-button.png" alt="" /></a></div>
      </div>
    </li>
  </ul>
</div>
</div>
<div class="one-third column">
      <div class="block-1">
        <p class="block-h">Reliable</p>
        <p class="block-p">Lorem ipsum dolor sit, consectetuer adipiscing sed diam nonummy.</p>
      </div><!--end block-1-->
    </div> <!--end one-third-->
    
    <div class="one-third column">
      <div class="block-2">
        <p class="block-h">Mutual</p>
        <p class="block-p">Diam nonummy euismod tincidunt laoreet dolore magna.</p>
			</div><!--end block-2-->
    </div> <!--end one-third-->
    
    <div class="one-third column">
      <div class="block-3">
        <p class="block-h">Creative</p>
        <p class="block-p">Ut wisi enim minim veniam, nostrud exerci tation ullamcorper.</p>
      </div><!--end block-3-->
    </div> <!--end one-third-->
  	
    <div class="row slogan-block">
    	
    	<div class="six columns alpha">
     		<img src="images/1page_img4.jpg" alt="We work for you!" class="scale-with-grid">
      </div> <!--end six columns alpha-->

            <div class="ten columns omega">
            <p class="slogan">We work for <span>you!</span></p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>

                <div class="three columns alpha">
                    <ul>
                    <li><a href="#">Business technology</a></li>
                    <li><a href="#">Corporate Finance</a></li>
                    </ul>
                </div>
                <div class="three columns omega">
                    <ul>
                    <li><a href="#">Marketing & Sales</a></li>
                    <li><a href="#">Sustainability & Resource</a></li>
                    </ul>
                </div>
            </div><!--end ten columns-->
             
            </div><!---end row-->
         
             <div class="row white-block"><div class="one-third column alpha">
             <div class="block-4"><h2>Industry Practices</h2>
             
             <ul>
                    <li><a href="#">Electric Power & Natural Gas</a></li>
                    <li><a href="#">Healthcare Systems & Services</a></li>
                    <li><a href="#">Pharmaceuticals & Medical Products</a></li>
                    <li><a href="#">Telecommunications</a></li>
                    
                    </ul></div>
                </div>
             <div class="one-third column">
             <div class="block-5"><h2>Why Mitchell's</h2>
           
               <?php do { ?>
               <p class="quote"><?php echo $row_Quotes['quote_text']; ?></p>
               <p class="author"><?php echo $row_Quotes['quote_author']; ?></p>
                 <?php } while ($row_Quotes = mysql_fetch_assoc($Quotes)); ?>
             </div>
            </div>
             <div class="one-third column omega">
             <div class="block-6"><h2>News</h2>
             <p>03.27.2012 - Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
             <p>03.27.2012 - Sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
             <p>03.27.2012 - Ut wisi enim minim veniam, quis nostrud exerci tation.</p></div>
             </div></div>
        </section><!--end section-->
        
    <div class="sixteen columns">
        <?php require_once('footer.php'); ?>
    </div>
        

    </div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>
<?php
mysql_free_result($Quotes);
?>
