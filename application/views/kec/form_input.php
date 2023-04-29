<h3>TAMBAH NAMA KECAMATAN</h3>
<?php
echo form_open('kec/tambah');
?>
<table border="1">
 <tr>
    <td>
        Nama kec
    </td>
    <td>
        <input type="text" name="nama_kec" placeholder="Nama kec">
      </td>
 </tr>

 <tr>
    <td colspan="2">
<button type="submit" name="submit">
        Simpan
</button>
<?php echo anchor ('kec','Kembali')?>
     </td>
  </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
