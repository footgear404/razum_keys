<?php
$id = $_POST['houseid'];  // curr id from input;
$date = $_POST['date']; // curr date from input;
$domain = 'razum.life';
$time = time();
$app_secret = '98fVGQzSK2u2fsYst5N3dcGEqmt2uf3k3v85';

//generate request
header('Content-Type: text/html; charset=utf-8');
$fields = ['time' => $time, 'domain' => $domain, 'token' => md5($domain . $time . $app_secret) , 'transfer_date' => $date . 'T00:00:00+05:00', 'house_id' => $id];

$opts = ['http' => ['method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => http_build_query($fields) ]];

$results = file_get_contents('https://api.macrocrm.ru/estate/transfer/getFreeTimes/', false, stream_context_create($opts));

$json = json_decode($results, JSON_UNESCAPED_UNICODE);

// echo $json['data'];
// $data = array(
//           0 => '08:00',
//           1 => '08:30',
//           2 => '09:00',
//           3 => '09:30',
//           4 => '16:30'
//         );
$bt1 = 0;
$bt2 = 0;
$bt3 = 0;
$bt4 = 0;
$bt5 = 0;
// echo "<h1>" . $id . "</h1>";
foreach ($json['data'] as $currTime) {
  if ($currTime == '09:30' || $currTime == '10:00' || $currTime == '10:30') {
    ++$bt1;
    }
  if ($currTime == '11:00' || $currTime == '11:30' || $currTime == '12:00') {
    ++$bt2;
    }
  if ($currTime == '13:30' || $currTime == '14:00' || $currTime == '14:30') {
    ++$bt3;
    }
  if ($currTime == '15:00' || $currTime == '15:30' || $currTime == '16:00') {
    ++$bt4;
    }
  if ($currTime == '16:30' || $currTime == '17:00' || $currTime == '17:30') {
    ++$bt5;
    }
    // $currtime = date('H:i', strtotime($currTime));
    // echo '<div class="timePicker" value="' . $currtime . '">' . $currtime . '</div>';
}
if ($bt1 == 3) {
  // echo '<div class="timePicker" onclick="test(event)">9:30</div>';
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="9:30" name="toggle"><span>9:30</span></label>';
}
else {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="9:30" name="toggle" disabled><span>9:30</span></label>';
}
if ($bt2 == 3) {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="11:00" name="toggle"><span>11:00</span></label>';
}
else {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="11:00" name="toggle" disabled><span>11:00</span></label>';
}
if ($bt3 == 3) {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="13:30" name="toggle"><span>13:30</span></label>';
}
else {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="13:30" name="toggle" disabled><span>13:30</span></label>';
}
if ($bt4 == 3) {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="15:00" name="toggle"><span>15:00</span></label>';
}
else {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="15:00" name="toggle" disabled><span>15:00</span></label>';
}
if ($bt5 == 3) {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="16:30" name="toggle"><span>16:30</span></label>';
}
else {
  echo '<label class="checkbox-time noselect"><input type="radio" class="checkbox-item" value="16:30" name="toggle" disabled><span>16:30</span></label>';
}
?>
