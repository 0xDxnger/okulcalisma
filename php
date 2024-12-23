<?php
$ay = 11; // Örnek olarak Mayıs ayını seçtik

switch ($ay) {
    case 1:
        echo "Ocak";
        break;
    case 2:
        echo "Şubat";
        break;
    case 3:
        echo "Mart";
        break;
    case 4:
        echo "Nisan";
        break;
    case 5:
        echo "Mayıs";
        break;
    case 6:
        echo "Haziran";
        break;
    case 7:
        echo "Temmuz";
        break;
    case 8:
        echo "Ağustos";
        break;
    case 9:
        echo "Eylül";
        break;
    case 10:
        echo "Ekim";
        break;
    case 11:
        echo "Kasım";
        break;
    case 12:
        echo "Aralık";
        break;
    default:
        echo "Geçersiz ay!";
        break;
}
echo "<br>";
$gunler=7;
switch($gunler)
{
    case 1:{
        echo "Pazartesi";
        break;
    }
    case 2:{
        echo "Salı";
        break;
    }
    case 3:{
        echo "Çarşamba";
        break;
    }
    case 4:{
        echo"Perşembe";
        break;
    }
    case 5:{
        echo"Cuma";
        break;
    }
    case 6:{
        echo "Cumartesi";
        break;
    }
    case 7:{
        echo"Pazar";
        break;
    }
    default:{
        echo "Geçersiz Gün";
        break;
    }
}
echo "<br>";
$sayi1=5;
$sonuc=1;
for($i=1;$i<=$sayi1;$i++)
{
    echo $i.".Sayi <br>";
}
for($i=1;$i<=$sayi1;$i++)
{
    $sonuc*=$i;

}
echo "Sonuc=".$sonuc."<br>";

echo "<br>";

$kullanici_adi="Semih Alper";
$sifre="1234567";
if($kullanici_adi=="Semih Alper"&&$sifre=="1234567")
{
    echo "Giriş Başarılı!";
}
else
{
    echo "Giriş Başarısız";
}

?>
