<?php

namespace MVC\controllers ;
// namespace for override 
// for can use extends controller
use MVC\models\user;
use MVC\core\helpers;
use MVC\core\session;
use MVC\core\controller;
use GUMP;
use PHPQRCode;
use PHPQRCode\QRcode;
use PHPQRCode\QRimage;

// PHPQRCode\QRimage.php

class homecontroller extends controller{

public function index(){
// $txt="ooo";
// $fileName= uniqid().time().".png";
// QRcode::png($txt,$fileName);

$title="homecontroller";
$this->viwe("home\login",["title"=>$title]);
// 
}


};