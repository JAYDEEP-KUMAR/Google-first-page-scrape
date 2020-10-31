<?php
require 'simplehtmldom_1_9/simple_html_dom.php';
     /* change url*/
     $html = file_get_contents('https://manavhostel.000webhostapp.com/google.php');
//Create a new DOM document
$dom = new DOMDocument;

//Parse the HTML. The @ is used to suppress any parsing errors
//that will be thrown if the $html string isn't valid XHTML.
@$dom->loadHTML($html);

//Get all links. You could also use any other tag name here,
//like 'img' or 'table', to extract other tags.
$links = $dom->getElementsByTagName('a');

//Iterate over the extracted links and display their URLs
foreach ($links as $link){
    //Extract and show the "href" attribute.
    //echo $link->nodeValue;
    
    $link = $link->getAttribute('href').'<br><br>';
    
    $si = strpos($link,"http");
    $ei = strpos($link,"&")-7;
    $l = substr($link,$si,$ei);
    
    
    
    echo $l.'<br><br>';
    //echo $link->getAttribute('href'), '<br><br>';
    
    $html = file_get_html("$l");
    $title = $html->find('p',2);
//$image = $html->find('img', 0);

print_r $title->plaintext.'<br><br><br><br>';
     #pahele echo tha baad me print_r kiya hai
# print_r is used to display human-readable information about a variable compared with echo
    
}
   


?>
