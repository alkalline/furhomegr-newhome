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
	if($_SERVER["REQUEST_URI"]=="/index.php") {echo header('Location: https://www.furhome.gr');}
?>
<?php
if (LANG=='gr') {
$meta_lang="el";
$meta_title="FUR HOME | Αγοράστε Δερμάτινα & Γούνινα χαλιά από την Καστοριά";
$meta_description="Χαλιά από γούνα, δέρμα αγελάδας και προβάτου. Γούνινες κουβέρτες, ριχτάρια και άλλα αντικείμενα εσωτερικής διακόσμισης από δέρμα και γούνα. Καστοριά, Ελλάδα";
$meta_keywords="Χαλιά από δέρμα, xalia apo derma, χαλιά από γούνα, χαλί, δέρμα, αγελάδας, xali, xalia, χειροποίητα δερμάτινα χαλιά, μοντέρνα χαλιά, δερματινα μαξιλαρια, γουνινα μαξιλαρια, δερματα, γουνες, γουνα, δερμα, furhome, fur, leather, cowhide, patchwork, rug, carpet, γούνα, εσωτερική, διακόσμιση, καστορια";
} elseif (LANG=='ru') {
$meta_lang="ru";
$meta_title="FUR HOME | Интернет-магазин ковров - Kупить ковры из меха";
$meta_description="FUR HOME представляет собой интернет-магазин, где можно купить ковры из меха";
$meta_keywords="современые ковры, ковры, меховые ковры, кожаные ковры, покрывало, шкуры, магазин ковров, элитные ковры, интернет-магазин, купить ковры, ковры из меха, пледы, меховой интерьер, меховые изделие, пуфики, подушки, эксклюзивные ковры, купить ковер, салон ковров, коврики, купить ковер, продажа ковров, ковры из овчины, интернет-магазин ковров";
} elseif (LANG=='de') {
$meta_lang="de";
$meta_title="FUR HOME | Teppiche aus Kuhfell und Leder - Kuhfellteppiche";
$meta_description="FUR HOME macht lederne Teppiche und Pelzprodukte für Innendekoration. 100% Naturleder.";
$meta_keywords="patchworkteppiche, teppich fell und leder, patchworkdecken, kuhteppich, kuhteppich online, moderne teppiche, lederteppiche, fellprodukte, kuhfelle, fellteppiche, pelzdecken, pelztagesdecken, kissen, fellkissen, pelzkissen, lederaccessoires, lederbezüge, teppich, angebote teppiche";
} else {
$meta_lang="en";
$meta_title="FUR HOME | Buy Cowhide & Fur rugs for interior decoration";
$meta_description="FUR HOME is making and selling patchwork cowhide, fur and sheepskin rugs. Fur blankets, throws and other interior decoration items made by fur and leather.";
$meta_keywords="furhome, patchwork cowhide, leather carpet, patchwork, cowhide rug, buy rugs online, modern rugs, natural cowhide, designer rug, leather rugs, leather area rugs, cowhide, fur rug, fur blankets, sales, interior decoration, made in greece, kastoria";
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
    <meta name="revisit-after" content="12 days" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="FUR HOME | Buy Cowhide & Fur rugs for interior decoration">
    <meta property="og:image" content="https://www.furhome.gr/images/twitter-card.jpg">
    <meta property="og:description" content="FUR HOME is making and selling patchwork cowhide, fur and sheepskin rugs. Fur blankets, throws and other interior decoration items made by fur and leather.">
    <meta property="og:url" content="https://www.furhome.gr/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@FURHOME">
    <meta name="twitter:title" content="Handmade fur & leather rugs from Greece">
    <meta name="twitter:description" content="FUR HOME™ is making and selling cowhide rugs, fur carpets, throws and other interior decoration items">
    <meta name="twitter:image" content="https://www.furhome.gr/images/twitter-card.jpg">
    <link rel="alternate" hreflang="x-default" href="https://www.furhome.gr/" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/furhome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400&subset=cyrillic,greek" rel="stylesheet">
    <meta name="yandex-verification" content="c4811a073d4624ac" />

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
					<li><a href="shop/el/dermatina-xalia-5">Δερματινα Χαλια</a></li>
					<li><a href="shop/el/moderna-dermatina-xalia-38">Μοντερνα Δερματινα Χαλια</a></li>
					<li><a href="shop/el/gounina-xalia-28">Γουνινα Χαλια</a></li>
					<li><a href="shop/el/gounina-rixtaria-kouvertes-40">Κουβερτες & Ριχταρια</a></li>
					<li><a href="shop/el/xalia-derma-ageladas-10">Cowhides</a></li>
					<li><a href="shop/el/xalia-apo-derma-provatou-11">Sheepskins</a></li>
					<li><a href="shop/el/gounina-dermatina-maxilaria-37">Μαξιλαρια</a></li>
					<li><a href="shop/el/dermatina-gounina-pouf-skampo-anaklindra-33">Αντικειμενα</a></li>
					<li><a href="shop/el/content/resellers-area-9" class="wholesale">Χονδρικη Πωληση</a></li>
					<?php } elseif (LANG=='ru') { ?>
					<li><a href="shop/ru/ekskliuzivnye-kovry-5">Эксклузивные ковры</a></li>
					<li><a href="shop/ru/sovremennye-kovry-38">Современные ковры</a></li>
					<li><a href="shop/ru/kovry-iz-mexa-28">Ковры из меха</a></li>
					<li><a href="shop/ru/pokryvalo-iz-mexa-40">Покрывало / Пледы</a></li>
					<li><a href="shop/ru/shkury-10">Шкуры</a></li>
					<li><a href="shop/ru/kovry-iz-ovchiny-11">Kовры из овчины</a></li>
					<li><a href="shop/ru/podushki-iz-mexa-37">Подушки из меха</a></li>
					<li><a href="shop/ru/mexovye-izdelia-33">Меховые изделия</a></li>
					<li><a href="shop/ru/content/resellers-area-9" class="wholesale">Оптовики</a></li>
          <?php } elseif (LANG=='de') { ?>
          <li><a href="shop/en/patchwork-cowhide-rugs-5">Kuhfell Teppiche</a></li>
					<li><a href="shop/en/modern-cowhide-leather-rugs-38">Moderne Leder Teppiche</a></li>
					<li><a href="shop/en/fur-rugs-28">Fell Teppiche</a></li>
					<li><a href="shop/en/fur-blankets-throws-bedcovers-40">Pelzdecken / Felldecken</a></li>
					<li><a href="shop/en/cowhide-rug-10">Kuhfell</a></li>
					<li><a href="shop/en/sheepskins-rugs-11">Schaffelle</a></li>
					<li><a href="shop/en/fur-cowhide-leather-cushions-37">Pelzkissen</a></li>
					<li><a href="shop/en/interior-decoration-leather-cowhide-fur-33">Objecte</a></li>
					<li><a href="shop/en/content/resellers-area-9" class="wholesale">Großhandel</a></li>
					<?php } else { ?>
					<li><a href="shop/en/patchwork-cowhide-rugs-5">Patchwork Cowhide Rugs</a></li>
					<li><a href="shop/en/modern-cowhide-leather-rugs-38">Modern Leather Rugs</a></li>
					<li><a href="shop/en/fur-rugs-28">Fur Rugs</a></li>
					<li><a href="shop/en/fur-blankets-throws-bedcovers-40">Fur Blankets & Throws</a></li>
					<li><a href="shop/en/cowhide-rug-10">Cowhides</a></li>
					<li><a href="shop/en/sheepskins-rugs-11">Sheepskins</a></li>
					<li><a href="shop/en/fur-cowhide-leather-cushions-37">Cushions</a></li>
					<li><a href="shop/en/interior-decoration-leather-cowhide-fur-33">Articles</a></li>
					<li><a href="shop/en/content/resellers-area-9" class="wholesale">Wholesale</a></li>
					<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="parallax-window" data-parallax="scroll" data-image-src="images/1-patchwork-rug.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Δερμάτινα Χαλιά</h2>
						<center><a href="shop/el/dermatina-xalia-5" class="btn btn-shop">Δερμάτινα<br>χαλιά</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Эксклузивные ковры</h2>
						<center><a href="shop/ru/ekskliuzivnye-kovry-5" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Kuhfell Teppiche</h2>
						<center><a href="shop/en/patchwork-cowhide-rugs-5" class="btn btn-shop">Durchsuchen<br>kuhfell teppiche</a></center>
						<?php } else { ?>
						<h2>Patchwork Cowhide Rugs</h2>
						<center><a href="shop/en/patchwork-cowhide-rugs-5" class="btn btn-shop">Browse our<br>patchwork rugs</a></center>
						<?php } ?>
					</div>
					<div class="col-xs-12 col-sm-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-right">Διαθέτουμε ίσως τα ποιοτικότερα αυθεντικά δερμάτινα χαλιά και σίγουρα την μεγαλύτερη ποικιλία στις καλύτερες τιμές.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-right">Крупнейшая в Европе коллекция эксклюзивных ковров из меха и кожи. В нашем интернет-магазине вы можете найти самые лучшие ковры, ручной работы, высокого качестве и получить специальные скидки.</p>
						<?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Wir können die besten authentischen kuhfell teppiche haben und sicherlich die größte vielfalt von den besten preisen.</p>
						<?php } else { ?>
						<p class="p-large text-right">We have the highest quality of genuine cowhide leather rugs, the largest variety in Europe and amazing prices.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/2-modern-leather.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-push-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Μοντέρνα Δερμάτινα Χαλιά</h2>
						<center><a href="shop/el/moderna-dermatina-xalia-38" class="btn btn-shop">Μοντέρνα<br>χαλιά</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Современные ковры</h2>
						<center><a href="shop/ru/sovremennye-kovry-38" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Moderne Leder Teppiche</h2>
						<center><a href="shop/en/modern-cowhide-leather-rugs-38" class="btn btn-shop">Durchsuchen<br>moderne teppiche</a></center>
						<?php } else { ?>
						<h2>Modern Leather Rugs</h2>
						<center><a href="shop/en/modern-cowhide-leather-rugs-38" class="btn btn-shop">Browse our<br>modern rugs</a></center>
						<?php } ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-sm-pull-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-left">Επιλέγοντας αυθεντικά μοντέρνα χαλιά από δέρμα, μπορείτε να δώσετε στο σπίτι ή στον επαγγελματικό σας χώρο έναν πιο μοντέρνο ή πιο κλασικό χαρακτήρα, ανάλογα με το ύφος που σας ταιριάζει.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-left">Коллекция современных ковров Каждый ковер имеет свою стандартную комплектацию. При создание современных ковров, используются сложные методы их решения, с учетом мельчайших деталей, охватывающих все варианты, будь то классический стиль или современный.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Wenn sie authentische moderne leder teppiche wallen, können sie Ihr zuhause oder am arbeitsplatz eine modernere oder klassisch stil in der natur geben, abhängig von der art die zu ihnen passt.</p>
						<?php } else { ?>
						<p class="p-large text-left">By choosing our authentic modern leather rugs, you can give your home or workplace a modern or classic character, depending on the style that best suits you.</p>
						<?php } ?>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/3-fur-carpet.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Γούνινα Χαλιά</h2>
						<center><a href="shop/el/gounina-xalia-28" class="btn btn-shop">Γούνινα<br>χαλιά</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Ковры из меха</h2>
						<center><a href="shop/ru/kovry-iz-mexa-28" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Fell Teppiche</h2>
						<center><a href="shop/en/modern-cowhide-leather-rugs-38" class="btn btn-shop">Durchsuchen<br>fell teppiche</a></center>
						<?php } else { ?>
						<h2>Fur Rugs</h2>
						<center><a href="shop/en/fur-rugs-28" class="btn btn-shop">Browse our<br>fur rugs</a></center>
						<?php } ?>
					</div>
					<div class="col-xs-12 col-sm-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-right">Αληθινά Γούνινα Χαλιά. Η απόλυτη έκφραση της πολυτέλειας. Η μοναδική αίσθηση της αυθεντικής γούνας είναι τώρα πια προσιτή.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-right">Подлинные ковры из натуралного меха, как ренар (Fox), норка (норка), шиншиллы, бобра и многие другие виды, который вы видите, лишь некоторые образцы из огромного разнообразия.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Echte Fell Teppiche, Der ultimative Ausdruck von Luxus. Das einzigartige Gefühl von authentischen Fell ist jetzt zugänglich.</p>
						<?php } else { ?>
						<p class="p-large text-right">Real Fur Rugs. The ultimate expression of luxury. The unique feeling of authentic fur is now accessible.</p>
						<?php } ?>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/4-blankets.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6  col-sm-push-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Κουβέρτες & Ριχτάρια</h2>
						<center><a href="shop/el/gounina-rixtaria-kouvertes-40" class="btn btn-shop">Ριχτάρια &amp;<br>κουβέρτες</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Покрывало / Пледы</h2>
						<center><a href="shop/ru/pokryvalo-iz-mexa-40" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Pelzdecken / Felldecken</h2>
						<center><a href="shop/en/fur-blankets-throws-bedcovers-40" class="btn btn-shop">Durchsuchen<br>felldecken</a></center>
						<?php } else { ?>
						<h2>Fur Blankets & Throws</h2>
						<center><a href="shop/en/fur-blankets-throws-bedcovers-40" class="btn btn-shop">Browse our<br>fur blankets</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 col-sm-pull-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-left">Τίποτε δεν μπορεί να συγκριθεί με μια αληθινή γούνινη κουβέρτα ή ριχτάρι. Αποτελεί μία ολόκληρη ενότητα στην διακόσμηση του χώρου, αναδεικνύει το εκλεπτυσμένο στυλ και το αυθεντικό ακριβό γούστο σας.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-left">Мы продаём только оригиналние,роскошные меховые покрывало. Откройте для себя роскошыные покрывало из натуралного меха в высоком качестве.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Nichts kann zu einem echten felldecke pelzdecken oder wurf verglichen warden. Es ist ein ganzer abschnitt in der dekoration und unterstreicht die raffinierte und authentische teuren geschmack.</p>
						<?php } else { ?>
						<p class="p-large text-left">Nothing compares to a real fur blanket or throw. It highlights your sophisticated style and authentic expensive taste.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/5-cowhide.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Cowhides</h2>
						<center><a href="shop/el/xalia-derma-ageladas-10" class="btn btn-shop">Δέρματα<br>αγελάδας</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Шкуры</h2>
						<center><a href="shop/ru/shkury-10" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Kuhfell</h2>
						<center><a href="shop/en/cowhide-rug-10" class="btn btn-shop">Durchsuchen<br>kuhfell</a></center>
						<?php } else { ?>
						<h2>Cowhides</h2>
						<center><a href="shop/en/cowhide-rug-10" class="btn btn-shop">Browse our<br>cowhides</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-right">Ολόκληρα δέρματα αγελάδος για χαλιά. Υπέροχα και μοναδικά, το κάθε ένα με την δική του ξεχωριστή μοναδική ομορφιά και προσωπικότητα. Συμπληρώνουν την εσωτερική διακόσμηση του χώρου σας.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-right">Шкуры являются уникальными и украсят любое помещение, такие как: дома, бары, рестораны, гостиницы и т.д. Все шкуры великолепны. Кроме того, они не занимают слишком много места и легко складываются и хранятся.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Ganze kuh leder für teppiche. Wunderbar und einzigartig, jeder mit seiner eigenen speziellen einzigartigen Schönheit und Persönlichkeit. Ergänzen Sie Ihren Innenraum.</p>
						<?php } else { ?>
						<p class="p-large text-right">Entire cowhides as rugs. Wonderful and unique, each with its own beauty and personality. Complement the interior decoration of your spaces.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/6-sheepskin.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-push-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Sheepskins</h2>
						<center><a href="shop/el/xalia-apo-derma-provatou-11" class="btn btn-shop">Δέρματα<br>προβάτου</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Kовры из овчины</h2>
						<center><a href="shop/ru/kovry-iz-ovchiny-11" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Schaffelle</h2>
						<center><a href="shop/en/sheepskins-rugs-11" class="btn btn-shop">Durchsuchen<br>schaffelle</a></center>
						<?php } else { ?>
						<h2>Sheepskins</h2>
						<center><a href="shop/en/sheepskins-rugs-11" class="btn btn-shop">Browse our<br>sheepskins</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 col-sm-pull-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-left">Χαλιά από δέρμα προβάτου. Δίνουν την απόλυτη αίσθηση της απαλότητας. Δεν είναι τυχαίο ότι τα επιλέγουν όλοι για τους πιο ιδιαίτερους χώρους.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-left">У нас есть лучшие ковры из овчины. Мы имеем роскошную коллекцию ковров из натурального меха овчины высокого качества. Они украсят любое помещения и добавят тепло и уют.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Teppiche aus Schaffell. Sie geben das ultimative Gefühl der Weichheit. Es ist kein Zufall, dass alle für die besonderen Orten entscheiden.</p>
						<?php } else { ?>
						<p class="p-large text-left">Rugs made of sheepskin. They give the ultimate feeling of softness. It is no coincidence that everyone is picking them for the most special places.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/7-pillows.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Μαξιλάρια</h2>
						<center><a href="shop/el/gounina-dermatina-maxilaria-37" class="btn btn-shop">Μαξιλάρια</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Подушки из меха</h2>
						<center><a href="shop/ru/podushki-iz-mexa-37" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Pelzkissen</h2>
						<center><a href="shop/en/fur-cowhide-leather-cushions-37" class="btn btn-shop">Durchsuchen<br>Pelzkissen</a></center>
						<?php } else { ?>
						<h2>Cushions</h2>
						<center><a href="shop/en/fur-cowhide-leather-cushions-37" class="btn btn-shop">Browse our<br>pillow covers</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-right">Γούνινα & Δερμάτινα Μαξιλάρια. Απαλά, ζεστά, πολυτελή, μοντέρνα, ταιριάζουν παντού και προσθέτουν την τελευταία λέξη στην διακόσμηση. Ό,τι καλύτερο μπορείτε να σκεφτείτε για να διακοσμήσετε το σπίτι σας.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-right">великолепные и уникальные подушки из меха и кожи. Они добавят последний штрих в украшение вашего дома. Мягкие, роскошные, в современном стиле, которые украсят любое помещение.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Pelz und Leder Kissen. Weich, warm, luxuriös, modern, passen überall. Das Beste, was Sie sich vorstellen können Ihr Haus zu schmücken.</p>
						<?php } else { ?>
						<p class="p-large text-right">Fur & Leather Cushions. Soft, warm, luxurious, modern, they fit everywhere and add the final touch to your home's decoration.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/8-furniture.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-push-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Αντικείμενα</h2>
						<center><a href="shop/el/dermatina-gounina-pouf-skampo-anaklindra-33" class="btn btn-shop">Αντικείμενα</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Меховые изделия</h2>
						<center><a href="shop/ru/mexovye-izdelia-33" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Objecte</h2>
						<center><a href="shop/en/interior-decoration-leather-cowhide-fur-33" class="btn btn-shop">Durchsuchen<br>objecte</a></center>
						<?php } else { ?>
						<h2>Articles</h2>
						<center><a href="shop/en/interior-decoration-leather-cowhide-fur-33" class="btn btn-shop">Browse our<br>deco items</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 col-sm-pull-6 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-left">Αντικείμενα από Γούνα και Δέρμα. Σκαμπό, πουφ, καθρέπτες, επενδύσεις επίπλων, καλύματα και αναρίθμητες άλλες ιδέες διακόσμησης που εναρμονίζονται με τον χώρο, προσφέροντας ζεστασιά και αισθητική.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-left">Все меховые изделия, как, пуфики, зеркала, диваны, кресла, настенная плитка, половая плитка и все что вы можете представить могут создать наши специалисты. Ультро-современные дизайн, коллекция и широки ассортимент меховых изделий, позволит вам украсить ваши дома, офисы, магазины и отели по всему миру.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Objekte aus Fell und Leder. Hocker, Spiegel, Möbel Investition, Abdeckungen und unzählige andere dekorative Ideen, die mit dem Raum zu harmonisieren und bietet Wärme und Ästhetik.</p>
						<?php } else { ?>
						<p class="p-large text-left">Objects from fur and leather. Stools, mirrors, furniture covers and countless other decorative ideas that harmonize with space, offering warmth and delicate aesthetics.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/9-offers.jpg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<?php	if (LANG=='gr') { ?>
						<h2>Προσφορές</h2>
						<center><a href="shop/el/dermatina-gounina-xalia-prosfores-ekptoseis-43" class="btn btn-shop">Προσφορές</a></center>
						<?php } elseif (LANG=='ru') { ?>
						<h2>Скидки</h2>
						<center><a href="shop/ru/skidki-kovrov-43" class="btn btn-shop">пролистать</a></center>
            <?php } elseif (LANG=='de') { ?>
            <h2>Angebot</h2>
						<center><a href="shop/en/sales-cow-hide-leather-furs-rugs-43" class="btn btn-shop">Durchsuchen<br>angebot</a></center>
						<?php } else { ?>
						<h2>Sales</h2>
						<center><a href="shop/en/sales-cow-hide-leather-furs-rugs-43" class="btn btn-shop">Browse our<br>unique offers</a></center>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-xs-12 contblokw">
						<?php	if (LANG=='gr') { ?>
						<p class="p-large text-right">Μεγάλες προσφορές και εκπτώσεις. Καταργημένα σχεδια σε ειδικές τιμές. Προσπαθούμε όλο τον χρόνο να έχουμε χαλιά δερμάτινα και γούνινα οικονομικά και με μεγάλη έκπτωση. Φθηνά, αλλά πάντα με την ποιότητα της Fur Home.</p>
						<?php } elseif (LANG=='ru') { ?>
						<p class="p-large text-right">Вы можете купить по очень низкой цене ковры в нашем интернет-магазине. Увеличивая наш ассортимент товаров мы стараемся создать более экономичную продукцию с большими скидками.</p>
            <?php } elseif (LANG=='de') { ?>
            <p class="p-large text-right">Große Sonderangebote und Rabatte. Nicht mehr Designs zu Sonderpreisen. Wir versuchen die ganze zeit leder teppiche wirtschaftlich und mit großen Rabatt haben. Billig, aber immer mit der qualität der FUR HOME.</p>
						<?php } else { ?>
						<p class="p-large text-right">Our promotions and discounts area. Discontinued designs at special prices. Inexpensive, but always with the unparalleled quality of Fur Home.</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/10-store.jpg">
		<div class="row">
			<div class="container contblokb">
				<div class="row">
					<div class="col-xs-12">
						<h1>Fur & Leather interior decoration</h1>
					</div>
				</div>
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
  <div class="alert alert-dismissible" role="alert" id="newsletter">
    <a href="gift-voucher.php" onclick="ga('send', 'event', 'button', 'click', 'offers');"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--<script src="js/jquery-1.12.4.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/parallax.min.js"></script>
<?php include('inc/body_scripts.inc.php');?>
</body>
</html>
