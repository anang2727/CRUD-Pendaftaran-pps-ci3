<body>
<h3>EDIT DATA USER</h3>
<?php
echo form_open('user/edit');
?>
<input type="hidden" value="<?php echo $record['id_user'] ?>" name="id_user">
<table border="1">
    <tr>
        <td>Username</td>
        <td>
            <input type="text" name="username" placeholder="Masukkan Username" value="<?php echo $record['username'] ?>">
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password" placeholder="Masukkan Password" value="<?php echo $record['password'] ?>">
        </td>
    </tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit">Simpan </button>
            <?php echo anchor('user', 'Kembali') ?>
        </td>
    </tr>
</table>
<a href="<?php echo base_url() ?>">Dashboard</a>
</form>
</body>
