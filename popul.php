<?php
if(isset($_POST['name'])){
$user=$_POST['name'];}
if(isset($_POST['phone'])){
$phone=$_POST['phone'];}
if(isset($_POST['order_type'])){
$order=$_POST['order_type'];}
if(empty($user)){
echo "Заполните поле ИМЯ";
exit;}
elseif(empty($phone)){
echo "Заполните поле ТЕлефона";
exit;}
elseif(empty($order)){
echo "Заполните поле ВЫбора тура";
exit;}
else
$to="dasastoanova@gmail.com";
$subject="Письмо с сайта турагенства";
$message="Имя:$user\nТелефон:$phone\nТема листа:$order";
$heders="Content/type:text/plan;charset=utf-8";
$send=mail($to,$subject,$message,$heders);
if($send==true)
{ echo"Сообщение отправлено";}
else { echo"Сообщение НЕотправлено";}
?>