<?php
background: url('Content-type: img/head/jpeg');
//------- ��������� ��� ��� � ����.
//���� � ����� ������ ����� � ������� ����� ��������� ���:
//
// themes/image/back_1.jpg  ���:
// themes/image/back-1.png


//����� ���� � ����� � ����������.
//��� ������������ �����!!!
// ������:  themes/image
//����� 'image' - ������ ��� �������!!!
$path = 'image';

//��� ��� ������:
$Fnames = 'back';

//�������� - ��� ��� ����������� �� ����� �����
//���������� � ���� ������ ����� � ����������
// � ������� �������� ��������
$postfix = '_';

//����������(��� �����!)
$ext = 'jpg';

//����� ����� ���������� ������ � �����
//��������������� ��� ����� ����
$maxFileCount = 3;

//------------------����� ��������.

$index = ceil(rand(1,$maxFileCount));
$src = $path.'/'.$Fnames.$postfix.$index.'.'.$ext;
$img = imagecreatefromjpeg($src);

imagejpeg($img);
imagedestroy($img);
?>