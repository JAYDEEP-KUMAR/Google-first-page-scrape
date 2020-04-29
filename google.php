<?php
include("simplehtmldom_1_9/simple_html_dom.php");
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=dhoni+dies');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

//echo $result;

$domresult = new simple_html_dom();
$domresult -> load($result);

foreach($domresult -> find('a[href^=/url?]') as $link)
      
    { 
        $str = $link.'<br>';
        echo $str;
       
      
        
    }
     
     
     


?>