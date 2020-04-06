<?php

    include 'koneksi.php';

    if(isset($_POST['simpan']))
    {
        $nis = $_POST['NIS'];
        $Nama = $_POST['Nama'];
        $Jurusan = $_POST['Jurusan'];
        $Kelas = $_POST['Kelas'];
        $Alamat = $_POST['Alamat'];
        $nilai_mw = $_POST['Nilai Web'];
        $nilai_mpbo = $_POST['Nilai PBO'];
        $nilai_mb = $_POST['Nilai Basdat'];
        $nilai_md = $_POST['Nilai Desain'];
        $nilai_mp = $_POST['Nilai Progdas'];

        $jumlah = $nilai_mw + $nilai_mpbo + $nilai_mb + $nilai_md + $nilai_mp;
        $rata = $jumlah / 5;

    if($rata >= 90)
    {
        $predikat ='A';
        $keterangan ='Excellent';
    }
    else if($rata >= 80)
    {
        $predikat ='B';
        $keterangan ='Baik';
    }
    else if($rata >= 70)
    {
        $predikat ='C';
        $keterangan ='Cukup';
    }
    else if($rata >= 60)
    {
        $predikat ='D';
        $keterangan ='Kurang';
    }
    else if($rata<= 50)
    {
        $predikat='E';
        $keterangan='Rendah';
    }
    $sql = "INSERT INTO crew (NIS, Nama, Jurusan, Kelas, Alamat, Nilai Web, Nilai PBO, Nilai Basdat, Nilai Desain, Nilai Progdas,Nilai Rata Rata, Predikat Nilai, Keterangan)
            VALUES ('$nisn', '$nama', '$jurusan', '$kelas', '$alamat', '$nilai_mw', '$nilai_mpbo', '$nilai_mb', '$nilai_md', '$nilai_mp', '$rata', '$predikat', '$keterangan')";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
    header("Location: index.php");
    }
    else
    {
    header("Location: index.php");
    }
}
else
{
    header("Location: tambah.php");
}
