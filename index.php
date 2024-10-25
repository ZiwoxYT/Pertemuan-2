<?php
echo "=============== CONTOH PERSEGI ===============<br><br>";

// Menghitung luas persegi
$sisi = 5;
$luas = $sisi * $sisi;
echo "Menghitung luas persegi: <br>";
echo "Sisi = $sisi<br>";
echo "Luas persegi (L = sisi × sisi) = $sisi × $sisi = $luas<br><br>";

// Membuat function untuk menghitung luas persegi
function rumus_persegi($sisi)
{
    $hasil = $sisi * $sisi;
    return $hasil;
}

$s = 10;
$hasil_penjumlahan = rumus_persegi($s);
echo "Menghitung luas persegi menggunakan fungsi: <br>";
echo "Sisi = $s<br>";
echo "Luas persegi (L = sisi × sisi) = $s × $s = $hasil_penjumlahan<br><br>";

// Membuat class 
class Rumus_persegi
{
    function rumus_persegi($sisi)
    {
        $jawaban = $sisi * $sisi;
        return $jawaban;
    }
}

$persegi = new Rumus_persegi;
$sisiClass = 7;
$luasClass = $persegi->rumus_persegi($sisiClass);
echo "Menghitung luas persegi menggunakan class: <br>";
echo "Sisi = $sisiClass<br>";
echo "Luas persegi (L = sisi × sisi) = $sisiClass × $sisiClass = $luasClass<br><br>";

echo "=============== LUAS PERSEGI PANJANG ===============<br><br>";

// Menghitung luas persegi panjang
$panjang = 8;
$lebar = 4;
$luasPersegiPanjang = $panjang * $lebar;
echo "Menghitung luas persegi panjang: <br>";
echo "Panjang = $panjang, Lebar = $lebar<br>";
echo "Luas persegi panjang (L = panjang × lebar) = $panjang × $lebar = $luasPersegiPanjang<br><br>";

// Membuat function untuk menghitung luas persegi panjang
function rumus_persegi_panjang($panjang, $lebar)
{
    $hasil = $panjang * $lebar;
    return $hasil;
}

$panjangFungsi = 10;
$lebarFungsi = 5;
$hasilPenjumlahanPanjang = rumus_persegi_panjang($panjangFungsi, $lebarFungsi);
echo "Menghitung luas persegi panjang menggunakan fungsi: <br>";
echo "Panjang = $panjangFungsi, Lebar = $lebarFungsi<br>";
echo "Luas persegi panjang (L = panjang × lebar) = $panjangFungsi × $lebarFungsi = $hasilPenjumlahanPanjang<br><br>";

// Membuat class untuk menghitung luas persegi panjang
class Rumus_persegi_panjang
{
    function rumus_persegi_panjang($panjang, $lebar)
    {
        $jawaban = $panjang * $lebar;
        return $jawaban;
    }
}

$persegiPanjang = new Rumus_persegi_panjang();
$panjangClass = 9;
$lebarClass = 6;
$luasClassPanjang = $persegiPanjang->rumus_persegi_panjang($panjangClass, $lebarClass);
echo "Menghitung luas persegi panjang menggunakan class: <br>";
echo "Panjang = $panjangClass, Lebar = $lebarClass<br>";
echo "Luas persegi panjang (L = panjang × lebar) = $panjangClass × $lebarClass = $luasClassPanjang<br><br>";

echo "=============== KELILING PERSEGI PANJANG ===============<br><br>";

// Menghitung keliling persegi panjang
$kelilingPersegiPanjang = 2 * ($panjang + $lebar);
echo "Menghitung keliling persegi panjang: <br>";
echo "Panjang = $panjang, Lebar = $lebar<br>";
echo "Keliling persegi panjang (K = 2 × (panjang + lebar)) = 2 × ($panjang + $lebar) = $kelilingPersegiPanjang<br><br>";

// Membuat function untuk menghitung keliling persegi panjang
function rumus_keliling_persegi_panjang($panjang, $lebar)
{
    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}

