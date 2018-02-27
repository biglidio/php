<?php
    // preg_match_all('/(http:\/\/[\w\.\/-]+)/', file_get_contents('http://fatecrl.edu.br'), $results);
    // $urls = array_unique($results[0]);
    
    // $urlsnovas = array();
    // foreach ($urls as $url) {
    //     $urlsnovas[] = $url;
    // }
    
    // $urls = $urlsnovas;
    
    // for ($i = 0; $i < count($urls); $i++) {
    //     for ($j = 0; $j < count($urls); $j++) {
    //         if (strlen($urls[$i]) <= strlen($urls[$j])) {
    //             $aux = $urls[$i];
    //             $urls[$i] = $urls[$j];
    //             $urls[$j] = $aux;
    //         }
    //     }
    // }
    
    // // for ($i = 0; $i < 0; $i++) {
    // //     $urls[$i] = array($urls[$i]);
        
    // //     preg_match_all('/(http:\/\/[\w\.\/-]+)/', file_get_contents($urls[$i][0]), $urls[$i][1]);
    // //     $urls[$i][1] = array_unique($urls[$i][1][0]);
    // // }
    
    
    // echo '<pre>';
    // print_r($urls);
    
    // class Url {
    //     private $title;
    //     private $url;
    //     private $content;
    //     private $filhos;
        
    //     public function __construct($url)
    //     {
    //         $this->content = file_get_contents($url);
    //         preg_match('/<title.*>/i', $this->content, $result);
    //         $this->title = str_replace('</title>', '', str_replace('<title>', '', $result[0]));
    //     }
        
    //     public function showTitle()
    //     {
    //         return $this->title;
    //     }
        
    // }
    
    // $url = new Url('http://www.fatecrl.edu.br');
    // echo '<pre>';
    // print_r($url->showTitle());
    
    for($chapter = 1; $chapter <= 170; $chapter++){
        $content = file_get_contents('http://www.comicextra.com/the-walking-dead/chapter-'.$chapter.'/full');
        preg_match_all('/<img class="chapter_img.*>/i', $content, $result[$chapter]);
        
        for($page = 0; $page < count($result[$chapter][0]); $page++){
            preg_match('/http.*"/i', $result[$chapter][0][$page], $result[$chapter][0][$page]);
            $result[$chapter][0][$page][0] = explode('" alt', $result[$chapter][0][$page][0])[0];
            $result[$chapter][0][$page] = $result[$chapter][0][$page][0];
        }
        
        $result[$chapter] = $result[$chapter][0];    
    }
    
    echo '<pre>';
    print_r($result);
    exit;
?>