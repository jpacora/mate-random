<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>

<body>
<div id="formulario" align="center">

<form action="gauss.php" method="post">
  <fieldset>
    <legend>Orden de la matriz</legend>
    <table>
      <tr>
        <td><p>Numero de filas:</p></td>
        <td><p><input name="Matriz[filas]" /></p></td>
      </tr>
      <tr>
        <td><p>Numero de columnas:</p></td>
        <td><p><input name="Matriz[columnas]" /></p></td>
      </tr>
      <tr>
        <td colspan="2">
          <p><input type="submit" value=" Crear matriz "></p>
        </td>
      </tr>
      </table>
  </fieldset>
</form>

</div>
</body>
</html>