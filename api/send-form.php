<?php
$houseid = $_POST['houseid'];  // curr id from input;
$date = $_POST['date']; // curr date from input;
$phoneNumb = $_POST['phonenumb']; // curr date from input;
$flatNumb = $_POST['flatnumb']; // curr date from input;
$transfer_date = $_POST['transfer_date'];

$domain = 'razum.life';
$time = time();
$app_secret = 'app secret';

header('Content-Type: text/html; charset=utf-8');
  $fields = ['time' => $time, 'domain' => $domain, 'token' => md5($domain . $time . $app_secret),
  'transfer_date' =>	$date . 'T' . $transfer_date . ':00+05:00',
  'house_id' => $houseid,
  'flat_num' => $flatNumb,
  'phone' => $phoneNumb];

    $opts = [
        'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($fields)
        ]
    ];

    $results = file_get_contents('https://api.macrocrm.ru/estate/transfer/add/', false, stream_context_create($opts));

    $json = json_decode($results, JSON_UNESCAPED_UNICODE);

    if ($json['message'] == 'Ошибка обработки запроса') {
      print_r('Время забронировано. <br>Дата: ' . $date . ' <br>Время: ' . $transfer_date);
      print_r('<script type="text/javascript">$(".send-result").css("color", "#799f54");</script>');
    } elseif ($json['message'] == 'Спасибо! Мы записали Вас на указанное время') {
      print_r('Извините, бронирование невозможно');
      print_r('<script type="text/javascript">$(".send-result").css("color", "#f44336");</script>');
    }
    else {
      print_r($json['message']);
      print_r('<script type="text/javascript">$(".send-result").css("color", "#f44336");</script>');
    }
 ?>
