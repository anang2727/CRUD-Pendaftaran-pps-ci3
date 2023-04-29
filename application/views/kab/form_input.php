<h3>TAMBAH KABUPATEN</h3>
<?php
echo form_open('kab/tambah');
?>
<table border="1">
 <tr>
    <td>
        Nama kab
    </td>
    <td>
        <input type="text" name="nama_kab" placeholder="Nama kab">
      </td>
 </tr>

 <tr>
    <td colspan="2">
<button type="submit" name="submit">
        Simpan
</button>
<?php echo anchor ('kab','Kembali')?>
     </td>
  </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
