<?php

namespace MVC\core ;
// namespace for override 


class controller{

public function viwe($path,$pram){
extract($pram); 
require_once(VIEWS.$path.".php");
}
///

public function redirect($path){
header ("LOCATION:".DOMAIN_NAME.$path);
}

}
