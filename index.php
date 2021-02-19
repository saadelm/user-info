<?php
include('UserInfo.php');

echo UserInfo::device_adapter();
echo '<table border = 1 cellspacing="0" cellpadding="0">';
echo '<tr><td>Browser</td><td><b>'.UserInfo::get_browser().'</b></td></tr><tr><td>Device</td><td><b>'.UserInfo::get_device().'</b></td></tr>';
echo '<tr><td>os</td><td><b>'.UserInfo::get_os().'</b></td></tr>';
echo '<tr><td>user</td><td>'.$_SERVER['HTTP_USER_AGENT'].'</td></tr>';
//print_r($_SERVER['HTTP_USER_AGENT']);
//foreach($_SERVER as $key => $value){
//    echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
//}
echo '</table>'
?>