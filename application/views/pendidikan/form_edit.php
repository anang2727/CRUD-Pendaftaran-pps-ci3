<body>
    <h2>UBAH DATA PENDIDIKAN</h2>
    <?php
    echo form_open('pendidikan/edit');
    ?>
    <input type="hidden" value="<?php echo $record['id_pendidikan'] ?>" name="id">
    <table border="1">
        <tr>
            <td>Nama pendidikan</td>
            <td>
                <input type="text" value="<?php echo $record['nama_pendidikan'] ?>" name="nama_pendidikan" placeholder="Nama pendidikan">
            </td>
            </td>
        </tr>
        <tr>
            <td>Tingkat Pendidikan</td>
            <td>
            <Select type="text" name="tingkat_pendidikan">
                    <option <?php if ($record['tingkat_pendidikan'] == 'SD/MI') {
                                echo 'selected';
                            } ?> value="SD/MI">SD/MI</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'SMP/MTsN') {
                                echo 'selected';
                            } ?> value="SMP/MTsN">SMP/MTs</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'SMA/MA/SMK/MAK') {
                                echo 'selected';
                            } ?> value="MA/SMA/SMK/MAK">SMA/MA/SMK/MAK</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'D1') {
                                echo 'selected';
                            } ?> value="D1">D1</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'D2') {
                                echo 'selected';
                            } ?> value="D2">D2</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'D3') {
                                echo 'selected';
                            } ?> value="D3">D3</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'D4') {
                                echo 'selected';
                            } ?> value="D4">D4</option>

                    <option <?php if ($record['tingkat_pendidikan'] == 'S1') {
                                echo 'selected';
                            } ?> value="S1">S1</option>
                    <option <?php if ($record['tingkat_pendidikan'] == 'S2') {
                                echo 'selected';
                            } ?> value="S2">S2</option>
                    <option <?php if ($record['tingkat_pendidikan'] == 'S3') {
                                echo 'selected';
                            } ?> value="S3">S3</option>
                    </select>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" name="submit">Simpan</button>
                <?php echo anchor('pendidikan', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a href="<?php echo base_url() ?>">Beranda</a>
</body>