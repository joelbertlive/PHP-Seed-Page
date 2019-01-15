<?php

class Controller{
    function __construct($f3){}
    
    function beforeRoute($f3){
        $this->setDb($f3);
    }
    
    function afterRoute($f3){}      

    function setDb($f3){
//        $db = new \DB\SQL('mysql:host='.$f3->get('db.host').';port='.$f3->get('db.port').';dbname='.$f3->get('db.name'),$f3->get('db.user'),$f3->get('db.pass'));
//        $f3->set('DB',$db);       
    }    
    
    
}