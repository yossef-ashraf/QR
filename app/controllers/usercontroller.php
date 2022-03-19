<?php

namespace MVC\controllers ;
// namespace for override 
use MVC\core\controller;
// for can use extends controller
use MVC\models\qr;
use MVC\core\session;
use GUMP;
use PHPQRCode\Constants;
use PHPQRCode\QR_ECLEVEL_L;
use PHPQRCode\QRcode;

class usercontroller extends controller{

public function __construct(){
Session::Start();
$user_data = Session::Get('user');
if(empty($user_data)){
    $this->redirect('/home/index');
die;}
}

public function index()
{
$user_id = Session::Get('id');
    $qr= new qr;
    $qr=$qr->GetAllQr($user_id);
//    var_dump($qr);
    $title="qrs";
$this->viwe("user\qrs",["title"=>$title,"qr"=>$qr]);
//
}

public function formqr(){
$title="form qr";
$this->viwe("user\\formqr",["title"=>$title]);
//
}

public function postqrs(){
$v= GUMP::is_valid($_POST, [
'qrs'=>['required']
]);
if ($v == 1) {
    $fileName="qr/".uniqid().time().".png";
    QRcode::png($_POST['qrs'],$fileName , Constants::QR_ECLEVEL_L,5);
$data_arr = [
    'qrs' => $_POST['qrs'],
    'QrPath' => $fileName,
    'user_id' => Session::Get('id')
];
$qr= new qr;
$qr->SetQr($data_arr);
$this->redirect('/user/index');
}
}




    public function formqruser(){
        $title="form qr";
        $this->viwe("user\\formqruser",["title"=>$title]);
    }

    public function postQrUser(){
        $v= GUMP::is_valid($_POST, [
            'name'=>['required'],
            'phone'=>['required'],
            'email'=>['required'],
            'addressLabel'=>['required']
        ]);
        if ($v == 1)
        {

        $tempDir = "qr/".uniqid().time().'.png';
        // here our data
        $name         = $_POST['name'];
        $phone        = $_POST['phone'];
        $email        = $_POST['email'];
        $addressLabel = $_POST['addressLabel'];
        $address      = $_POST['addressLabel'];
        ////////////////////////////////////////
        // card qr
        $codeContents  = 'BEGIN:VCARD'."\n";
        $codeContents .= 'VERSION:2.1'."\n";
        $codeContents .= 'FN:'.$name."\n";
        $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n";
        $codeContents .= 'ADR;TYPE=work;'.'LABEL="'.$addressLabel.'":'.$address.';'."\n";
        $codeContents .= 'EMAIL:'.$email."\n";
        $codeContents .= 'END:VCARD';
        QRcode::png($codeContents, $tempDir, Constants::QR_ECLEVEL_L,3);


            $data_arr = [
                'qrs' => $codeContents,
                'QrPath' => $tempDir,
                'user_id' => Session::Get('id')
            ];
            $qr= new qr;
            $qr->SetQr($data_arr);
            $this->redirect('/user/index');
        }
    }

    public function logout()
    {
        Session::Stop();
        $this->redirect('/home/index');
    }


    public function deleteQr()
    {
//        echo $_POST['id']; die ;
        $v= GUMP::is_valid($_POST, [
            'id'=>['required'],
            'path'=>['required']
        ]);
        if ($v == 1) {
            $qr= new qr;
            $qr->deleteQr($_POST['id']);
            unlink($_POST['path']);
        }


        $this->redirect('/user/index');


}

}