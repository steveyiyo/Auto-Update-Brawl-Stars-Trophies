<!--
    SteveYi 個人網站
    https://steveyi.net/

    Developed by SteveYi
    https://about.steveyi.net
-->
<?php
$playertag = $_GET['tag'];
$token = ""; //edit it
$url = "https://api.brawlstars.com/v1/players/%23".urlencode(strtoupper($playertag));
$ch = curl_init($url);
$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);
if (isset($data["reason"])) {
  $errormsg = true;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>
    <?php 
    if (isset($errormsg)) {
      echo '即時獎杯系統' ;
    } else{
      echo $data["name"];
    }
    ?>
  </title>
  <link rel="shortcut icon" href="img/icon_trophy.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="css/style.css">
  <meta http-equiv="refresh" content="5" />
</head>
<?php
  if (isset($errormsg)) {
    echo "<a>", '錯誤訊息: 請檢查你的玩家標籤是否錯誤(或是官方正在維護)' , "</a>";
  } else{
    echo "<h1>", $data["trophies"] , "</h1>";
  }
?>

</body>
</html>
