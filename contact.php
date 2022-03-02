<form action="" method="post">
<input type="text" name="name" placeholder="your name"><br>
<input type="text" name="phone"placeholder="your phone"><br>
<input type="text" name="email"placeholder="your email"><br>
<input type="text" name="addressLabel"placeholder="your address"><br>
<input type="submit" name="submit">
</form>


<?php

include('phpqrcode/qrlib.php');
if(isset($_POST['submit'])){
$tempDir = "informations/".uniqid().time();

// here our data
$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$addressLabel = $_POST['addressLabel'];
$address= $_POST['addressLabel'];
////////////////////////////////////////
 // card qr
$codeContents= 'BEGIN:VCARD'."\n";
$codeContents .= 'VERSION:2.1'."\n";
$codeContents .= 'FN:'.$name."\n";
$codeContents .= 'TEL;WORK;VOICE:'.$phone."\n";
$codeContents .= 'ADR;TYPE=work;'.'LABEL="'.$addressLabel.'":'.$address.';'."\n";
$codeContents .= 'EMAIL:'.$email."\n";
$codeContents .= 'END:VCARD';
QRcode::png($codeContents, $tempDir.'026.png', QR_ECLEVEL_L, 3);
// displaying
echo '<img src="'.$tempDir.'026.png" /> <a href="<?php echo $fileName?>" download>download</a>';
}