$kelilingFungsi = rumus_keliling_persegi_panjang($panjangFungsi, $lebarFungsi);
echo "Menghitung keliling persegi panjang menggunakan fungsi: <br>";
echo "Panjang = $panjangFungsi, Lebar = $lebarFungsi<br>";
echo "Keliling persegi panjang (K = 2 × (panjang + lebar)) = 2 × ($panjangFungsi + $lebarFungsi) = $kelilingFungsi<br><br>";

// Membuat class untuk menghitung keliling persegi panjang
class Rumus_keliling_persegi_panjang
{
    function rumus_keliling_persegi_panjang($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }
}

$kelilingPersegiPanjangClass = new Rumus_keliling_persegi_panjang();
$kelilingClassPanjang = $kelilingPersegiPanjangClass->rumus_keliling_persegi_panjang($panjangClass, $lebarClass);
echo "Menghitung keliling persegi panjang menggunakan class: <br>";
echo "Panjang = $panjangClass, Lebar = $lebarClass<br>";
echo "Keliling persegi panjang (K = 2 × (panjang + lebar)) = 2 × ($panjangClass + $lebarClass) = $kelilingClassPanjang<br><br>";

echo "=============== KELILING PERSEGI ===============<br><br>";

// Menghitung keliling persegi
$sisi = 6;
$kelilingPersegi = 4 * $sisi;
echo "Menghitung keliling persegi: <br>";
echo "Sisi = $sisi<br>";
echo "Keliling persegi (K = 4 × sisi) = 4 × $sisi = $kelilingPersegi<br><br>";

// Membuat function untuk menghitung keliling persegi
function rumus_keliling_persegi($sisi)
{
    return 4 * $sisi;
}

$sisiFungsi = 8;
$kelilingFungsiPersegi = rumus_keliling_persegi($sisiFungsi);
echo "Menghitung keliling persegi menggunakan fungsi: <br>";
echo "Sisi = $sisiFungsi<br>";
echo "Keliling persegi (K = 4 × sisi) = 4 × $sisiFungsi = $kelilingFungsiPersegi<br><br>";

// Membuat class untuk menghitung keliling persegi
class Rumus_keliling_persegi
{
    function rumus_keliling_persegi($sisi)
    {
        return 4 * $sisi;
    }
}

$persegiKeliling = new Rumus_keliling_persegi();
$sisiClassPersegi = 9;
$kelilingClassPersegi = $persegiKeliling->rumus_keliling_persegi($sisiClassPersegi);
echo "Menghitung keliling persegi menggunakan class: <br>";
echo "Sisi = $sisiClassPersegi<br>";
echo "Keliling persegi (K = 4 × sisi) = 4 × $sisiClassPersegi = $kelilingClassPersegi<br><br>";

echo "=============== LUAS SEGITIGA ===============<br><br>";

// Menghitung luas segitiga
$alas = 7;
$tinggi = 5;
$luasSegitiga = 0.5 * $alas * $tinggi;
echo "Menghitung luas segitiga: <br>";
echo "Alas = $alas, Tinggi = $tinggi<br>";
echo "Luas segitiga (L = 0.5 × alas × tinggi) = 0.5 × $alas × $tinggi = $luasSegitiga<br><br>";

// Membuat function untuk menghitung luas segitiga
function rumus_luas_segitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

$alasFungsi = 10;
$tinggiFungsi = 6;
$luasFungsiSegitiga = rumus_luas_segitiga($alasFungsi, $tinggiFungsi);
echo "Menghitung luas segitiga menggunakan fungsi: <br>";
echo "Alas = $alasFungsi, Tinggi = $tinggiFungsi<br>";
echo "Luas segitiga (L = 0.5 × alas × tinggi) = 0.5 × $alasFungsi × $tinggiFungsi = $luasFungsiSegitiga<br><br>";

// Membuat class untuk menghitung luas segitiga
class Rumus_luas_segitiga
{
    function rumus_luas_segitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }
}

