<?php echo form_open('Agama/update') ?>
<table width="325" border="1">
  <tr>
    <td>id </td>
    <td><input type="text" velue="<?php echo $edit['id_agama']?>" name="id_agama" id="id_agama"></td>
  </tr>
  <tr>
    <td>Nama Agama</td>
    <td><input type="text" velue="<?php echo $edit['nama_agama']?>" name="nama_agama" id="nama_agama"></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="update"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>
<?php echo form_close() ?>