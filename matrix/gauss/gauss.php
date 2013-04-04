<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>

<body>
<div id="inputMatrix" align="center">

<?php
//if(!$_POST) { die('Ingrese un valor!'); };
////////////////////////////////////////
$filas = $_POST['Matriz']['filas'];
$columnas = $_POST['Matriz']['columnas'];
?>
  <fieldset>
    <legend>Valores de la matriz</legend>
    
<form action="gaussiana.php" method="post">
    <table>
    <?php for($i = 1; $i <= $filas; $i++ ) { ?>
        <tr>
        <?php for($j = 1; $j <= $columnas; $j++ ) { ?>
            <td>
            <b><?php echo $i ?>[<?php echo $j ?>]: </b>
            <input type="text" name="A[<?php echo $i ?>][<?php echo $j ?>]"/>
            </td>
        <?php } ?>
        </tr>
    <?php } ?>
        <tr>
            <td colspan="<?php echo $columnas ?>">
                <p><input type="submit" class="submit" value=" Resolver matriz"/></p>
            </td>
        </tr>
    </table>
    <input type="hidden" name="filas" value="<?php echo $filas ?>"/>
    <input type="hidden" name="columnas" value="<?php echo $columnas ?>"/>
</form>
</fieldset>
</div>
</body>
</html>