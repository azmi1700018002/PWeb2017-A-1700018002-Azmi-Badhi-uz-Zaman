<html>
<head>
  <title>FORM PENDAFTARAN</title>
 <link rel="stylesheet" type="text/css" href="belakang.css">  
  <table align="center" border=0 cellpadding="20px"
    cellspacing="10px" width="1500spx" height="50px">
    <tr><td class="head" colspan="3" align="left">
      <font color='white' size='7'>SMA N 3 Boyolali</font>
      <br>  
      <font color='white' size='5'>Jl. Perintis Kemerdekaan Boyolali</font>
      <br>  
      <font color='white' size='4'>Telp (0276) 324 456</font>
    </td></tr>    
</table>
</head>
<body>
 
<div align="center"> 
  <a href="intro.html"><button class="atas" > Intro </button></a>
<a href="pertama.html"><button class="atas">Home </button></a>
<a href="rumah.html" ><button class="atas"> Profile </button></a>
<a href="lokasi.html"><button class="atas"> Lokasi </button></a>
<a href="Form.php"><button class="atas" > PPDB </button></a>
</div> 

<form align="center" action=hasil.php method=POST class="kotak">
<table border=0 >
<tr><td><b>Nama</b></td><td align=center>:</td><td><input type=text name="nama" class="nama" ></td></tr>
<tr><td><b>Tempat lahir</b></td><td align=center>:</td><td><input type=text name="tempatl" class="nama"></td></tr>
<tr><td><b>Tanggal lahir</b><td align=center >:</td><td>
<select name="tgl">
<option selected="selected">Tanggal</option>
<?php
for($a=1; $a<=31; $a+=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
<select name="bln">
<option selected="selected">Bulan</option>
<?php
$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=0; $c<$jlh_bln; $c+=1){
echo"<option value=$bulan[$c]> $bulan[$c] </option>";
}
?>
</select>
<select name="thn">
<option selected="selected">Tahun</option>
<?php
for($a=2000; $a>=0001; $a-=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
</td></tr>
<tr><td><b>Jenis Kelamin</b><td align=center>:</td></td><td><input type=radio name=jk value=Laki-laki>Laki-Laki<input type=radio name=jk value=perempuan>Perempuan</td></tr>
<tr><td><b>Alamat </b><td align=center >:</td></td><td><input type=teks name=alamat class="nama"></td></tr>
<tr><td><b>Asal Sekolah </b><td align=center>:</td></td><td><input type=radio name=as value=SMP >SMP<input type=radio name=as value=MTS >MTS
<tr><td></td><td></td><td><input type=teks name=as2 class="nama"></td></tr>
<tr><td><b>Nilai UAN :</b></td><td></td><td></td></tr>
<tr><td align=center>Matematika </td><td align=center>:</td><td><input size="3" type=teks name=mtk maxlength="3" class="nama"></td></tr>
<tr><td align=center>Bahasa Inggris </td><td align=center>:</td><td><input size="3" type=teks name=big class="nama"></td></tr>
<tr><td align=center>Bahasa Indonesia </td><td align=center>:</td><td><input size="3" type=teks name=bin class="nama"></td></tr>
<tr><td><b>Jurusan Yang Dipilih:</b></td><td></td><td></td></tr>
<tr><td>
<ul><li>Pilihan 1 </li></td><td align=center>:</td><td>
<select name="pil1">
<option value="IPA">IPA</option>
<option value="IPS">IPS</option>
<option value="BAHASA">BAHASA</option>
</select></td></tr></ul>
<tr><td>
<ul><li>Pilihan 2 </li></td><td align=center>:</td><td>
<select name="pil2">
<option value="IPA">IPA</option>
<option value="IPS">IPS</option>
<option value="BAHASA">BAHASA</option>
</select></ul></td></tr>
<tr><td valign=top><b>Alasan Masuk SMA N 3 Boyolali</b></td><td valign=top align=center>:</td><td><textarea cols=25 rows=5 name=alasan class="nama" ></textarea></td></tr>
<tr><td colspan=3>
<script type="text/javascript">
function enableButton() {    if(document.getElementById('option').checked){
document.getElementById('edit').disabled='';
} else {
document.getElementById('edit').disabled='true';
}
}
</script>
</head>
<body onload="enableButton();">
<form method="post" action=Via1.php>
<input type="checkbox" name="option" id="option" onClick="javascript:enableButton();">Dengan ini menyatakan bahwa yang diberikan sesuai data sebenarnya<br>
</td></tr>
<tr>
   <div align="center">
  <td colspan=3 align="center"><input type="submit" name="button" value="Daftar" id="edit" class="button" >
  <input align="center" type="reset" value="Cancel" class="reset"></td></tr> </div>
</form>
</td></tr>
</table>
</form>