<body>
    <h3>DATA KABUPATEN</h3>
    <?php echo anchor('kab/tambah', 'Tambah Data'); ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama kab</th>
            <th colspan="2">Operasi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($record->result() as $r) {
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_kab</td>
            <td>" . anchor('kab/edit/' . $r->id_kab, 'Edit') . "</td>
            <td>" . anchor('kab/delete/' . $r->id_kab, 'Delete') . "</td>
            <tr>";
            $no++;
        } ?>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
</body>
