<?php
background: url('Content-type: img/head/jpeg');
//------- Настройка для имён и пути.
//путь и имена файлов могут к примеру иметь следующий вид:
//
// themes/image/back_1.jpg  или:
// themes/image/back-1.png


//Укажи путь к папке с картинками.
//Без закрывающего слеша!!!
// Пример:  themes/image
//Здесь 'image' - указан для примера!!!
$path = 'image';

//Имя для файлов:
$Fnames = 'back';

//Постфикс - это как разделитель на конце между
//одинаковым у всех именем файла и уникальным
// у каждого числовым индексом
$postfix = '_';

//расширение(без точки!)
$ext = 'jpg';

//Укажи здесь количество файлов в папке
//предназначенных для смены фона
$maxFileCount = 3;

//------------------Конец настроек.

$index = ceil(rand(1,$maxFileCount));
$src = $path.'/'.$Fnames.$postfix.$index.'.'.$ext;
$img = imagecreatefromjpeg($src);

imagejpeg($img);
imagedestroy($img);
?>