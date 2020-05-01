<?php
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $cinsiyet = $_POST['cinsiyet'];
    $mail = $_POST['mail'];
    $telefon = $_POST['telefon'];

    echo "<table>";
    echo "<tr>";
    echo "<td>Adı:</td>";
    echo "<td>$ad</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Soyadı:</td>";
    echo "<td>$soyad</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Cinsiyeti:</td>";
    echo "<td>$cinsiyet</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>E-Maili:</td>";
    echo "<td>$mail</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Telefonu:</td>";
    echo "<td>$telefon</td>";
    echo "</tr>";
    echo "</table>";
        
?>