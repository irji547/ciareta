<?php echo form_open('dosen/update') ?>
<table width="325" border="1">
  <tr>
    <td>Nik</td>
    <td><input type="text" value="<?php echo $edit['nik']?>" name="nik" id="nik"></td>
  </tr>
  <tr>
    <td>Kode Dosen</td>
    <td><input type="text" value="<?php echo $edit['kode_dosen']?>" name="kode_dosen" id="kode_dosen"></td>
  </tr>
  <tr>
    <td>Nama Dosen</td>
    <td><input type="text" value="<?php echo $edit['nama_dosen']?>" name="nama_dosen" id="nama_dosen"></td>
  </tr>
  <tr>
    <td>Jenis Klemain</td>
    <td><input type="radio" name="jk" value="L">Laki-Laki
        <input type="radio" name="jk" value="P">Perempuan</td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="Email"></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="radio" name="status" value="Aktif">Aktif
          <input type="radio" name="status" value="Pasif">Pasif</td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="update"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>
<?php echo form_close() ?>