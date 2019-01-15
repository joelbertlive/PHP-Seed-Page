<?php
namespace Website;

class Render extends \Controller{

    // $this->grab_keywords($f3);die();
    function grab_keywords($f3){
        $keywords = file_get_contents('http://api.jacksonpoolservice.com/keywords/jps/go');
        $json = json_encode(explode("<br />",$keywords));
        $file = fopen(__DIR__ . '/keywords.json','w');
        fwrite($file, $json);
        fclose($file);
        echo "done";die();
    }
    
    function page($f3){
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;



        $template = new \Template;
        $all_keywords_raw = file_get_contents(__DIR__ . '/keywords.json');
        $all_keywords = json_decode($all_keywords_raw, true);
        
        $cx=0;
        while($cx!= 10){
            $kw = $all_keywords[array_rand($all_keywords,1)];
            $random[$kw] = str_replace(" ","-",$kw);
            $cx++;
        }
        //$ten_random = 
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
        


        $dataset = array(
            'keyword' => $f3->get('PARAMS.keyword'),
            'text' => str_replace("-"," ",$f3->get('PARAMS.keyword')),
            'random' => $random,
            'generated_time' => $total_time
        );
        
        //var_dump($dataset);die();
        
        $f3->set('dataset',$dataset);
        echo $template->render('template.html');
        die();

    }  
    
}