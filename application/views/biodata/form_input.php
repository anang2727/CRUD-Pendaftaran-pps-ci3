<h2>PENDAFTARAN</h2>
<?php
echo form_open('biodata/tambah');
?>
<table border="2">
  

    <!-- Input Calon -->
    <tr>
        <td>Nama Calon</td>
        <td>
            <select name="id_calon">
                <?php
                foreach ($rec_calon->result() as $rp) {
                    echo "<option value='$rp->id_calon'>$rp->nama_lengkap</option>";
                } ?>
            </select></div>
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
        <td><div class="col-sm-4">
            <select name="id_kec" class="form-control">
                <?php
                foreach ($rec_kec->result() as $rp) {
                    echo "<option value='$rp->id_kec'>$rp->nama_kec</option>";
                } ?>
            </select></div>
        </td>
    </tr>
    <!-- Input Kabupaten -->
    <tr>
        <td>Nama Kabupaten</td>
        <td><div class="col-sm-4">
            <select name="id_kab" class="form-control">
                <?php
                foreach ($rec_kab->result() as $rp) {
                    echo "<option value='$rp->id_kab'>$rp->nama_kab</option>";
                } ?>
            </select></div>
        </td>
    </tr>
    <!-- Input DESA -->
    <tr>
        <td>Nama Desa</td>
        <td>
            <select name="id_desa">
                <?php
                foreach ($rec_desa->result() as $rp) {
                    echo "<option value='$rp->id_desa'>$rp->nama_desa</option>";
                } ?>
            </select></div>
        </td>
    </tr>
</tr>

    <tr>
        <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                Simpan
            </button>
            <?php echo anchor('biodata', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
