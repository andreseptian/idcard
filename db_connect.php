<?php

	$db = new mysqli('localhost', 'root', '', 'idc_staff');

	if ($db->connect_error) {
      die("<h1 style='color:red'><a href='http://blogbugabagi.blogspot.com' target='_blank' rel='noopener noreferrer'>
          Koneksi Gagal buat dulu databasenya lalu import file sql di folder db</h1></a>
      : " . $db->connect_error);
    }
                      
                              
 
?>