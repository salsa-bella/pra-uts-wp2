<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA MAHASISWA</title>
</head>

<body>
    <?php echo form_open('mahasiswa/create'); ?>
    <table border=0 width="45%" cellpadding="5" cellspacing="0">
        <tr bgcolor="blue">
            <td Colspan="3" align="center">
                <H3>DATA MAHASISWA</H3>
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" value="<?php echo set_value('nim'); ?>" size="50"><?php echo form_error('nim'); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" size="50"><?php echo form_error('nama'); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo set_value('kelas'); ?>" size="50"><?php echo form_error('kelas'); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="2" value="<?php echo set_value('alamat'); ?>" cols="52"></textarea><?php echo form_error('alamat'); ?></td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <input type="submit" value="TAMBAH">
                <input type="reset" value="BATAL">
                [<a href="<?php echo base_url(); ?>index.php/mahasiswa">Lihat Data Mahasiswa</a>]
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>

</body>

</html>