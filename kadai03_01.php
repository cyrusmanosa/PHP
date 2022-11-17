<?php
  $addressList = 
  [
    $osaka = 
    [
      "prefectural" => "大阪府",
      "prefectural_capital" => "大阪市",
      "zip" => 540-8570,
      "address" => "大阪府大阪市中央区大手前２丁目１−２２",
      "building" => "大阪府庁",
      "location" => ["latitude" => 34.6863158,"longitude" => 135.5175208]
    ],
    $kyoto = 
    [
      "prefectural" => "京都府",
      "prefectural_capital" => "京都市",
      "zip" => 602-8570,
      "address" => "京都府京都市上京区薮之内町",
      "building" => "京都府庁",
      "location" => ["latitude" => 35.0217475,"longitude" => 135.7532841]
    ],
    $tokyo = 
    [
      "prefectural" => "東京都",
      "prefectural_capital" => "新宿区",
      "zip" => 540-8570,
      "address" => "東京都新宿区西新宿二丁目８-1",
      "building" => "東京都庁",
      "location" => ["latitude" => 35.6896385,"longitude" => 139.689912]
    ],
    $Hokkaido = 
    [
      "prefectural" => "北海道",
      "prefectural_capital" => "札幌市",
      "zip" => 060-8588,
      "address" => "北海道札幌市中央区北３条西６丁目",
      "building" => "北海道庁",
      "location" => ["latitude" => 43.0643074,"longitude" => 141.3446793]
    ],
    $okinawa = 
    [
      "prefectural" => "沖縄県",
      "prefectural_capital" => "那覇市",
      "zip" => 900-0021,
      "address" => "沖縄県那覇市泉崎１丁目２−２",
      "building" => "沖縄県庁",
      "location" => ["latitude" => 26.2125243,"longitude" => 127.6799487]
    ]
  ]
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="03-1.css">
  <title>php - kadai03_1</title>
</head>
<body>

<div>
  <?php
      foreach($addressList as $osaka)
      {
        echo '<h1>'.$osaka["prefectural"].'</h1>';
        echo "&nbsp".'<br>';
        echo '〒'.$osaka["address"];
        echo '<pre>';
        
        echo 
        '<iframe
        width= 1000
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCJSdw9G1utS9sBY_xDgf3gVcJOIxuyxH4&q='.$osaka["address"].$osaka["building"].'&center='.$osaka["location"]["latitude"].",".$osaka["location"]["longitude"].'&zoom=13">   
        </iframe>';
        echo '</pre>';
      }
  ?>
</div>
</body>
</html>