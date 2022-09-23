<?php

$domain = 'razum.life';
$time = time();
$app_secret = 'app secret';
echo "<h1>TTTTTTTTTTTT</h1>";

  header('Content-Type: text/html; charset=utf-8');
    $fields = ['time' => $time, 'domain' => $domain, 'token' => md5($domain . $time . $app_secret)];

      $opts = [
          'http' => [
          'method' => 'POST',
          'header' => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($fields)
          ]
      ];

      $results = file_get_contents('https://api.macrocrm.ru/estate/transfer/getReadyFlats/', false, stream_context_create($opts));

      $json = json_decode($results, JSON_UNESCAPED_UNICODE);

      foreach ($json['data']['houses'] as $name) {
        echo "<option value='" . $name['id'] . "'>" . $name['title'] . "</option>";
      }

      // echo $json['data']['houses'][0]['title'];

?>
