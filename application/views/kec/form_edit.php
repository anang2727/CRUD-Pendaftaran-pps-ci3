<body>
<h3>EDIT DATA KECAMATAN</h3>
<?php
echo form_open('kec/edit');
?>
<input type="hidden" value="<?php echo $record['id_kec'] ?>" name="id_kec">
<table border="1">
    <tr>
        <td>Nama kec</td>
        <td>
            <input type="text" name="nama_kec" placeholder="Nama kec" value="<?php echo $record['nama_kec'] ?>">
        </td>
    </tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan </button>
            <?php echo anchor('kec', 'Kembali') ?>
        </td>
    </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
</form>
</body>
