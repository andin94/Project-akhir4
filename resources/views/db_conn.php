<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_input');

if (!$koneksi) {
  die(mysqli_connect_error());
}
?>