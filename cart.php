<?php 
$giftfor = $_POST["giftmine"];
$giftreceiver = $_POST["giftreceiver"];
$email = $_POST["email"];
$message = $_POST["message"];
$gender = $_POST["gender"];
if($gender == "woman"){
$size   = $_POST["size"];
$shirttypes   = $_POST["shirttypes"];
$favcolor   = $_POST["favcolor"];
$favmovie   = $_POST["favMovie"];
$favsinger = $_POST["favSinger"];
}
$paytime = $_POST["paytype"];
if($paytime == "once"){
$payOnce = $_POST["payOnce"];
}
if($paytime == "payMonthly"){
$payMonthly = $_POST["monthly"];
}
$giftwrapping = $_POST["giftwrapping"];

?>
<!DOCTYPE html>
<html>
<?php
// $giftfor = $_POST["giftmine"];
// $giftreceiver = $_POST["giftreceiver"];
// $email = $_POST["email"];
// $message = $_POST["message"];

// echo $giftfor."<br/>";
// echo $message;
?>
<head>
<?php include 'includes/header-top.php'; ?>
<title>Where Is My Creo | Cart</title>
</head>
<body>
<header id="header" class="header">
<?php include 'includes/header.php'; ?>
</header><!-- /header -->

<div class="container">

</div>

<footer class="site-footer">
<?php include 'includes/footer.php'; ?>
</footer>
</body>
</html>

