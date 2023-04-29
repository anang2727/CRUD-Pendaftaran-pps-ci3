<h2>EDIT DATA DESA</h2>
<br/>

<?php
echo form_open('desa/edit');
?>

<input type="hidden" value="<?php echo $rec_desa['id_desa'] ?>" name="id_desa">

<table border="1">
    <tr>
        <td>Nama Desa</td>
        <td> <div class="col-sm-4">
            <input class="form-control" type="text" name="nama_desa" placeholder="Nama Desa" value="<?php echo $rec_desa['nama_desa'] ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Kecamatan</td>
        <td> <div class="col-sm-4"> <select name="id_kec" class="form-control">
                <?php foreach ($rec_kec->result() as $rp) {
                ?>
                    <option <?php if ($rec_desa['id_kec'] == $rp->id_kec) {
                                echo 'selected';
                            } ?> value="<?php echo $rp->id_kec ?>"><?php echo $rp->nama_kec; ?></option>;
                <?php
                }
                ?>
            </select>
            </div>
        </td>
    </tr>
    <tr>
            <td>Nama Kabupaten</td>
            <td>
                <select name="id_kab" class="form-control">
                    <?php foreach ($rec_kab->result() as $rp) {
                    ?>
                        <option <?php if ($rec_desa['id_kab'] == $rp->id_kab) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_kab ?>"><?php echo $rp->nama_kab; ?></option>;
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </td>
        </tr>
    <tr>

    <tr>
        <td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
            <?php echo anchor('desa','Back',array('class'=>'btn btn-primary btn-sm'))?>
        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>

</from>