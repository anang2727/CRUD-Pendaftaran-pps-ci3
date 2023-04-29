<h3>DATA PEKERJAAN</h3>
<?php echo anchor ('pekerjaan/tambah','Tambah Data');?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama pekerjaan</th>
        <th colspan="2">Operasi</th>
    </tr>
        <?php
        $no=1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_pekerjaan</td>
            <td>".anchor('pekerjaan/edit/'.$r->id_pekerjaan,'Edit')."</td>
            <td>".anchor('pekerjaan/delete/'.$r->id_pekerjaan,'Delete')."</td>
            <tr>";
            $no++;
        }?>
</table>
<a href="<?php echo base_url()?>">Beranda</a>
