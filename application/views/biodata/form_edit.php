<body>
    <h3>EDIT DATA biodata</h3>
    <?php
    echo form_open('biodata/edit');
    ?>
    <input type="hidden" value="<?php echo $rec_biodata['id_biodata'] ?>" name="id">
    <table border="1">



        <!-- Calon  -->
        <tr>
            <td>Nama Lengkap </td>
            <td>
                <div class="col-sm-4"> <select name="id_calon" class="form-control">
                        <?php foreach ($rec_calon->result() as $rp) {
                        ?>
                            <option <?php if ($rec_biodata['id_calon'] == $rp->id_calon) {
                                        echo 'selected';
                                    } ?> value="<?php echo $rp->id_calon ?>"><?php echo $rp->nama_lengkap; ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <!--  Desa  -->
        <tr>
            <td>Desa </td>
            <td>
                <div class="col-sm-4"> <select name="id_desa" class="form-control">
                        <?php foreach ($rec_desa->result() as $rp) {
                        ?>
                            <option <?php if ($rec_biodata['id_desa'] == $rp->id_desa) {
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
                            <option <?php if ($rec_biodata['id_pendidikan'] == $rp->id_pendidikan) {
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
                            <option <?php if ($rec_biodata['id_kec'] == $rp->id_kec) {
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
                            <option <?php if ($rec_biodata['id_kab'] == $rp->id_kab) {
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
                <?php echo anchor('biodata', 'Kembali') ?>
            </td>
        </tr>
    </table>
    <a href="<?php echo base_url() ?>">Dashboard</a>
    </form>
</body>