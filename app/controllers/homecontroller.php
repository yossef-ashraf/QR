<?php

namespace MVC\controllers ;
// namespace for override 
// for can use extends controller
use MVC\models\user;
use MVC\core\session;
use MVC\core\controller;
use GUMP;

class homecontroller extends controller{

public function index()
{
$title="home log";
$session=Session::Set("errors","");
$this->viwe("home\login",["title"=>$title,'session'=>$session]);
}

public function register()
{
    $title="home register";
$this->viwe("home\\register",["title"=>$title]);
}

};