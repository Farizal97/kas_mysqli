<?php 
$id = $_GET['id'];
$sql = $koneksi->query("DELETE  FROM kas where kode='$id'");

if ($sql) {
    ?>
    <script type="text/javascript">
    alert("Anda Telah Berhasil Menghapus Data");
    window.location.href="?page=masuk";
    </script>
    <?php
}
?>