$segitigaLuas = new Rumus_luas_segitiga();
$alasClass = 12;
$tinggiClass = 7;
$luasClassSegitiga = $segitigaLuas->rumus_luas_segitiga($alasClass, $tinggiClass);
echo "Menghitung luas segitiga menggunakan class: <br>";
echo "Alas = $alasClass, Tinggi = $tinggiClass<br>";
echo "Luas segitiga (L = 0.5 × alas × tinggi) = 0.5 × $alasClass × $tinggiClass = $luasClassSegitiga<br><br>";

echo "=============== LUAS LINGKARAN ===============<br><br>";

// Menghitung luas lingkaran
$jariJari = 7;
$luasLingkaran = pi() * ($jariJari * $jariJari); // Menggunakan $jariJari * $jariJari untuk kuadrat
echo "Menghitung luas lingkaran: <br>";
echo "Jari-jari = $jariJari<br>";
echo "Luas lingkaran (L = π × jari-jari²) = π × ($jariJari * $jariJari) = $luasLingkaran<br><br>";

// Membuat function untuk menghitung luas lingkaran
function rumus_luas_lingkaran($jariJari)
{
    return pi() * ($jariJari * $jariJari); // Menggunakan perkalian untuk kuadrat
}

$jariJariFungsi = 9;
$luasFungsiLingkaran = rumus_luas_lingkaran($jariJariFungsi);
echo "Menghitung luas lingkaran menggunakan fungsi: <br>";
echo "Jari-jari = $jariJariFungsi<br>";
echo "Luas lingkaran (L = π × jari-jari²) = π × ($jariJariFungsi * $jariJariFungsi) = $luasFungsiLingkaran<br><br>";

// Membuat class untuk menghitung luas lingkaran
class Rumus_luas_lingkaran
{
    function hitungLuas($jariJari)
    {
        return pi() * ($jariJari * $jariJari); // Menggunakan perkalian untuk kuadrat
    }
}

$lingkaranLuas = new Rumus_luas_lingkaran();
$jariJariClass = 10;
$luasClassLingkaran = $lingkaranLuas->hitungLuas($jariJariClass);
echo "Menghitung luas lingkaran menggunakan class: <br>";
echo "Jari-jari = $jariJariClass<br>";
echo "Luas lingkaran (L = π × jari-jari²) = π × ($jariJariClass * $jariJariClass) = $luasClassLingkaran<br><br>";

echo "=============== KELILING LINGKARAN ===============<br><br>";

// Menghitung keliling lingkaran
$kelilingLingkaran = 2 * pi() * $jariJari;
echo "Menghitung keliling lingkaran: <br>";
echo "Jari-jari = $jariJari<br>";
echo "Keliling lingkaran (K = 2 × π × jari-jari) = 2 × π × $jariJari = $kelilingLingkaran<br><br>";

// Membuat function untuk menghitung keliling lingkaran
function rumus_keliling_lingkaran($jariJari)
{
    return 2 * pi() * $jariJari;
}

$jariJariFungsiKeliling = 9;
$kelilingFungsiLingkaran = rumus_keliling_lingkaran($jariJariFungsiKeliling);
echo "Menghitung keliling lingkaran menggunakan fungsi: <br>";
echo "Jari-jari = $jariJariFungsiKeliling<br>";
echo "Keliling lingkaran (K = 2 × π × jari-jari) = 2 × π × $jariJariFungsiKeliling = $kelilingFungsiLingkaran<br><br>";

// Membuat class untuk menghitung keliling lingkaran
class Rumus_keliling_lingkaran
{
    function hitungKeliling($jariJari)
    {
        return 2 * pi() * $jariJari;
    }
}

$lingkaranKeliling = new Rumus_keliling_lingkaran();
$jariJariClassKeliling = 12;
$kelilingClassLingkaran = $lingkaranKeliling->hitungKeliling($jariJariClassKeliling);
echo "Menghitung keliling lingkaran menggunakan class: <br>";
echo "Jari-jari = $jariJariClassKeliling<br>";
echo "Keliling lingkaran (K = 2 × π × jari-jari) = 2 × π × $jariJariClassKeliling = $kelilingClassLingkaran<br><br>";