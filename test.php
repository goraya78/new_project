
<?php
$dir    = 'D:\phone\parmjit\selected';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

//print_r($files1);
$file_path = fopen("contacts.csv","w");
//fputcsv($file_path,$files1);
foreach($files1 as $file){
	//echo ($file);
fputcsv($file_path,array($file));
}
fclose($myfile);
die;
?>


<?php
abstract class AbstractSocialShare {
 
  /**
   * Authentication token
   */
  protected $token;
   
  /**
   * Get token
   * @return string
   */
  public function getToken()
  {
  return $this->token;
  }
   
  /**
   * Share
   * @return bool
   */
  abstract public function share(
  );
  
 
}

class Facebook extends AbstractSocialShare {
 
  public function __construct($token)
  {
    $this->token = $token;
  }
 
  public function share()
  {
    return $this->token;
  }
 
}
 
$facebook = new Facebook('facebook_token');
echo $facebook->share();

die;




$ip  = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$url = "http://freegeoip.net/json/$ip";
$ch  = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$data = curl_exec($ch);
curl_close($ch);

if ($data) {
    $location = json_decode($data);
 print_r($location) ;
    $lat = $location->latitude;
    $lon = $location->longitude;

    $sun_info = date_sun_info(time(), $lat, $lon);
    print_r($sun_info);
}
die;

?>


<script language="php"> echo 'dsdsds'; </script>
<?php 
die;
/// Create DOM from URL or file
$html = file_get_html('https://www.plimsoll.co.uk/uk-industries-list-a-to-z/C');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>'; 

	   
	   die('okok');
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,'https://www.plimsoll.co.uk/uk-industries-list-a-to-z/C');
// Execute
$result=curl_exec($ch);
print_r($result);
// Closing
curl_close($ch);

// Will dump a beauty json :3
var_dump(json_decode($result, true));
// Will dump a beauty json :3
var_dump(json_decode($result, true));

?>