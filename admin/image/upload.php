<?php

$upload_file = $_FILES['userfile']['tmp_name'];
 $upload_path = '../../include/img/news/';
 		

 		move_uploaded_file($upload_file,$upload_path . 'test' . '.png');
   		

?>
fds