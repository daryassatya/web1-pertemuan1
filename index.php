<?php
// pHP DASAR

// 1. Standar Output
//  echo, print
// print_r
// var_dump();

// contoh
// echo "Dimas Aryasatya";

// 2. Penulisan Sintaks PHP
// penulisan php didalam html
// penulisan html didalam php 


// 3. Contoh penulisan variable dan tipe data
$nama = "Dimas Aryasatya";
$umur = 20;

// 4. Operator aritmatika
// + -  * / %
$x = 10;
$y = 20;
$hasil = $x + $y;
echo $hasil;

// 5. Penggabungan String / Concatenation
// .
$namaDepan = "Dimas ";
$namaBelakang = "Aryasatya";
$namaPanjang = $namaDepan . $namaBelakang;


// 6. Operator Assignment
//  =, +=, -=, /=, %=, .=
$operatorTambah = "Dimas";
$operatorTambah .= "Aryasatya";


// 7. Operator Perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 == "1") // tidak dinyalakan kerena dapat memberhentikan program untuk debugging

// 8. Operator Identitas
// ===, !==
// var_dump(1 == "1") //true
// var_dump(1 === "1") //flase

// 9. Logika
//  &&, ||, !
// $number = 10;
// var_dump($x < 20 && $x > 5) // tidak dinyalakan kerena dapat memberhentikan program untuk debugging


?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PHP</title>
</head>
<body>
    
    <!-- Contoh penulisan php didalam html -->
    <h1>Hello, nama saya <?= "Dimas";?></h1>
    
    <!-- Contoh penulisan html didalam php  -->
    <?= "<h1>Hello, nama saya Dimas</h1>"; ?>

    <!-- Contoh pemanggilan variable php -->
    <h1>Hello, nama saya <?= $nama;?></h1>

    <h3>Hasil operator matematika : <?= $hasil;?></h3>

    <h3>Nama Panjang : <?= $namaPanjang;?></h3>

    <h3>Contoh salah satu operator assignment : <?= $operatorTambah;?></h3>


    
</body>
</html>