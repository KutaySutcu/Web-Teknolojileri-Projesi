<?php
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $sifre = $_POST['sifre'];

    if($kullaniciAdi=="b191210018@sakarya.edu.tr" && $sifre=="123")
    {
        echo "Hoşgeldiniz $kullaniciAdi";
    }
    else
    {
        header('Location: loginHatali.html');
    }
?>