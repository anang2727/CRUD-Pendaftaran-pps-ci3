<body>
    <h3>EDIT DATA CALON</h3>
    <?php
    echo form_open('calon/edit');
    ?>
    <input type="hidden" value="<?php echo $rec_calon['id_calon'] ?>" name="id">
    <table border="1">
    <tr>
        <td>Nama Calon</td>
        <td>
            <input type="text" name="nama_lengkap" placeholder="Nama kec" value="<?php echo $rec_calon['nama_lengkap'] ?>">
        </td>
    </tr>
    <tr>
        <td>Nama Nik</td>
        <td>
            <input type="text" name="nik" placeholder="Nik" value="<?php echo $rec_calon['nik'] ?>">
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>
            <input type="text" name="tpt_lahir" placeholder="Tempat Lahir" value="<?php echo $rec_calon['tpt_lahir'] ?>">
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $rec_calon['tgl_lahir'] ?>">
        </td>
    </tr>
<tr>
        <td>BPJS KES</td>
        <td>
            <input type="text" name="bpjs_kes" placeholder="No Bpjs Kesehatan" value="<?php echo $rec_calon['bpjs_kes'] ?>">
        </td>
    </tr>
<tr>
        <td>BPJS Ket</td>
        <td>
            <input type="text" name="bpjs_ket" placeholder="No Bpjs Ketenagakerjaan" value="<?php echo $rec_calon['bpjs_ket'] ?>">
        </td>
    </tr>
    <tr>
        <td>NPWP</td>
        <td>
            <input type="text" name="npwp" placeholder="Npwp" value="<?php echo $rec_calon['npwp'] ?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <input type="text" name="alamat" placeholder="Alamat Anda" value="<?php echo $rec_calon['alamat'] ?>">
        </td>
    </tr>
    <tr>
        <td>Provinsi</td>
        <td>
            <input type="text" name="provinsi" placeholder="Provinsi" value="<?php echo $rec_calon['provinsi'] ?>">
        </td>
    </tr>

    <tr>
            <td width="30">Jenis Kelamin</td>
            <td>
                <Select type="text" name="jenis_kelamin" class="form-control">
                    <option <?php if ($rec_calon['jenis_kelamin'] == 'Pria') {
                                echo 'selected';
                            } ?> value="Pria">Pria</option>
                    <option <?php if ($rec_calon['jenis_kelamin'] == 'Wanita') {
                                echo 'selected';
                            } ?> value="Wanita">Wanita</option>
                            
                </select>
            </td>
        </tr>
    <tr>
            <td width="30">Posisi</td>
            <td>
                <Select type="text" name="posisi" class="form-control">
                    <option <?php if ($rec_calon['posisi'] == 'PPK') {
                                echo 'selected';
                            } ?> value="PPK">PPK</option>
                    <option <?php if ($rec_calon['posisi'] == 'PPS') {
                                echo 'selected';
                            } ?> value="PPS">PPS</option>
                            
                </select>
            </td>
        </tr>
        <tr>
            <td width="30">Domisili</td>
            <td>
                <Select type="text" name="domisili">
                    <option <?php if ($rec_calon['domisili'] == 'Dalam Negeri') {
                                echo 'selected';
                            } ?> value="Dalam Negeri">Dalam Negeri</option>
                    <option <?php if ($rec_calon['domisili'] == 'Luar Negeri') {
                                echo 'selected';
                            } ?> value="Luar Negeri">Luar Negeri</option>
                            
                </select>
            </td>
        </tr>


        <!-- Calon  -->
        <tr>
            <td>Nama pekerjaan</td>
            <td>
                <select name="id_pekerjaan" class="form-control">
                    <?php foreach ($rec_pekerjaan->result() as $rp) {
                    ?>
                        <option <?php if ($rec_calon['id_pekerjaan'] == $rp->id_pekerjaan) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_pekerjaan ?>"><?php echo $rp->nama_pekerjaan; ?></option>;
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <!--  Desa  -->
        <tr>
            <td>Desa </td>
            <td>
                <div class="col-sm-4"> <select name="id_desa" class="form-control">
                        <?php foreach ($rec_desa->result() as $rp) {
                        ?>
                            <option <?php if ($rec_calon['id_desa'] == $rp->id_desa) {
                                        echo 'selected';
                                    } ?> value="<?php echo $rp->id_desa ?>"><?php echo $rp->nama_desa; ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <!--  Pendidikan  -->
        <tr>
            <td>Pendidikan Terakhir </td>
            <td>
                <div class="col-sm-4"> <select name="id_pendidikan" class="form-control">
                        <?php foreach ($rec_pendidikan->result() as $rp) {
                        ?>
                            <option <?php if ($rec_calon['id_pendidikan'] == $rp->id_pendidikan) {
                                        echo 'selected';
                                    } ?> value="<?php echo $rp->id_pendidikan ?>"><?php echo $rp->tingkat_pendidikan; ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <!--  Kecamatan  -->
        <tr>
            <td>Nama Kecamatan</td>
            <td>
                <div class="col-sm-4"> <select name="id_kec" class="form-control">
                        <?php foreach ($rec_kec->result() as $rp) {
                        ?>
                            <option <?php if ($rec_calon['id_kec'] == $rp->id_kec) {
                                        echo 'selected';
                                    } ?> value="<?php echo $rp->id_kec ?>"><?php echo $rp->nama_kec; ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <!--  Kabupaten  -->
        <tr>
            <td>Nama Kabupaten</td>
            <td>
                <div class="col-sm-4"> <select name="id_kab" class="form-control">
                        <?php foreach ($rec_kab->result() as $rp) {
                        ?>
                            <option <?php if ($rec_calon['id_kab'] == $rp->id_kab) {
                                        echo 'selected';
                                    } ?> value="<?php echo $rp->id_kab ?>"><?php echo $rp->nama_kab; ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit">Simpan </button>
                <?php echo anchor('calon', 'Kembali') ?>
            </td>
        </tr>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
    </form>
</body>