 <?php


// Geo

//Get IP Address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//Get data from FreeGeoIP about your IP Address
$url = "http://ip-api.com/json/" . $ip;
//Test US IP $url = "http://ip-api.com/json/208.80.152.201";
//Test UK IP $url = "http://ip-api.com/json/212.58.246.104";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);

//Get City, Country name and Country code from $data

$country_name = print_r($data['country'], true);
$country_code = print_r($data['countryCode'], true);

//lowercase country code
$country_code = strtolower($country_code);

echo '<div class="country">';

//Add "The" for some countries
if ($country_name == "United States"){
  echo "We have detected you are viewing this from The ". $country_name ." <img width='30px' height='15px' id='flag' src='http://www.geonames.org/flags/x/" . $country_code .".gif' /> and have displayed articles below from that region.<br><br>";
}
elseif ($country_name == "United Kingdom"){
  echo "We have detected you are viewing this from The ". $country_name ." <img width='30px' height='15px' id='flag' src='http://www.geonames.org/flags/x/" . $country_code .".gif' /> and have displayed articles below from that region.<br><br>";
}
//For all other countries display this message
else{
  echo "We have detected you are viewing this from ". $country_name ." <img width='30px' height='15px' id='flag' src='http://www.geonames.org/flags/x/" . $country_code .".gif' /> and have displayed articles below from that region.<br><br>";
}

echo '</div>';


//Loads the correct json file depending on location
if ($country_name == "Ireland"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/956/articles.json?order=date"); 
}
elseif ($country_name == "United States"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/22/subcategories/1169/articles.json?order=date");
}
elseif ($country_name == "United Kingdom"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/22/subcategories/1168/articles.json?order=date");
}
elseif ($country_name == "France"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/951/articles.json?order=date");
}
elseif ($country_name == "Germany"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/3/subcategories/75/articles.jso?order=date");
}
elseif ($country_name == "Italy"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/957/articles.json?order=date");
}
elseif ($country_name == "Portugal"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/965/articles.json?order=date");
}
elseif ($country_name == "Austria"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/942/articles.json?order=date");
}
elseif ($country_name == "Belgium"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/943/articles.json?order=date");
}
elseif ($country_name == "Bulgaria"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/944/articles.json?order=date");
} 
elseif ($country_name == "Cyprus"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/945/articles.json?order=date");
} 
elseif ($country_name == "Czech Republic"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/946/articles.json?order=date");
}
elseif ($country_name == "Denmark"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/947/articles.json?order=date");
}
elseif ($country_name == "Finland"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/950/articles.json?order=date");
}
elseif ($country_name == "Greece"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/954/articles.json?order=date");
}
elseif ($country_name == "Hungary"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/955/articles.json?order=date");
}
elseif ($country_name == "Latvia"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/958/articles.json?order=date");
}
elseif ($country_name == "Lithuania"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/959/articles.json?order=date");
}
elseif ($country_name == "Luxembourg"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/960/articles.json?order=date");
}
elseif ($country_name == "Malta"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/961/articles.json?order=date");
}
elseif ($country_name == "Netherlands"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/962/articles.json?order=date");
}
elseif ($country_name == "Norway"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/963/articles.json?order=date");
}
elseif ($country_name == "Poland"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/964/articles.json?order=date");
}
elseif ($country_name == "Romania"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/966/articles.json?order=date");
}
elseif ($country_name == "Russia"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/967/articles.json?order=date");
}
elseif ($country_name == "Scotland"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/968/articles.json?order=date");
}
elseif ($country_name == "Slovakia"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/969/articles.json?order=date");
}
elseif ($country_name == "Spain"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/970/articles.json?order=date");
}
elseif ($country_name == "Sweden"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/971/articles.json?order=date");
}
elseif ($country_name == "Switzerland"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/972/articles.json?order=date");
}
elseif ($country_name == "Turkey"){
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/19/subcategories/973/articles.json?order=date");
}
else{
  $contents = file_get_contents("http://api.feedzilla.com/v1/categories/22/subcategories/1172/articles.json?order=date");
}


//News feed

$results = json_decode($contents, true);
                    

//print_r($results); 

//Print Newsfeed articles
echo '<div class="articles_display">';
if (is_array($results)) {
foreach ($results['articles'] as $summary)
{
    echo '<div class="article">';
    echo '<div class="title">';
    echo "<a href='". $summary['url'] ."'><h3>". strtoupper($summary['title']) ."</h3></a>";
    echo "<p>" . $summary['publish_date'] ." Source: " .$summary['source'] ."</p>";
    echo "</div>";
    echo "<hr><div class='contents'><h4>". $summary['summary'] ."</h4>";
    echo'</div>';
    echo'</div>';
}
  echo'</div>';
}

?>