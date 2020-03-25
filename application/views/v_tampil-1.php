<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    echo form_open('C_buku/tambah');
    echo anchor('C_buku/input','tambah');
    ?>

    <table border="1">
      <tr>
        <td >No</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Tahun Terbit</td>
        <td>Edit</td>
        <td>Hapus</td>
      </tr>
      <?php
        $no=1;
        foreach ($buku as $row) {
       ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->judul; ?></td>
        <td><?php echo $row->pengarang; ?></td>
        <td><?php echo $row->tahun_terbit ?></td>
        <td><?php echo anchor('C_buku/e/'.$row->id_buku,'Edit');  ?></td>
        <td><?php echo anchor('C_buku/hapus/'.$row->id_buku,'Hapus'); ?></td>
      </tr>
    <?php echo form_close(); } ?>
    </table>
  </body>
</html>
