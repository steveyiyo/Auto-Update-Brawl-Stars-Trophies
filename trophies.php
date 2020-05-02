<!--
    SteveYi 個人網站
    https://steveyi.net/

    Developed by SteveYi
    https://about.steveyi.net
-->
<?php
$playertag = $_GET['tag'];
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijk5NmE4OGYzLWM4NjQtNGM5My05NmIwLTk5OWMyOTFkMzIzZSIsImlhdCI6MTU4MTYyMzM3MSwic3ViIjoiZGV2ZWxvcGVyL2YwZWU1MTE3LWViY2EtYmRhOC1jMzI3LTMwZGNkYjhjYmQ1ZiIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiMTguMTc4LjY2LjE2NSJdLCJ0eXBlIjoiY2xpZW50In1dfQ.SmMVptIGInpaGCXIwp6U9oeYYohTG8OP1QqFZOsGBz_oIM93vvyW3ruBvVbAlL7wi-m9RFGN-66Irbo6AHIlng";
$url = "https://api.brawlstars.com/v1/players/%23" . urlencode(strtoupper($playertag));
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
} else {
  $nothing = true;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>即時更新獎盃系統</title>
  <link rel="shortcut icon" href="img/icon_trophy.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="css/style.css">
  <meta http-equiv="refresh" content="5" />
</head>
<?php
  if (isset($errormsg)) {
    echo "<a>", '錯誤訊息: 請檢查你的玩家標籤是否錯誤(或是官方正在維護)' , "</a>";
  }
?>
<?php 
  if (isset($nothing)) {
    echo "<h1>", $data["trophies"] , "</h1>";
  }
?>

</body>
</html>
