<html>
<head>
     <title>tampil tugas 06</title>
</head>
<body>
     <?php
     $nama=$_POST["nama"];
     $alamat=$_POST["alamat"];
     $jeniskel=$_POST["jeniskel"];
     $pekerjaan=$_POST["pekerjaan"];
     $hobi1 = isset($_POST['hobi1'])?$_POST['hobi1']:'';
     $hobi2 = isset($_POST['hobi2'])?$_POST['hobi2']:'';
     $hobi3 = isset($_POST['hobi3'])?$_POST['hobi3']:'';
     ?>
 <table border="2" bgcolor="cyan">
    <tr> 
       <td colspan="2">Data Mahasiswa </td>

    </tr>
    <tr>
       <td>nama</td>
       <td><?php echo $nama; ?></td>
    </tr>
    <tr>
       <td>alamat</td>
       <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
       <td>jenis kelamin</td>
       <td><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
       <td>pekerjaan</td>
       <td><?php echo $pekerjaan; ?></td>
    </tr>
    <tr>
       <td>hobby</td>
       <td><?= trim($hobi1. ',' .$hobi2. ',' .$hobi3, '.') ?></td>
    </tr>
</table>
<a href="prosestugas06.php">INPUT DATA LAGI</a>
</body>
</html>