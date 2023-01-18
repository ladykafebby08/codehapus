<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>
<table>
  <tr>
    <th>id</th>
    <th>nama</th>
    <th>status</th>
    <th>keahlian</th>
    <th>asal</th>
    <th>aksi</th>

  </tr>
  <?php
  $ambil = mysqli_query($conn, "SELECT * from tb_bebas;");
  while ($pecah = mysqli_fetch_assoc($ambil)) {

  ?>
    <tr>
      <td><?php echo $pecah['id'] ?></td>
      <td><?php echo $pecah['nama'] ?></td>
      <td><?php echo $pecah['status'] ?></td>
      <td><?php echo $pecah['keahlian'] ?></td>
      <td><?php echo $pecah['asal'] ?></td>
      <td><a href="?modul=hapus&id=<?php echo $pecah['id']   ?>">hapus</a></td>
    </tr>

  <?php

  }
  ?>
</table>