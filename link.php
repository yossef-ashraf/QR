<form action="" method="post">
<input type="text" name="txt" placeholder="link">
<input type="submit">
</form>


<?php
include 'phpqrcode/qrlib.php';

if(isset($_POST['txt'])){
$txt= filter_var ($_POST['txt'], FILTER_SANITIZE_STRING);
$fileName="links/".uniqid().time().".png";
QRcode::png($txt,$fileName);
?>

<img src="<?php echo $fileName ?>" alt="">
<a href="<?php echo $fileName?>" download>download</a>
<?php
}
