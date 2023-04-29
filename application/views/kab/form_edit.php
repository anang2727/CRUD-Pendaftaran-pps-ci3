<body>
<h3>EDIT DATA KABUPATEN</h3>
<?php
echo form_open('kab/edit');
?>
<input type="hidden" value="<?php echo $record['id_kab'] ?>" name="id_kab">
<table border="1">
    <tr>
        <td>Nama kab</td>
        <td>
            <input type="text" name="nama_kab" placeholder="Nama kab" value="<?php echo $record['nama_kab'] ?>">
        </td>
    </tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan </button>
            <?php echo anchor('kab', 'Kembali') ?>
        </td>
    </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
</form>
</body>
