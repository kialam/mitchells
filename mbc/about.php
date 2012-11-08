<?php require_once('Connections/db_mmsp135b.php'); ?>
<?php require_once('recordset-about.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Mitchell's Business Company - About</title>
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
<script src="js/superfish.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
	$(function(){ 
 		$('ul.sf-menu').superfish(); 
 	});
	
	$(function(){
  		$().UItoTop();	
	});
</script>
</head>
<body class="page-2">



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<?php require_once('header.php'); ?>
         </div>
        <section class="clearfix">
        	<div class="row slogan-block">
            	<div class="six columns alpha">
                <img src="images/2page_img1.jpg" alt="We think globally" class="scale-with-grid"> 
                </div>
                <div class="ten columns omega">
                <p class="slogan">We think <span>globally</span></p>
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore ster magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesqu.</p>
				<p><a href="#" class="readmore">Read More</a></p>
                </div>
            </div>
<div class="row white-block">    	
			<div class="one-third column alpha">
        	<aside>
            <h2>Why choose us</h2>
            	
                <div class="number">1</div>
                <p class="aside-h">Lorem ipsum dolor sit amet, con.</p>
                <p class="aside-p">Sectetuer adipiscing elit. Sed dia nonummy nibh euismod.</p>
                <div class="number">2</div>
                <p class="aside-h">Dolor sit amet, con ster psoe ste.</p>
                <p class="aside-p">Sectetuer adipiscing elit. Sed dia nonummy nibh euismod.</p>
                <div class="number">3</div>
                <p class="aside-h">Lorem ipsum dolor sit amet, con.</p>
                <p class="aside-p">Sectetuer adipiscing elit. Sed dia nonummy nibh euismod.</p>
                
               	<h2>Testimonials</h2>
                <?php do { ?>
                <div class="quotebg"><p class="quote"><?php echo $row_Quotes['quote_text']; ?></p></div>
                  <p class="author"><?php echo $row_Quotes['quote_author']; ?></p>
                  <?php } while ($row_Quotes = mysql_fetch_assoc($Quotes)); ?>
            </aside>
                </div>
                <div class="two-thirds column omega">
                <h2>Our Mission</h2>
                <p class"intro">Sum dolor sit amet, con Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetue adipiscing elit. Pellentesque sed dolor. Aliquam congue ferme.</p>

<!-- Paragraph -->
				<p>Sectetuer adipiscing elit. Sed diam nonummy nibh euismod. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentu nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In ped mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tinc.</p>
				<p><a href="#" class="readmore">Read More</a></p>
                <h2>Meet Our Work Team</h2>
     <ul class="image-list">
       <li>
   <img src="images/2page_img2.jpg" alt="Helen Tompson">
	   <p><a href="#">Helen Tompson</a></p>
	   <p>Dtoaureru moms oder lroe port srenese...</p>
    </li>
	 <li>
	   <img src="images/2page_img3.jpg" alt="John Franklin">							
	   <p><a href="#">John Franklin</a></p>
	   <p>Dtoaureru moms oder lroe port srenese...</p>
	 </li>
	 <li>
	   <img src="images/2page_img4.jpg" alt="Laura Stegner">	
	   <p><a href="#">Laura Stegner</a></p>
      <p>Dtoaureru moms oder lroe port srenese...</p>
	 </li>
	 <li>
	   <img src="images/2page_img5.jpg" alt="Julia Berzkalna">
	   <p><a href="#">Julia Berzkalna</a></p>
	   <p>Dtoaureru moms oder lroe port srenese...</p>
	 </li>
	 <li>
	   <img src="images/2page_img6.jpg" alt="Alan Smith">
	   <p><a href="#">Alan Smith</a></p>
      <p>Dtoaureru moms oder lroe port srenese...</p>
	 </li>
  </ul></div>

                </div><!-- end slogan-block-->
            
       
        
        	
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
<!-- content to be placed inside <body>…</body> -->