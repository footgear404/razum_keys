<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>API</title>
  </head>
  <body>
    <?php
    $domain = 'razum.life';
    $time = time();
    $app_secret = 'app secret';

    function redyListOfObjects($domain, $time, $app_secret) {
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

          return $json;

          // echo $json['data']['houses'][0]['title'];
    }

    echo '<h2>К сдаче готовы:</h2>';
    echo '<pre>';
    print_r(redyListOfObjects($domain, $time, $app_secret)); // Список готовых зданий к сдаче
    echo '</pre>';


    function timeIntervaks($domain, $time, $app_secret) {
      header('Content-Type: text/html; charset=utf-8');
        $fields = ['time' => $time, 'domain' => $domain, 'token' => md5($domain . $time . $app_secret),
        'transfer_date' =>	"2022-09-08T00:00:00+05:00",
        'house_id' => '1226915'];

          $opts = [
              'http' => [
              'method' => 'POST', // есть указать GET = не работает
              'header' => 'Content-type: application/x-www-form-urlencoded',
              'content' => http_build_query($fields)
              ]
          ];

          $results = file_get_contents('https://api.macrocrm.ru/estate/transfer/getFreeTimes/', false, stream_context_create($opts));

          $json = json_decode($results, JSON_UNESCAPED_UNICODE);

          return $json;

    }
    echo '<h2>Доступное время</h2>';
    echo '<pre>';
    print_r(timeIntervaks($domain, $time, $app_secret));
    echo '</pre>';


    function reservtime($domain, $time, $app_secret) {
      header('Content-Type: text/html; charset=utf-8');
        $fields = ['time' => $time, 'domain' => $domain, 'token' => md5($domain . $time . $app_secret),
        'transfer_date' =>	"2022-09-15T15:00:00+05:00",
        'house_id' => '1226915',
        'flat_num' => '1',
        'phone' => '+79648887954'];

          $opts = [
              'http' => [
              'method' => 'POST',
              'header' => 'Content-type: application/x-www-form-urlencoded',
              'content' => http_build_query($fields)
              ]
          ];

          $results = file_get_contents('https://api.macrocrm.ru/estate/transfer/add/', false, stream_context_create($opts));

          $json = json_decode($results, JSON_UNESCAPED_UNICODE);

          return $json;

    }


    echo '<h2>Результат резервирования времени</h2>';
    echo '<pre>';
    print_r(reservtime($domain, $time, $app_secret)); // Забронировать время
    echo '</pre>';

     ?>

  </body>
</html>
