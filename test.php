<?php

/* $server = '192.168.2.2';
exec ("ping $server",$cmd);
foreach ($cmd as $res) {

	echo '<br>';
	echo convert_cyr_string($res, "d", "w") ;
	
} */

/* $host = 'cdep.ru'; 
$port = 80; 
$waitTimeoutInSeconds = 1; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){  
 
   echo 'It worked cdep'; 
} else {
   echo "t didn.t work"; 
   echo $errStr;
   echo $waitTimeoutInSeconds;
} 
fclose($fp); */

// инициализация сеанса
$ch = curl_init();

// установка URL и других необходимых параметров
curl_setopt($ch, CURLOPT_URL, "http://fb.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// загрузка страницы и выдача её браузеру
curl_exec($ch);

// завершение сеанса и освобождение ресурсов
curl_close($ch);


/* $database = '192.168.2.15:C:\\Voskhod\Судимость-2008\\CONVICTION.GDB';
$user = 'SYSDBA';
$password = 'masterkey';
$db = ibase_connect($database, $user, $password);
if ($db) {echo ("connect");} else echo ("no connect");
ibase_close($db) */

//Подключение к FireBird
function connectFB() {
$host ='192.168.2.15:C:\DATA\JUSTICE\CONVICTION.GDB';
$username = 'SYSDBA';
$password = 'm';
$db = ibase_connect($host, $username, $password);
if ($db){ 
	echo '<br>';
	echo 'It worked - Firebird';
	echo '<br>';
} 
else {
	echo ('No connect');
};
ibase_close($db);
}

connectFB();

  

/* $str_conn = "firebird:host=192.168.2.15;dbname=C:\Voskhod\Судимость-2008\CONVICTION.GDB;charset=UTF8";
$dbh = new PDO($str_conn, "sysdba", "m"); */


//C:\Voskhod\Судимость-2008\CONVICTION.GDB

