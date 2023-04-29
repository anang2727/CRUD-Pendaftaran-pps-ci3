<body>
<h3>EDIT DATA PEKERJAAN</h3>
<?php
echo form_open('pekerjaan/edit');
?>
<input type="hidden" value="<?php echo $record['id_pekerjaan'] ?>" name="id_pekerjaan">
<table border="1">
    <tr>
        <td>Nama pekerjaan</td>
        <td>
            <input type="text" name="nama_pekerjaan" placeholder="Nama pekerjaan" value="<?php echo $record['nama_pekerjaan'] ?>">
        </td>
    </tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan </button>
            <?php echo anchor('pekerjaan', 'Kembali') ?>
        </td>
    </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
</form>
</body>
