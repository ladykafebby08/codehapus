entry data <br>

<br>
<form action="" method="post" enctype="multipart/form-data">

  <label for="id">id</label>
  <input type="text" name="id" id=""> <br> <br>

  <label for="nama">nama</label>
  <input type="text" name="nama" id=""> <br> <br>

  <label for="status">status</label>
  <input type="text" name="status" id=""><br><br>

  <label for="keahlian">keahlian</label>
  <input type="text" name="keahlian"> <br><br>

  <label for="asal">asal</label>
  <input type="text" name="asal" id=""><br><br>

  <input type="submit" name="simpan" id=""> <br> <br>
</form>

<?php
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $status = $_POST['status'];
  $keahlian = $_POST['keahlian'];
  $asal = $_POST['asal'];

  $simpan = mysqli_query($conn, "INSERT INTO tb_bebas(id,nama,status,keahlian,asal)values('$id','$nama','$status','$keahlian','$asal')");
}
?>