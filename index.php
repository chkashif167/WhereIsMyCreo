<!DOCTYPE html>
<html>
<head>
<title>Where Is My Creo</title>
<link rel="stylesheet" href="css/owl.carousel.css">
<?php include 'includes/header-top.php'; ?>
</head>
<body>
<header id="header" class="header">
<?php include 'includes/header.php'; ?>
</header>

<?php if ( isset($_GET['sucess']) && $_GET['sucess'] == 1 )
{
     // treat the succes case ex:
     echo "<div class='sucess bgc3' align='center'><h1>You have subscribed the subscription sucessfully</h1></div>";
}
elseif(isset($_GET['sucess'])){
    $suc = $_GET['sucess'];
    echo "<div class='sucess bgc3' align='center'><h1>".$suc."</h1></div>";
	}?>
<?php include 'includes/banner-home.php'; ?>
<!-- /header -->


<div class="container-fluid">
<div class="row">
	<div class="slider">
	<img src="images/slide1.jpg" class="img-responsive">
	<img src="images/slide1.jpg" class="img-responsive">
	</div>
	<div class="col-sm-8 dark-banner hdit">
		<div class="dark-overlay"><b>Subscribe to an anonymously awesome t-shirt delivered to your doorstep, only for AED 80/month. Pssst. You’re going to love it. Every month.</b></div>
		<a href="#" class="btn1">how does it work</a>
	</div>
	<div class="col-sm-4 dark-banner atgof">
		<div class="dark-overlay"><b>The only thing more fun than giving is getting. So here’s to that one day of every month when the bell rings, you open the door smiling cheek-to-cheek and remember the glorious day you subscribed yourself to happiness in a box.</b></div>
		<a href="#" class="btn1">AH! THE GIFT OF GIVING</a>
	</div>
	<img src="images/why-we-do.jpg" class="img-responsive">
</div>
</div>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {

     jQuery(".slider").owlCarousel({
          items: 1,
          dots: false,
          autoplay: true,
          loop: true,
          nav: true,
     });

});
</script>
</body>
</html>