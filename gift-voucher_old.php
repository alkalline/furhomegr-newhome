<?php include("inc/session.inc.php"); ?>
<?php include('inc/functions.inc.php');?>
<?php //include('administration/inc/config.php');?>
<?php 
$meta_title_en="Gift voucher";
$meta_description_en="Contemporary cowhide rugs &amp; luxury fur rugs, designer area rugs, custom area rugs, and personalized service at the most competitive prices to our online area rug store.";
$meta_keywords_en="Cowhide, Cowhide rugs, Cowhides, cow skin, cow skin rug, animal rug, animal print, custom cowhide rug, Modern rug,fur rugs, Pony rug, color cowhide";
$meta_title_gr="ΑΓΟΡΑΣΤΕ ΜΙΑ ΚΑΡΤΑ ΔΩΡΟΥ";
$meta_description_gr="Η FUR HOME συνεχίζει στην Καστοριά για περισσότερα από 70 χρόνια την κατασκευή σε δερμάτινα χαλιά και γούνινα χαλιά όπως και αξεσουαρ. Προσφορές ολο τον χρόνο. E-shop";
$meta_keywords_gr="Προσφορές χαλιά, δερμάτινα χαλιά, κατασκευή δερμάτινα χαλιά, Καστοριά, xalia, halia Kastoria, δερμάτινο χαλί, χαλί από δέρμα, χαλιά από γούνα, χαλιά από δέρμα, χαλί, αγορά χαλιών";

if(LANG=='en') {
$meta_title=$meta_title_en;
$meta_description=$meta_description_en;
$meta_keywords=$meta_keywords_en;
} else {
$meta_title=$meta_title_gr;
$meta_description=$meta_description_gr;
$meta_keywords=$meta_keywords_gr;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?=$meta_title?></title>
		<meta name="description" content="<?=$meta_description?>" />
		<meta name="keywords" content="<?=$meta_keywords?>" />
		<meta name="robots" content="index/follow" />
		<meta name="revisit-after" content="4 days" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://www.furhome.gr/favicon.ico" type="image/x-icon" />	
		<link href="css/style.css" rel="stylesheet" type="text/css" />	
		<?php include('inc/header_scripts.inc.php');?>
	</head>
	<body>
	<?php include('inc/body_scripts.inc.php');?>
	<div id="wrapper">
		<div id="header">
		<h2><?=TITLE?></h2>
		
			<?php include('inc/navigation.inc.php');?>		
		</div><!-- header -->	
		<div id="content">
		<!-- 3 columns layout -->
			<div id="col_container">
				<?php if($lang=='en') {?>
				
			<div id="pages">
				<h1>Gift Voucher</h1>
			<p>You may purchase a gift voucher and offer it as a present!</p>

<p>In that case, the gift voucher beneficiary may use it in our store or shopping online at our e-shop.</p>

																	
			</div><!-- pages -->
			<?php } else { ?>
			
		<div id="pages">
				<h1>ΑΓΟΡΑΣΤΕ ΜΙΑ ΚΑΡΤΑ ΔΩΡΟΥ</h1>
			
<p>Εάν θέλετε μπορείτε να αγοράσετε μια κάρτα δώρου και να την προσφέρετε.</p>
<p>Σε αυτή την περίπτωση ο δικαιούχος της κάρτας θα μπορέσει να την εξαργυρώσει με αγορές στα καταστήματα μας ή και με online αγορές.</p>

			</div><!-- pages -->			
			<?php } ?>
		
			<div id="sidebar_b" class="internalpages">
				<?php include ('inc/sidebar_search_box.php');  ?>
				<?php include ('inc/sidebar_eshop.php');  ?>			
				<?php include ('inc/sidebar_information.php'); ?>						
			</div><!-- sidebar_b -->
							

		</div><!-- col_container -->
		<?php include('inc/footer_nav.inc.php');?>

		</div><!-- content -->
		

	</div><!-- wrapper -->
	
	<?php include('inc/footer.inc.php');?>

	</body>
</html>