<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>edit Data Mahasiswa</title>
</head>

<body>

    <?php echo form_open('mahasiswa/update'); ?>
    <table border=0 width="45%" cellpadding="5" cellspacing="0">
        <tr bgcolor="aqua">
            <td Colspan="3" align="center">
                <H3>DATA MAHASISWA</H3>
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>" size="50"><?php echo form_error('nim'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $mahasiswa['kelas']; ?>" size="15"><?php echo form_error('kelas'); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="2" cols="52"><?php echo $mahasiswa['alamat']; ?></textarea><?php echo form_error('alamat'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <button type="submit" value="update" name="update">Update</button>
                <button type="reset">Reset</button>
                [<a href="<?php echo base_url(); ?>index.php/mahasiswa">Lihat Data Mahasiswa</a>]
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>