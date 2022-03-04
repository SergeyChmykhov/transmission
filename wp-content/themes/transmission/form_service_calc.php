<?php
require_once '../../../wp-load.php';

parse_str($_POST['data'], $indata);

$clcFrom = isset($indata['clcFrom']) ? trim($indata['clcFrom']) : '';
$clcWg   = isset($indata['clcWg'])   ? trim($indata['clcWg'])   : '';
$clcTo   = isset($indata['clcTo'])   ? trim($indata['clcTo'])   : '';
$clcVol  = isset($indata['clcVol'])  ? trim($indata['clcVol'])  : '';
$clcName = isset($indata['clcName']) ? trim($indata['clcName']) : '';
$clcTel  = isset($indata['clcTel'])  ? trim($indata['clcTel'])  : '';

// здесь может быть доп валидация

$message = "    Запрос на стоимость перевозки: \n\r".
" Откуда:  [".$clcFrom."]"."\n\r".
" Вес:     [".$clcWg."]"."\n\r".
" Куда:    [".$clcTo."]"."\n\r".
" Объём:   [".$clcVol."]"."\n\r".
" Имя:     [".$clcName."]"."\n\r".
" Телефон: [".$clcTel."]";

if ( $clcTel == '' ) {
    $res['result'] = false;
    $res['info'] = "Ошибка! Проверьте введённые данные!";   
} else {
    $res['result'] = wp_mail( get_option('admin_email'), "Запрос на стоимость перевозки груза.", $message);
    $res['info'] = "Спасибо! Мы Вам перезвоним!";   
}

header('Content-Type: application/json');
echo json_encode($res);