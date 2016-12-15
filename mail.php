<?php 
session_start();
  if(isset($_POST["send"])) {
    $UserName = htmlspecialchars($_POST["UserName"]);
    $Email = htmlspecialchars($_POST["e-mail"]);
    $UserPhone = htmlspecialchars($_POST["UserPhone"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["UserName"] = $UserName;
    $_SESSION["e-mail"] = $Email;
    $_SESSION["UserPhone"] = $UserPhone;
    $_SESSION["message"] = $message;
    $letter = "$UserName\n$UserPhone\n$Email\n$message";
    $headers = "From: $UserName\r\nE-mail: $Email\r\nUserPhone: $UserPhone\n Content-type: text/html; charset=utf-8\r\n"; 
    mail("ignat.khodasevich@gmail.com", "Запрос звонка от клиента", $letter, $headers); 
    exit; 

  }

?>
