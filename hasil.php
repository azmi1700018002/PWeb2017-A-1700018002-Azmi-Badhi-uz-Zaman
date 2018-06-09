<h1>Hasil Pendaftaran</h1>
<?php


$nama = $_POST['nama'];
$tempatl = $_POST['tempatl'];
$tgl = $_POST['tgl'] ;
$bln = $_POST['bln'] ;
$thn = $_POST['thn'] ;
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$as =$_POST['as'];
$as2 = $_POST['as2'];
$mtk = $_POST['mtk'];
$big = $_POST['big'];
$bin = $_POST['bin'];
$pil1 = $_POST['pil1'];
$pil2 = $_POST['pil2'];
$alasan = $_POST['alasan'];
if(empty($nama)||empty($tempatl)||empty($thn)||empty($alamat)||empty($as2)
||empty($mtk)||empty($big)||empty($bin)||empty($alasan)){
echo"<script>alert('Maaf, Semua Form Harus diisi'); javascript:history.go(-1);</script>";
exit;
}else{
echo"<table border=0>
<tr><td><b>Nama</b></td><td>:</td><td>$nama</td></tr>
<tr><td><b>Tempat Lahir </b></td><td>:</td><td> $tempatl</td></tr>
<tr><td><b>Tanggal Lahir</b></td><td> :</td><td> $tgl $bln $thn </td></tr>
<tr><td><b>Jenis Kelamin</b></td><td> : </td><td>$jk </td></tr>
<tr><td><b>Alamat </b></td><td>:</td><td> $alamat </td></tr>
<tr><td>Asal Sekolah </td><td>:</td><td>$as $as2 </td></tr>
<tr><td align=center>Matematika </td><td>:</td><td>$mtk </td></tr>
<tr><td align=center>Bahasa Inggris </td><td>:</td><td> $big </td></tr>
<tr><td align=center>Bahasa Indonesia </td><td>:</td><td> $bin </td></tr>
<tr><td>Pilihan 1 </td><td>: </td><td>$pil1 </td></tr>
<tr><td>Pilihan 2 </td><td>: </td><td>$pil2 </td></tr>
<tr><td>Alasan Masuk SMA N 3 Boyolali : </td><td>:</td><td> $alasan <br></td></tr></table><br>";
echo"<table border=1 align=center width=95%>
<tr><td>TANGGAL DAFTAR = ";
$t = date('d F y');
echo " $t </td></tr></table>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo '<form align="center"><input value="Cetak" type="button" onClick="window.print()"></form> ';
echo '<div align="center"><a href="pertama.html"><button>Selesai</button></a></div>'

?>