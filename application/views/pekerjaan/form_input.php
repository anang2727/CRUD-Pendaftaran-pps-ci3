<h3>TAMBAH PEKERJAAN</h3>
<?php
echo form_open('pekerjaan/tambah');
?>
<table border="1">
 <tr>
    <td>
        Nama pekerjaan
    </td>
    <td>
        <input type="text" name="nama_pekerjaan" placeholder="Nama pekerjaan">
      </td>
 </tr>

 <tr>
    <td colspan="2">
<button type="submit" name="submit">
        Simpan
</button>
<?php echo anchor ('pekerjaan','Kembali')?>
     </td>
  </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
