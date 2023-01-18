<?php
$alip = $_GET['id'];
$hapus = mysqli_query($conn, " DELETE FROM tb_bebas where id=$alip");
