<html>
<head>
       <title> FORM REGISTRASI </title>
</head>
<body bgcolor="green">
<b>pengelolaan data mahasiswa :</b>
<br>
<form action="tampiltugas06.php" method="post">
<pre>
Nama           :<input type="text" name="nama" maxlength="50">
alamat         :<input type="text" name="alamat" maxlength="100">
jenis kelamin  :<input type="radio" name="jeniskel" value="laki-laki">laki-laki <input type="radio" name="jeniskel" value="laki-laki">perempuan
pekerjaan      :<select name="pekerjaan">
                <option value="PILIH">PILIH</option>
                <option value="pelajar">pelajar</option>
                <option value="karyawan">karyawan</option>
                <option value="wirausaha">wirausaha</option>
                <option value="pelajar">pelajar</option>
         </select>
hobby          :<input type="checkbox" name="hobi1" value="olahraga">olahraga <input type="checkbox" name="hobi2" value="musik">musik <input type="checkbox" name="hobi3" value="jalan-jalan">jalan-jalan
</pre>
<br>
     <input type="submit" value="kirim"/> <input type="submit" value="batal"/>
</form>
</body>
</html>
