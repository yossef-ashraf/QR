<?php
namespace  MVC\models ;
use MVC\core\model ;

class qr extends model {

public function GetAllQr($id){
return model::db()->rows("select * FROM qrs WHERE user_id =?", [$id]);
}
// get all user from bd
//

    public function SetQr($data)
    {
        $data=model::db()->insert('qrs', $data);
        return  $data;
    }


public function deleteQr($id){
$data=model::db()->deleteById('qrs', $id);
return  $data;
}
//  delete qr form bd
//

}