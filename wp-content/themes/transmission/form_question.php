<?php
require_once '../../../wp-load.php';

parse_str($_POST['data'], $indata);

$qstName    = isset($indata['qstName'])    ? trim($indata['qstName'])    : '';
$qstTel     = isset($indata['qstTel'])     ? trim($indata['qstTel'])     : '';
$qstComment = isset($indata['qstComment']) ? trim($indata['qstComment']) : '';

// здесь может быть доп валидация

$message = "    Вопрос о перевозках: \n\r".
" Имя: [".$qstName."]"."\n\r".
" Телефон: [".$qstTel."]"."\n\r".
" Комментарий: [".$qstComment."]"."\n\r";

if ( $qstTel == '' ) {
    $res['result'] = false;
    $res['info'] = "Ошибка! Проверьте введённые данные!";   
} else {
    $res['result'] = wp_mail( get_option('admin_email'), "Вопрос о перевозках.", $message);
    $res['info'] = "Спасибо! Мы Вам перезвоним!";   
}

header('Content-Type: application/json');
echo json_encode($res);