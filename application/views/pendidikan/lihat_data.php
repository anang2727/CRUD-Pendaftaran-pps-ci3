<h3>DATA PENDIDIKAN</h3>
<?php echo anchor ('pendidikan/tambah','Tambah Data');?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama pendidikan</th>
        <th>Tingkat Pendidikan</th>
        <th colspan="2">Operasi</th>
    </tr>
        <?php
        $no=1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_pendidikan</td>
            <td>$r->tingkat_pendidikan</td>
            <td>".anchor('pendidikan/edit/'.$r->id_pendidikan,'Edit')."</td>
            <td>".anchor('pendidikan/delete/'.$r->id_pendidikan,'Delete')."</td>
            <tr>";
            $no++;
        }?>
</table>
<a href="<?php echo base_url()?>">Beranda</a>
