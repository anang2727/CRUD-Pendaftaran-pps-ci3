<h2>PENDAFTARAN</h2>
<?php
echo form_open('calon/tambah');
?>
<table border="1">

    <!-- Input Nama calon  -->
    <tr>
        <td> Nama Lengkap </td>
        <td>
            <input type="text" name="nama_lengkap" placeholder="Nama calon">
        </td>
    </tr>
    <!-- Input NIK  -->
    <tr>
        <td> NIK </td>
        <td>
            <input type="text" name="nik" placeholder="Input NIK"></div>
        </td>
    </tr>
    <!-- Input Tempat Lahir  -->
    <tr>
        <td> Tempat Lahir </td>
        <td>
            <input type="text" name="tpt_lahir" placeholder="Input Tempat Lahir">
        </td>
    </tr>
    <!-- Input Tanggal Lahir  -->
    <tr>
        <td> Tanggal Lahir </td>
        <td>
            <input type="date" name="tgl_lahir" placeholder="Input Tanggal Lahir">
        </td>
    </tr>
    <!-- Input Nomor BPJS Kes  -->
    <tr>
        <td> BPJS KES </td>
        <td>
            <input type="text" name="bpjs_kes" placeholder="Input BPJS Kes">
        </td>
    </tr>
    <!-- Input Nomor BPJS Ket  -->
    <tr>
        <td> BPJS KET </td>
        <td>
            <input type="text" name="bpjs_ket" placeholder="Input BPJS Ket">
        </td>
    </tr>
    <!-- Input NPWP  -->
    <tr>
        <td> NPWP </td>
        <td>
            <input type="text" name="npwp" placeholder="Input Npwp">
        </td>
    </tr>
    <!-- Input No Hp  -->
    <tr>
        <td> No Hp </td>
        <td>
            <input type="text" name="no_hp" placeholder="Input No Hp">
        </td>
    </tr>
    <!-- Input No Alamat  -->
    <tr>
        <td> Alamat </td>
        <td>
            <input type="text" name="alamat" placeholder="Input Alamat">
        </td>
    </tr>
    <!-- Input No Provinsi  -->
    <tr>
        <td> Provinsi </td>
        <td>
            <input type="text" name="provinsi" placeholder="Input Provinsi">
        </td>
    </tr>
    <!-- Input Jenis Kelamin  -->
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <Select type="text" name="jenis_kelamin" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </td>
    </tr>
    <!-- Input Jenis Posisi  -->
    <tr>
        <td>Posisi</td>
        <td>
            <Select type="text" name="posisi" class="form-control">
                <option value="Pps">PPS</option>
                <option value="Ppk">PPK</option>
            </select>
        </td>
    </tr>
    <!-- Input Domisili  -->
    <tr>
        <td>Domisili</td>
        <td>
            <Select type="text" name="domisili">
                <option value="Luar Negeri">Luar Negeri</option>
                <option value="Dalam Negeri">Dalam Negeri</option>
            </select>
        </td>
    </tr>
    <!-- Input Pendidikan Terakhir -->
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>
            <select name="id_pendidikan">
                <?php
                foreach ($rec_pendidikan->result() as $rp) {
                    echo "<option value='$rp->id_pendidikan'>$rp->tingkat_pendidikan</option>";
                } ?>
            </select></div>
        </td>
    </tr>
    <!-- Input Kecamatan -->
    <tr>
        <td>Nama Kecamatan</td>
        <td>
            <div class="col-sm-4">
                <select name="id_kec" class="form-control">
                    <?php
                    foreach ($rec_kec->result() as $rp) {
                        echo "<option value='$rp->id_kec'>$rp->nama_kec</option>";
                    } ?>
                </select>
            </div>
        </td>
    </tr>
    <!-- Input Kabupaten -->
    <tr>
        <td>Nama Kabupaten</td>
        <td>
            <div class="col-sm-4">
                <select name="id_kab" class="form-control">
                    <?php
                    foreach ($rec_kab->result() as $rp) {
                        echo "<option value='$rp->id_kab'>$rp->nama_kab</option>";
                    } ?>
                </select>
            </div>
        </td>
    </tr>
    <!-- Input DESA -->
    <tr>
        <td>Nama Desa</td>
        <td>
            <div class="col-sm-4">
                <select name="id_desa" class="form-control">
                    <?php
                    foreach ($rec_desa->result() as $rp) {
                        echo "<option value='$rp->id_desa'>$rp->nama_desa</option>";
                    } ?>
                </select>
            </div>
        </td>
    </tr>
    <!-- Input Pekerjaan -->
    <tr>
        <td>Nama Pekerjaan</td>
        <td>
            <select name="id_pekerjaan">
                <?php
                foreach ($rec_pekerjaan->result() as $rp) {
                    echo "<option value='$rp->id_pekerjaan'>$rp->nama_pekerjaan</option>";
                } ?>
            </select>
        </td>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                Simpan
            </button>
            <?php echo anchor('calon', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>