<html>

<head>
	<title>test app 1 XD</title>
</head>
<body>

<?php
#echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';



$mas3 = htmlspecialchars($_GET["name"]);
echo $mas3;

function sendMessage($chatID, $messaggio, $token) {
    echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$token1 = "720798548:AAEtmPjFLXGhFBvg-eP10SmFCH0s7h3XWGs";
$chatid1 = "-274836050";
sendMessage($chatid1, $mas3, $token1);

echo $url
?>

</body>
</html>