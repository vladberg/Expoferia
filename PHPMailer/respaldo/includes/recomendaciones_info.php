<table align="center">
<tr>
<td width="99" rowspan="7" align="center"><br /><img src="<?php echo $e_ruta.$e_imagen ?>"  width="308"/>
</td>
<td colspan="2" align="center"><?php echo strtoupper(utf8_decode($e_nombre)) ?></td>
</tr>
<tr>
  <td width="99" align="center">&nbsp;</td>
  <td width="281" align="center">&nbsp;</td>
</tr>
<tr>
  <td align="center">Descripci&oacute;n:</td>
  <td align="center"><?php echo $e_descripcion ?></td>
</tr>
<tr>
  <td align="center">Direcci&oacute;n: </td>
  <td align="center"><?php echo $e_direccion ?></td>
</tr>
<tr>
  <td align="center">Tel&eacute;fono: </td>
  <td align="center"><?php echo $e_telefono ?></td>
</tr>
<tr>
  <td align="center">Email: </td>
  <td align="center"><?php echo $e_email ?></td>
</tr>
<tr>
  <td colspan="2" align="center">
  <?
  
  if ($map==1){
?>
<a class="linkopacity" href="detalle_recomendaciones.php?inf=1"><img src="images/iconos/google_maps.png" /></a>

<?
}else {
?>
<img src="images/iconos/google_maps_off.png" />
<?
}
?>

<!------------------------------------------>
<?
if ($web==1){
?>
<a class="linkopacity" href="<?php echo $e_url?>" target="_self"><img src="images/iconos/pagina_web.png" /></a>

<?
}else {
?>
<img src="images/iconos/pagina_web_off.png" /><?
}
?>
  </td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td></td>
<td></td>
<td></td>
</tr>


</table>