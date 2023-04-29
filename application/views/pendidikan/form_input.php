<body>
    <h2>TAMBAH DATA PENDIDIKAN</h2>
    <?php
    echo form_open('pendidikan/tambah');
    ?>
    <table border="1">
        <tr>
            <td> Nama Pendidikan </td>
            <td> <input type="text" name="nama_pendidikan" placeholder="Nama pendidikan" class="form-control"> </td>
        </tr>
        <tr>
            <td>Tingkat Pendidikan</td>
            <td>
                <Select type="text" name="tingkat_pendidikan">
                    <option value="SD/MI">SD/MI</option>
                    <option value="SMP/MTsN">SMP/MTs</option>
                    <option value="MA/SMA/SMK/MAK">SMA/MA/SMK/MAK</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit">
                    Simpan
                </button>
                <?php echo anchor('pendidikan', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a href="<?php echo base_url() ?>">Beranda</a>
</body>