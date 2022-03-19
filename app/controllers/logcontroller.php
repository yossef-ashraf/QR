<?php

namespace MVC\controllers ;
// namespace for override 
use MVC\core\controller;
// for can use extends controller
use MVC\core\session;
use MVC\models\user;
use GUMP;



class logcontroller extends controller{


public function __construct(){
Session::Start();
}


public function PostLogin(){
// echo "hi" ;die;
        $v = GUMP::is_valid($_POST, [
            'email' => 'required',
            'pass' => 'required'
        ]);

if ($v == 1) {
$user= new user;
$data=$user->GetUser($_POST['email'],$_POST['pass']);
//var_dump($data[0]->id);die;
if ($data) {
Session::Set("user",$data[0]->name);
Session::Set("id",$data[0]->id);
return $this->redirect('/user/index');
}else {
    $this->redirect('/home/index');
}
}else {

    $this->redirect('/home/index');
}
}
//////////////////////////////////////////////////////////////////
public function RegisterLogin(){
// echo "hi" ;die;
    try {
        $v = GUMP::is_valid($_POST, [
            'email' => 'required',
            'name' => 'required',
            'pass' => 'required'
        ]);
    } catch (\Exception $e) {
        echo "err email";
    }

    if ($v == 1) {
            $data_arr = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'pass' => $_POST['pass'],

            ];
        try {
            $user= new user;
            $data=$user->SetUser($data_arr);
        } catch (\Exception $e) {
            echo "error email : email is exist";
        }
//        var_dump($data);die;
        if (isset($data))
        {
        $this->redirect('/home/index');
        }
    }else
    {
        echo "err valid";
    }
}


}