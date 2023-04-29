<h3>DATA KECAMATAN</h3>
<?php echo anchor ('kec/tambah','Tambah Data');?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama kec</th>
        <th colspan="2">Operasi</th>
    </tr>
        <?php
        // $no=1;
        $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_kec</td>
            <td>".anchor('kec/edit/'.$r->id_kec,'Edit')."</td>
            <td>".anchor('kec/delete/'.$r->id_kec,'Delete')."</td>
            <tr>";
            $no++;
        }?>
</table>


<a href="<?php echo base_url()?>">Beranda</a>
<?php
echo $paging;
?>