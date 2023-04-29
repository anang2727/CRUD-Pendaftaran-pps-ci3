<h3>TAMBAH USER</h3>
<?php
echo form_open('user/tambah');
?>
<table border="1">
    <tr>
        <td>
            Username
        </td>
        <td>
            <input type="text" name="username" placeholder="Nama user">
        </td>
    </tr>
    <tr>
        <td>
Password
        </td>
        <td>
            <input type="text" name="password" placeholder="Masukkan Password">
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <button type="submit" name="submit">
                Simpan
            </button>
            <?php echo anchor('user', 'Kembali') ?>
        </td>
    </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>