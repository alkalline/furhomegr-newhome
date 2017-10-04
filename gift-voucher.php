<?php
session_start();
if (isset ($_GET['lang'])) {
  setcookie('furhome_language', $_GET['lang'], time() + 31536000,  "/");
  header( 'Location: '.$_SERVER['PHP_SELF']);
  }
if (isset ($_COOKIE['furhome_language'])) {
  $lang=$_COOKIE['furhome_language'];
  define(LANG, $lang);
  } else {
  $lang="en";
  define(LANG, $lang);
  }
?>
<?php include('inc/vfunctions.inc.php'); ?>
<?php
if (LANG=='gr') {
$meta_lang="el";
$meta_title="FUR HOME | Εκπτωτικά κουπόνια και κάρτες δώρων";
$meta_description="Αγοράστε τα αυθεντικά χαλιά από γούνα και δέρμα με έκπτωση. Αποκτήστε μια κάρτα δώρου και χαρίστε ένα ιδιαίτερο αντικείμενο διακόσμησης. Καστοριά, Ελλάδα";
$meta_keywords="κάρτα δώρου, καρτα δωρου, karta dorou, karta dwrou, εκπτωτικό κουπόνι, εκπτωτικο κουπονι, ekptotiko kouponi, έκπτωση, ekptosi, φθηνά δερμάτινα χαλιά, ftina dermatina xalia, γούνινα χαλιά με έκπτωση, gounina xalia ekptosi, κερδίστε χρήματα, kerdiste xrhmata, πτώση τιμών, ptosi timwn, καστοριά, kastoria, furhome";
} elseif (LANG=='ru') {
$meta_lang="ru";
$meta_title="FUR HOME | Gift cards and discount voucher codes";
$meta_description="Monthly offers! Buy the authentic fur and leather rugs from Kastoria, now with discount. Share the gift of fur home décor with a FUR HOME gift card.";
$meta_keywords="cheap leather rugs, sheepskin sale, save, monthly offer, discount codes, gift cards, vouchers, newsletter bonus, furhome, interior decoration, made in greece, kastoria";
} elseif (LANG=='de') {
$meta_lang="de";
$meta_title="FUR HOME | Geschenkkarten und Gutscheincodes";
$meta_description="Monatliche angebote. Buy the authentic fur and leather rugs from Kastoria, now with discount. Share the gift of fur home décor with a FUR HOME gift card.";
$meta_keywords="cheap leather rugs, sheepskin sale, save, monthly offer, discount codes, gift cards, vouchers, newsletter bonus, furhome, interior decoration, made in greece, kastoria";
} else {
$meta_lang="en";
$meta_title="FUR HOME | Gift cards and discount voucher codes";
$meta_description="Monthly offers! Buy the authentic fur and leather rugs from Kastoria, now with discount. Share the gift of fur home décor with a FUR HOME gift card.";
$meta_keywords="cheap leather rugs, sheepskin sale, save, monthly offer, offers, discount codes, price reduction, gift, gift cards, coupons, vouchers, newsletter bonus, furhome, interior decoration, made in greece, kastoria";
} ?>

