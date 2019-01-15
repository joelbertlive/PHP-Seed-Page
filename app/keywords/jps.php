<?php
namespace keywords;
class Jps extends \Controller {
    function go($f3){
        $pre = explode("\n",file_get_contents('keywords/pre',true));
        $pool = explode("\n",file_get_contents('keywords/pool',true));
        $item = explode("\n",file_get_contents('keywords/item',true));
        $post = explode("\n",file_get_contents('keywords/post',true));
        
        
        foreach($pre as $use_pre){
            foreach($pool as $use_pool){
                $long_tails[] = $use_pre." ".$use_pool;
            }
        }
        
        foreach($long_tails as $use_long_tail){
            foreach($item as $use_item){
                $long_tails[] = $use_long_tail." ".$use_item;
            } 
        }      
        
        foreach($long_tails as $use_long_tail){
            foreach($post as $use_post){
                $long_tails[] = $use_long_tail." ".$use_post;
                $long_tails[] = $use_post." ".$use_long_tail;
            } 
        }         
        
        array_unique($long_tails);
        sort($long_tails);
        
        if($_GET['type'] == 'phrase'){
            echo '"'.implode('"<br />"',$long_tails).'"';die();
        }
 
        if($_GET['type'] == 'exact'){
            echo '['.implode(']<br />[',$long_tails).']';die();
        }        
        
        echo implode("<br />",$long_tails);die();
        
        var_dump($long_tails);die();
        var_dump($pool);
        var_dump($item);die();
        
    }
}
