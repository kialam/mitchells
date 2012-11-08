<?php require_once('Connections/db_mmsp135b.php'); ?>
<?php require_once('recordset-contact.php'); ?>
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
	<link href="stylesheets/forms.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>

<script>
	$(function(){ 
 		$('ul.sf-menu').superfish(); 
 	});
	
	$(function(){
  		$().UItoTop();	
	});
	
	$(function(){
		$("#commentForm").validate();
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
         
   <div class="main-block">
   	<h2>Contact Us</h2>
   		<form action="<?php echo $editFormAction; ?>" method="POST" name="commentForm" id="commentForm"><label for="post_title">Title</label><input name="post_title" type="text" class="required" id="post_title" tabindex="1"><label for="post_content">Body</label><textarea name="post_content" cols="40" rows="20" class="required" id="post_content" tabindex="2"></textarea><input name="post_author" type="hidden" value="1"><input name="post_date" type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>"><input name="submit" type="submit" id="submit" tabindex="3" value="submit">
   		  <input type="hidden" name="MM_insert" value="commentForm">
   		</form>
   </div>
        <section class="clearfix">
     
        </section><!--end section-->
        
    <div class="sixteen columns">
  		<?php require_once('footer.php'); ?>
    </div>
        

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>

<!-- content to be placed inside <body>…</body> -->