<!DOCTYPE html>
<html lang="<?=$meta_lang?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$meta_title?></title>
    <meta name="keywords" content="<?=$meta_keywords?>">
    <meta name="description" content="<?=$meta_description?>">
    <meta name="author" content="Alexandros Kallinikos">
    <meta name="robots" content="index/follow" />
    <meta name="revisit-after" content="7 days" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="FUR HOME | Gift cards and discount voucher codes">
    <meta property="og:image" content="https://www.furhome.gr/images/offers/03-lumpyrugday2017.jpg">
    <meta property="og:description" content="Monthly offers! Buy the authentic fur and leather rugs from Kastoria, now with discount. Share the gift of fur home décor with a FUR HOME gift card.">
    <meta property="og:url" content="https://www.furhome.gr/gift-voucher.php">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@FURHOME">
    <meta name="twitter:title" content="FUR HOME | Gift cards and discount voucher codes">
    <meta name="twitter:description" content="Monthly offers! Buy the authentic fur and leather rugs from Kastoria, now with discount.">
    <meta name="twitter:image" content="https://www.furhome.gr/images/offers/03-lumpyrugday2017.jpg">
    <link rel="alternate" hreflang="x-default" href="https://www.furhome.gr/gift-voucher.php" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/furhome-gift.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400&subset=cyrillic,greek" rel="stylesheet">
    <meta name="yandex-verification" content="c4811a073d4624ac" />
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-21011140-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43445994 = new Ya.Metrika({ id:43445994, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43445994" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	</head>
	<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	 <div class="container-fluid">
			<div class="row" id="langbar">
				<p>
				<span class="hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i>
					<?php	if (LANG=='gr') { ?>
					Τηλ.: <a href="tel:+302467024004">24670 24004</a> |<a href="shop/el/contact-us"> Επικοινωνήστε μαζί μας</a>
					<?php } elseif (LANG=='ru') { ?>
					Tel.: <a href="tel:+302467024004">+30 24670 24004</a> |<a href="shop/ru/contact-us"> Свяжитесь с нами</a>
          <?php } elseif (LANG=='de') { ?>
          Tel.: <a href="tel:+302467024004">+30 24670 24004</a> |<a href="shop/en/contact-us"> Kontaktieren sie mit uns</a>
					<?php } else { ?>
					Tel.: <a href="tel:+302467024004">+30 24670 24004</a> |<a href="shop/en/contact-us"> Contact us</a>
					<?php } ?></span>
					<span class="pull-right">Language: <a href="?lang=gr" rel="nofollow"><img src="images/gr.png" alt="GR" width="24" height="16"></a> <a href="?lang=en" rel="nofollow"><img src="images/en.png" alt="EN" width="24" height="16"></a> <a href="?lang=ru" rel="nofollow"><img src="images/ru.png" alt="RU" width="24" height="16"></a> <a href="?lang=de" rel="nofollow"><img src="images/de.png" alt="DE" width="24" height="16"></a></span>
				</p>
			</div>
			<div class="navbar-header">
				<img src="images/furhome-logo.jpg" class="navbar-brand" alt="FUR HOME - Fur & Leather Interior Decoration"/>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- /.navbar-header -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<?php if (LANG=='gr') { ?>
					<li><a href="shop/el/dermatina-xalia-5">Πισω στις αγορες</a></li>
          <li><a href="shop/el/dermatina-gounina-xalia-prosfores-ekptoseis-43">Προσφορες</a></li>
					<li><a href="shop/el/content/resellers-area-9" class="wholesale">Χονδρικη Πωληση</a></li>
					<?php } elseif (LANG=='ru') { ?>
					<li><a href="shop/ru/ekskliuzivnye-kovry-5">Интернет магазин</a></li>
          <li><a href="shop/ru/skidki-kovrov-43">скидки</a></li>
					<li><a href="shop/ru/content/resellers-area-9" class="wholesale">Оптовики</a></li>
          <?php } elseif (LANG=='de') { ?>
          <li><a href="shop/en/patchwork-cowhide-rugs-5">Back to e-shop</a></li>
          <li><a href="shop/en/sales-cow-hide-leather-furs-rugs-43">Sales & Offers</a></li>
					<li><a href="shop/en/content/resellers-area-9" class="wholesale">Großhandel</a></li>
					<?php } else { ?>
					<li><a href="shop/en/patchwork-cowhide-rugs-5">Back to e-shop</a></li>
          <li><a href="shop/en/sales-cow-hide-leather-furs-rugs-43">Sales & Offers</a></li>
					<li><a href="shop/en/content/resellers-area-9" class="wholesale">Wholesale</a></li>
					<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
  <div class="row">
    <div class="container">
      <div class="col-xs-12">
        <?php	if (LANG=='gr') { ?>
          <h1>Κάρτες δώρων και εκπτωτικά κουπόνια</h1>
  			<?php } else { ?>
          <h1>Gift cards and discount voucher codes</h1>
  			<?php } ?>
      </div>
    </div>
  </div>
	<div class="sect">
  	<div class="row">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-8">
  					<?php	if (LANG=='gr') { ?>
  					<h2>Διαθέσιμη προσφορά</h2>
            <img src="images/offers/03-lumpyrugday2017.jpg" class="img-responsive">
            <p class="p-large text-right">Χρησιμοποιήστε τον κωδικό LMPYRUGZ στο καλάθι σας και κερδίστε έκπτωση 30% στις αγορές σας (η προσφορά ισχύει ΜΟΝΟ για τις 3 Μαϊου).</p>
            <p><a href="shop/el/dermatina-xalia-5" class="btn btn-shop">Πίσω στις αγορές</a></p>
  					<?php } else { ?>
  					<h2>Current offer</h2>
            <img src="images/offers/03-lumpyrugday2017.jpg" class="img-responsive">
            <p class="p-large text-right">Use the code LMPYRUGZ on checkout and win 30% price reduction (this offer is valid ONLY during May 3rd).</p>
            <p><a href="shop/en/patchwork-cowhide-rugs-5" class="btn btn-shop">Back to e-shop</a></p>
  					<?php } ?>
  				</div>
  				<div class="col-xs-12 col-sm-4 contblokw">
  					<?php	if (LANG=='gr') { ?>
              <h2>Εγγραφείτε στο newsletter μας</h2>
              <p>Θα πάρετε το πρώτο σας κουπόνι 10% μόλις επιβεβαιώσετε το email σας.</p>
              <!-- Begin MailChimp Signup Form -->
              <div id="mc_embed_signup">
              <form action="//furhome.us14.list-manage.com/subscribe/post?u=4ff8addfa0b39b0e08c2f5891&amp;id=29d9921f39" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              <div class="indicates-required"><span class="asterisk">*</span> απαιτούμενο</div>
              <div class="mc-field-group">
              	<label for="mce-EMAIL">Διεύθυνση Email  <span class="asterisk">*</span></label>
              	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>
              <div class="mc-field-group">
              	<label for="mce-FNAME">Όνομα </label>
              	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
              </div>
              <div class="mc-field-group">
              	<label for="mce-LNAME">Επίθετο </label>
              	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
              </div>
              <p>Powered by <a href="http://eepurl.com/cKe45L" title="MailChimp - email marketing made easy and fun">MailChimp</a></p>
              	<div id="mce-responses" class="clear">
              		<div class="response" id="mce-error-response" style="display:none"></div>
              		<div class="response" id="mce-success-response" style="display:none"></div>
              	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4ff8addfa0b39b0e08c2f5891_29d9921f39" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Εγγραφή" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                  </div>
              </form>
              </div>
              <p>(Δεν πρόκειται να πουλήσουμε ή να δώσουμε τα στοιχεία σας σε τρίτους. Στέλνουμε μόνο 1-2 μηνύματα κάθε μήνα. Αντιπαθούμε το spam όσο και εσείς!)
              <!--End mc_embed_signup-->
  					<?php } else { ?>
              <h2>Subscribe to our mailing list</h2>
              <p>Get your first 10% coupon just by confirming your email.</p>
              <!-- Begin MailChimp Signup Form -->
              <div id="mc_embed_signup">
              <form action="//furhome.us14.list-manage.com/subscribe/post?u=4ff8addfa0b39b0e08c2f5891&amp;id=29d9921f39" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
              <div class="mc-field-group">
              	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
              	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>
              <div class="mc-field-group">
              	<label for="mce-FNAME">First Name </label>
              	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
              </div>
              <div class="mc-field-group">
              	<label for="mce-LNAME">Last Name </label>
              	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
              </div>
              <p>Powered by <a href="http://eepurl.com/cKe45L" title="MailChimp - email marketing made easy and fun">MailChimp</a></p>
              	<div id="mce-responses" class="clear">
              		<div class="response" id="mce-error-response" style="display:none"></div>
              		<div class="response" id="mce-success-response" style="display:none"></div>
              	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4ff8addfa0b39b0e08c2f5891_29d9921f39" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                  </div>
              </form>
              </div>
              <p>(We won't sell or give your personal information to any other company. We are only sending 1-2 emails per month. We hate spam as much as you do.)
              <!--End mc_embed_signup-->
  					<?php } ?>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
	<div class="sect">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
              <h2>Σημειώστε αυτές τις μέρες</h2>
  						<ul>
                <li><p class="p-small text-right">3 Μαϊου, Lumpy Rug day</p></li>
              </ul>
						<?php } else { ?>
  						<h2>Save the date</h2>
  						<ul>
                <li><p class="p-small text-right">May 3, Lumpy Rug day</p></li>
              </ul>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12">
						<?php	if (LANG=='gr') { ?>
              <h2>Κάρτα Δώρου</h2>
  						<p class="p-small text-right">Εάν θέλετε μπορείτε να αγοράσετε μια κάρτα δώρου και να την προσφέρετε.<br>Σε αυτή την περίπτωση ο δικαιούχος της κάρτας θα μπορέσει να την εξαργυρώσει με αγορές στα καταστήματα μας ή και με online αγορές.</p>
              <p class="p-small text-right">Τηλεφωνήστε μας για να φτιάξουμε την δωροκάρτα σας.</p><p><a href="tel:+302467024004" class="btn phoneorder">Αποκτήστε μια κάρτα</a></p>
						<?php } else { ?>
              <h2>Gift Voucher</h2>
  						<p class="p-small text-right">You may purchase a gift voucher and offer it as a present!<br>In that case, the gift voucher beneficiary may use it in our store or shopping online at our e-shop.</p>
              <p class="p-small text-right">Call us to generate a unique gift card for you.</p><p><a href="tel:+302467024004" class="btn phoneorder">Get a gift card</a></p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sect">
		<div class="row">
			<div class="container contblokw">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <img src="images/guarantee.png" class="img-responsive center-block" alt="100% satisfaction, quality assured.">
            <?php	if (LANG=='gr') { ?>
            <h3>Εγγύηση Ποιότητας</h3>
            <p class="p-small">Μπορούμε να εγγυηθούμε την κορυφαία ποιότητα όλων των προϊόντων μας. Αν βρείτε καλύτερη τιμή σε αυτή την ποιότητα, σας δίνουμε τη διαφορά!* (βλέπε Όροι Χρήσης)</p>
            <?php } elseif (LANG=='ru') { ?>
            <h3>Quality Assurance</h3>
            <p class="p-small">We can GUARANTEE for the top quality of our entire product line. If you can find this quality at a better price, we give you the difference* (see terms & contitions)</p>
            <?php } elseif (LANG=='de') { ?>
            <h3>Qualitätsgarantie</h3>
            <p class="p-small">Wir garantieren höchste qualität in alle unserer produkte. Sie werden in dieser qualität keinen besseren preis finden.</p>
            <?php } else { ?>
            <h3>Quality Assurance</h3>
            <p class="p-small">We can GUARANTEE for the top quality of our entire product line. If you can find this quality at a better price, we give you the difference* (see terms & contitions)</p>
            <?php } ?>
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="images/contact.png" class="img-responsive center-block" alt="Give us a call, get a better price!">
            <?php	if (LANG=='gr') { ?>
            <h3>Τηλεφωνήστε μας</h3>
            <p class="p-small">Ελάτε να γνωριστούμε. Θέλουμε να καταλάβουμε τις ανάγκες σας για να μπορέσουμε να σας εξυπηρετήσουμε καλύτερα. Τηλεφωνήστε μας για μια τιμή κομμένη και ραμμένη στα μέτρα σας.</p>
            <?php } elseif (LANG=='ru') { ?>
            <h3>Contact us</h3>
            <p class="p-small">We'd love to hear from you. We strive to understand and satisfy your needs better. Give us a call for a personal quote.</p>
            <?php } elseif (LANG=='de') { ?>
            <h3>Rufen Sie uns an</h3>
            <p class="p-small">Kommen Sie mit uns treffen. Wir wollen Ihre Bedürfnisse verstehen, damit wir Ihnen besser dienen können. Rufen Sie uns für einen Preis auf Ihre Bedürfnisse zugeschnitten.</p>
            <?php } else { ?>
            <h3>Contact us</h3>
            <p class="p-small">We'd love to hear from you. We strive to understand and satisfy your needs better. Give us a call for a personal quote.</p>
            <?php } ?>
          </div>
          <div class="col-md-4 col-xs-12">
            <img src="images/shipping.png" class="img-responsive center-block" alt="Free worldwide shipping, 1-3 weeks delivery time.">
            <?php	if (LANG=='gr') { ?>
            <h3>Κατ' οίκον Παράδοση</h3>
            <p class="p-small">Τώρα μπορείτε να αποκτήσετε ένα δερμάτινο χαλί FUR HOME όπου κι αν μένετε. Αποστέλλουμε σε όλο τον κόσμο. (Σημείωση: παραδίδουμε στον μεταφορέα εντός 1-3 εβδομάδων)</p>
            <?php } elseif (LANG=='ru') { ?>
            <h3>Worldwide Shipping</h3>
            <p class="p-small">You can be the owner of a FUR HOME rug, no matter where you are located. Please note: we deliver to the carrier within 1-3 weeks.</p>
            <?php } elseif (LANG=='de') { ?>
            <h3>Haustür Lieferung</h3>
            <p class="p-small">Jetzt können Sie ein tederteppich FUR HOME in ihrem Haus haben, wo immer Sie sich aufhalten. Wir liefern weltweit. (Anmerkung: wir mit dem Träger innerhalb von 1-3 Wochen liefern).</p>
            <?php } else { ?>
            <h3>Worldwide Shipping</h3>
            <p class="p-small">You can be the owner of a FUR HOME rug, no matter where you are located. Please note: we deliver to the carrier within 1-3 weeks.</p>
            <?php } ?>
          </div>
        </div>
			</div>
		</div>
	</div>
  <?php if (LANG=='gr') { ?>
  <footer id="footer">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3 col-sm-6"><h4>Πληροφορίες</h4>
  				<a href="shop/el/content/fur-home-4">Σχετικά με το FUR HOME</a><br>
  				<a href="shop/el/content/resellers-area-9">Χονδρική Πώληση</a><br>
  				<a href="shop/el/content/product-care-10">Περιποίηση Προϊόντων</a><br>
  				<a href="shop/el/content/frequently-asked-questions-11">Συχνές Ερωτήσεις</a><br>
  				<a href="shop/el/contact-us">Επικοινωνία</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Υποστήριξη</h4>
  				<a href="shop/el/content/how-to-order-6">Πως να παραγγείλετε</a><br>
  				<a href="shop/el/content/secure-payment-5">Ασφαλείς Συναλλαγές</a><br>
  				<a href="shop/el/content/warranty-8">Εγγύηση</a><br>
  				<a href="shop/el/content/delivery-1">Αποστολές</a><br>
  				<a href="shop/el/content/terms-and-conditions-of-use-3">Όροι Χρήσης</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Social Media</h4>
  				<a href="https://www.facebook.com/CowhideRugs" target="_blank" rel="nofollow"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><br>
  				<a href="https://gr.pinterest.com/furhomerugs/" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square" aria-hidden="true"></i> Pinterest</a><br>
  				<a href="https://www.youtube.com/user/FurHomeRugs" target="_blank" rel="nofollow"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a><br>
  				<a href="https://twitter.com/FURHOME" target="_blank" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a><br>
          <a href="https://plus.google.com/u/0/109548173621212037262" target="_blank" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Factory & Showroom:</h4>
  				<i class="fa fa-map-marker" aria-hidden="true"></i> FUR HOME, Λεωφ. Κύκνων 32, ΤΚ 52100, Καστοριά<br>
  				<i class="fa fa-phone" aria-hidden="true"></i> Καλέστε μας τώρα: <a href="tel:+302467024004">24670 24004</a><br>
  				<i class="fa fa-envelope-open" aria-hidden="true"></i> E-mail: <a href="mailto:info@furhome.gr">info@furhome.gr</a><br>
  				<i class="fa fa-map-o" aria-hidden="true"></i><a href="https://goo.gl/maps/GQ839M3fdPJ2" target="_blank" rel="nofollow"> Βρείτε μας στο χάρτη</a>
  			</div>
  		</div>
  <?php } elseif (LANG=='ru') { ?>
  <footer id="footer">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3 col-sm-6"><h4>Информация</h4>
  				<a href="shop/ru/content/fur-home-4">О нас FUR HOME</a><br>
  				<a href="shop/ru/content/resellers-area-9">Оптовики</a><br>
  				<a href="shop/ru/content/product-care-10">Уход за изделиями</a><br>
  				<a href="shop/ru/content/frequently-asked-questions-11">Часто задаваемые вопросы</a><br>
  				<a href="shop/ru/contact-us">Свяжитесь с нами</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>помощь</h4>
  				<a href="shop/ru/content/how-to-order-6">Как сделать заказ</a><br>
  				<a href="shop/ru/content/secure-payment-5">Безопасная оплата</a><br>
  				<a href="shop/ru/content/warranty-8">Гарантия</a><br>
  				<a href="shop/ru/content/delivery-1">Доставки</a><br>
  				<a href="shop/ru/content/terms-and-conditions-of-use-3">Правила и условия использования</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Social Media</h4>
  				<a href="https://www.facebook.com/CowhideRugs" target="_blank" rel="nofollow"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><br>
  				<a href="https://gr.pinterest.com/furhomerugs/" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square" aria-hidden="true"></i> Pinterest</a><br>
  				<a href="https://www.youtube.com/user/FurHomeRugs" target="_blank" rel="nofollow"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a><br>
  				<a href="https://twitter.com/FURHOME" target="_blank" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a><br>
          <a href="https://plus.google.com/u/0/109548173621212037262" target="_blank" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Factory & Showroom:</h4>
  				<i class="fa fa-map-marker" aria-hidden="true"></i> FUR HOME, 32 Kiknon ave., Zip Code 52100, Kastoria, Greece<br>
  				<i class="fa fa-phone" aria-hidden="true"></i> Call us now: <a href="tel:+302467024004">+30 24670 24004</a><br>
  				<i class="fa fa-envelope-open" aria-hidden="true"></i> E-mail: <a href="mailto:info@furhome.gr">info@furhome.gr</a><br>
  				<i class="fa fa-map-o" aria-hidden="true"></i><a href="https://goo.gl/maps/GQ839M3fdPJ2" target="_blank" rel="nofollow"> Find us on the map</a>
  			</div>
  		</div>
  <?php } elseif (LANG=='de') { ?>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6"><h4>Informationen</h4>
          <a href="shop/en/content/fur-home-4">Über FUR HOME</a><br>
          <a href="shop/en/content/resellers-area-9">Großhandel</a><br>
          <a href="shop/en/content/product-care-10">Produktpflege</a><br>
          <a href="shop/en/content/frequently-asked-questions-11">Häufig gestellte Fragen</a><br>
          <a href="shop/en/contact-us">Kontakt</a><br>
        </div>
        <div class="col-md-3 col-sm-6"><h4>Unterstützung</h4>
          <a href="shop/en/content/how-to-order-6">Wie konnen Sie bestellen</a><br>
          <a href="shop/en/content/secure-payment-5">Sichere Zahlungen</a><br>
          <a href="shop/en/content/warranty-8">Garantie</a><br>
          <a href="shop/en/content/delivery-1">Versand</a><br>
          <a href="shop/en/content/terms-and-conditions-of-use-3">Nutzungsbedingungen</a><br>
        </div>
        <div class="col-md-3 col-sm-6"><h4>Sozialen Medien</h4>
          <a href="https://www.facebook.com/CowhideRugs" target="_blank" rel="nofollow"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><br>
          <a href="https://gr.pinterest.com/furhomerugs/" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square" aria-hidden="true"></i> Pinterest</a><br>
          <a href="https://www.youtube.com/user/FurHomeRugs" target="_blank" rel="nofollow"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a><br>
          <a href="https://twitter.com/FURHOME" target="_blank" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a><br>
          <a href="https://plus.google.com/u/0/109548173621212037262" target="_blank" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a><br>
        </div>
        <div class="col-md-3 col-sm-6"><h4>Fabrik & Ausstellungsraum:</h4>
          <i class="fa fa-map-marker" aria-hidden="true"></i> FUR HOME Leof. Kyknon 32, Postleitzahl 52100, Kastoria, Greece<br>
          <i class="fa fa-phone" aria-hidden="true"></i> Rufen Sie Uns An: <a href="tel:+302467024004">+30 24670 24004</a><br>
          <i class="fa fa-envelope-open" aria-hidden="true"></i> E-mail: <a href="mailto:info@furhome.gr">info@furhome.gr</a><br>
          <i class="fa fa-map-o" aria-hidden="true"></i><a href="https://goo.gl/maps/GQ839M3fdPJ2" target="_blank" rel="nofollow"> Finden Sie Uns</a>
        </div>
      </div>
  <?php } else { ?>
  <footer id="footer">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3 col-sm-6"><h4>Information</h4>
  				<a href="shop/en/content/fur-home-4">About FUR HOME</a><br>
  				<a href="shop/en/content/resellers-area-9">Wholesales</a><br>
  				<a href="shop/en/content/product-care-10">Product care</a><br>
  				<a href="shop/en/content/frequently-asked-questions-11">F.A.Q.</a><br>
  				<a href="shop/en/contact-us">Contact us</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Support</h4>
  				<a href="shop/en/content/how-to-order-6">How to order</a><br>
  				<a href="shop/en/content/secure-payment-5">Secure payments</a><br>
  				<a href="shop/en/content/warranty-8">Warranty</a><br>
  				<a href="shop/en/content/delivery-1">Delivery</a><br>
  				<a href="shop/en/content/terms-and-conditions-of-use-3">Terms and Conditions</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Social Media</h4>
  				<a href="https://www.facebook.com/CowhideRugs" target="_blank" rel="nofollow"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><br>
  				<a href="https://gr.pinterest.com/furhomerugs/" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square" aria-hidden="true"></i> Pinterest</a><br>
  				<a href="https://www.youtube.com/user/FurHomeRugs" target="_blank" rel="nofollow"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a><br>
  				<a href="https://twitter.com/FURHOME" target="_blank" rel="nofollow"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a><br>
          <a href="https://plus.google.com/u/0/109548173621212037262" target="_blank" rel="nofollow"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a><br>
  			</div>
  			<div class="col-md-3 col-sm-6"><h4>Factory & Showroom:</h4>
  				<i class="fa fa-map-marker" aria-hidden="true"></i> FUR HOME, 32 Kiknon ave., Zip Code 52100, Kastoria, Greece<br>
  				<i class="fa fa-phone" aria-hidden="true"></i> Call us now: <a href="tel:+302467024004">+30 24670 24004</a><br>
  				<i class="fa fa-envelope-open" aria-hidden="true"></i> E-mail: <a href="mailto:info@furhome.gr">info@furhome.gr</a><br>
  				<i class="fa fa-map-o" aria-hidden="true"></i><a href="https://goo.gl/maps/GQ839M3fdPJ2" target="_blank" rel="nofollow"> Find us on the map</a>
  			</div>
  		</div>
  <?php } ?>
  		<div class="row">
  			<p><span class="pull-left">&copy; 2017 FUR HOME</span><span class="pull-right"><i class="fa fa-cc-paypal fa-4x" aria-hidden="true"></i> <i class="fa fa-cc-visa fa-4x" aria-hidden="true"></i> <i class="fa fa-cc-mastercard fa-4x" aria-hidden="true"></i></span></p>
        <p><span class="pull-left"><!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=43445994&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/43445994/1_1_FFFFFFFF_EFEFEFFF_0_visits" style="width:80px; height:15px; border:0;" alt="Yandex.Metrica" title="Yandex.Metrica: data for today (visits)" /></a> <!-- /Yandex.Metrika informer --></p>
  		</div>
  	</div>
  </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--<script src="js/jquery-1.12.4.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<?php include('inc/body_scripts.inc.php');?>
</body>
</html>
