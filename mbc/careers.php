<?php require_once('Connections/db_mmsp135b.php'); ?>
<?php require_once('recordset-careers.php'); ?>
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
        	<div class="sixteen columns">
			<div class="main-block">
				<?php do { ?>
			    <article>
				    <h2><?php echo $row_Recordset1['post_title']; ?></h2>
				    <p><?php echo $row_Recordset1['post_date']; ?></p>
				    <p><?php echo nl2br($row_Recordset1['post_content']); ?></p>
				    <p class="author"><?php echo $row_Recordset1['display_name']; ?></p>
				    </article>
				  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </div>
</div>

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
mysql_free_result($Recordset1);
?>
<!-- content to be placed inside <body>…</body> -->