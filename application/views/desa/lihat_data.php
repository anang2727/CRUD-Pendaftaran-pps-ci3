<body>
    <h3>DATA DESA</h3>
    <?php echo anchor('desa/tambah', 'Tambah Data'); ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Desa</th>
            <th>Nama Kecamatan</th>
            <th>Nama Kabupaten</th>
            <th colspan="2">Operasi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_desa</td>
            <td>$r->nama_kec</td>
            <td>$r->nama_kab</td>
            <td>" . anchor('desa/edit/' . $r->id_desa, 'Edit') . "</td>
            <td>" . anchor('desa/delete/' . $r->id_desa, 'Delete') . "</td>
            <tr>";
            $no++;
        } ?>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
</body>
