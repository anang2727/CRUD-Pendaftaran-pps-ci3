<h3>DATA USER</h3>
<?php echo anchor ('user/tambah','Tambah Data');?>
<table border="1">
    <tr>
        <th>No</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>LAST LOGIN</th>
        <th colspan="2">Operasi</th>
    </tr>
        <?php
        $no=1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->username</td>
            <td>$r->password</td>
            <td>$r->last_login</td>
            <td>".anchor('user/edit/'.$r->id_user,'Edit')."</td>
            <td>".anchor('user/delete/'.$r->id_user,'Delete')."</td>
            <tr>";
            $no++;
        }?>
</table>
<a href="<?php echo base_url()?>">Beranda</a>
