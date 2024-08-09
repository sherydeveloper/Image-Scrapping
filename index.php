<?php
// Initialization of curl
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://bigbasket.pk/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
// echo $result;
curl_close($ch);
preg_match_all('!//bigbasket.pk/assets/uploads/(.*).png!', $result, $data);
$finalArr = array_unique($data[0]);
// Just to see the output...

// echo "<prev>";
// print_r($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Image Scrapper</title>
    <style>
        .scrapped_img{
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    foreach($finalArr as $list){

        echo "<img src='$list' class ='scrapped_img'>";
    }
    ?>
</body>
</html>