<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';


require $_SERVER["DOCUMENT_ROOT"] . "/function/connect.php"; //Подключение к БД


// Каталог, в который мы будем принимать файл:
$uploaddir = './gost/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";


//
$gost_number = htmlspecialchars ( $_REQUEST['gost_number']); //Номер ГОСТа
$gost_name = htmlspecialchars ( $_REQUEST['gost_name']); // Наименование ГОСТа
$gost_type = htmlspecialchars ( $_REQUEST['gost_type']); //Тип ГОСТа 2,19,34,ИСО
$gost_status = htmlspecialchars ( $_REQUEST['gost_status']); // Статутс ГОСТа действует или нет
$gost_comment = htmlspecialchars ( $_REQUEST['gost_comment']); //Комментарий
$gost_upload_name = $_FILES['uploadfile']['name']; // Имя при звгрузки


//Запись в БД

$stmt = $mysqli->prepare("INSERT INTO gost(gost_number, gost_name, gost_type, gost_status, gost_upload_name, gost_comment) VALUES(?,?,?,?,?,?)");
$stmt->bind_param('ssssss', $gost_number, $gost_name, $gost_type, $gost_status, $gost_upload_name, $gost_comment);
$stmt->execute();
echo '<br>';
printf("%s\n", mysqli_stmt_error($stmt));
$stmt->close();
mysqli_close($mysqli);
echo '<a href="form_upload.php">Добавить еще документ*</a>';
?>
