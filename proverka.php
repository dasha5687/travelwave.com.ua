<?php
if(isset($_POST['user_name'])){
$user=$_POST['user_name'];}
if(isset($_POST['user_phone'])){
$phone=$_POST['user_phone'];}
if(isset($_POST['order_type'])){
$order=$_POST['order_type'];}
if(isset($_POST['user_message'])){
$message=$_POST['user_message'];}
if(empty($user)){
echo "Заполните поле ИМЯ";
exit;}
elseif(empty($phone)){
echo "Заполните поле ТЕлефона";
exit;}
elseif(empty($order)){
echo "Заполните поле ВЫбора тура";
exit;}
elseif(empty($message)){
echo "Заполните поле СООбщение";
exit;}
else
$to="dasastoanova@gmail.com";
$subject="Письмо с сайта турагенства";
$message="Имя:$user\nТелефон:$phone\nВыбраный тур:$order\nСообщение:$message";
$heders="Content/type:text/plan;charset=utf-8";
$send=mail($to,$subject,$message,$heders);
if($send==true)
{ echo"Сообщение отправлено";}
else { echo"Сообщение НЕотправлено";}
?>