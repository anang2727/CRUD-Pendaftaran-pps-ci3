<body>
    <h3>DATA PENDAFTAR</h3>
    <?php echo anchor('biodata/tambah', 'Tambah Data'); ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Calon</th>
            <th>No Pendaftaran</th>
            <th>Pendidikan Terakhir</th>
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
            <td>$r->nama_lengkap</td>
            <td>$r->no_pendaftaran</td>
            <td>$r->tingkat_pendidikan</td>
            <td>$r->nama_desa</td>
            <td>$r->nama_kec</td>
            <td>$r->nama_kab</td>
            <td>" . anchor('biodata/edit/' . $r->id_biodata, 'Edit') . "</td>
            <td>" . anchor('biodata/delete/' . $r->id_biodata, 'Delete') . "</td>
            <tr>";
            $no++;
        } ?>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
</body>
