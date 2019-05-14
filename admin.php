<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<H1><font color=red><U>LOGIIIN LAGIII</U> !!!!!</font></H1>");//jika belum login jangan lanjut

}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:pembaca.php');
    // die("Anda bukan pembaca");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<body  style="background:url(cookies/R.jpg)">

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <title>index</title>
<div align='center'>
  <font color=red>
  <h1 style="text-align: center; font-family: sans-serif; color: white;"><font color= black>Selamat Datang</font> <?php echo $level;?> <b><?php echo $username;?></b> <a href="logout.php"><b><font color=black>Logout</font></b></a>
  </font>
</div></h1> 








<center>
<br>
    <h2>CAKE PEDIA</h2>
  <br><br>
    <table border="5" cellpadding="20" cellspacing="10" width="80%" >
  <tr>
   
     <th>no</th>
    <th>nama kue</th>
    <th>bahan-bahan</th>
     <th>sejarah</th>
    <th>terkhir di update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["bahan"];  ?></td>
    <td><?= $x["sejarah"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('yakin untuk dihapus?');">hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<center>
  <br>
<a href="creat.php">Tambah artikel>></a>
<a href="logout.php">Logout>></a>
<br><br>
</center>
  </body>
</html>
