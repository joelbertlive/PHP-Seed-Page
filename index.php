<?php

date_default_timezone_set('America/New_York');
require_once('vendor/autoload.php');

$f3 = \Base::instance();
$configPath = str_replace("/index.php","",__FILE__);
$configs = array_values(array_diff(scandir($configPath .'/config'), array('..', '.')));
foreach($configs as $config){
    $f3->config($configPath.'/config/'.$config);
}

$f3->set('DOMAIN',$_SERVER['HTTP_HOST']);

$f3->route('GET /',function($f3){
    //$f3->reroute('/pool-service');die();
    echo "<a href='/pool-service'>Pool Service</a>";die();
    
    $keywords = file_get_contents('http://api.jacksonpoolservice.com/keywords/jps/go');
    $all = explode("<br />",$keywords);
    $target_keyword = strtolower($all[array_rand($all,1)]);
    $url_slug = str_replace(" ","-",$target_keyword);
    
    
    echo $target_keyword."<br />";
    echo $url_slug;die();
    $template = new \Template;
    echo $template->render('template.html');
    die();
    var_dump(explode("<br />",$keywords));die();
});



$f3->run(); // Send it off!