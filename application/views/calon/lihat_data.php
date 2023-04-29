<body>
    <h3>DATA REGISTRASI CALON</h3>
    <?php echo anchor('calon/tambah', 'Tambah Data'); ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nik</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. BPJS Kes</th>
            <th>No. BPJS Ket</th>
            <th>Npwp</th>
            <th>Jenis Kelamin</th>
            <th>Domisili</th>
            <th>Alamat</th>
            <th>Provinsi</th>
            <th>Posisi</th>
            <th>Pendidikan Terakhir</th>
            <th>Nama Pekerjaan</th>
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
            <td>$r->nik</td>
            <td>$r->tpt_lahir</td>
            <td>$r->tgl_lahir</td>
            <td>$r->bpjs_kes</td>
            <td>$r->bpjs_ket</td>
            <td>$r->npwp</td>
            <td>$r->jenis_kelamin</td>
            <td>$r->domisili</td>
            <td>$r->alamat</td>
            <td>$r->provinsi</td>
            <td>$r->posisi</td>
            <td>$r->tingkat_pendidikan</td>
            <td>$r->nama_pekerjaan</td>
            <td>$r->nama_desa</td>
            <td>$r->nama_kec</td>
            <td>$r->nama_kab</td>
            <td>" . anchor('calon/edit/' . $r->id_calon, 'Edit') . "</td>
            <td>" . anchor('calon/delete/' . $r->id_calon, 'Delete') . "</td>
            <tr>";
            $no++;
        } ?>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
</body>
