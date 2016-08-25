<?php
if($_POST) {
$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => '',
    'title'   => $_POST['title'],
    'comment' => $_POST['dalayed_call'],
    'name'    => '',
    'email'   => '',
    'phone'   => $_POST['phone'],
    'fields'  => array(),
);
  
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
}