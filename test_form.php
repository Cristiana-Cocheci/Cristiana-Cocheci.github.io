<html>
<title> Laboratorul 1 - Forms </title>
<body>
<FORM method="POST" action="fisier.php">
<table border=0 width="40%" align="left">
  <tr>
    <td with="30%">Nume* :</td>
    <td with="70%"><INPUT TYPE="text" name="nume"></td>
  </tr>
   <tr>
    <td>Prenume* :</td>
    <td><INPUT TYPE="text" name="prenume"></td>
  </tr>
   
  
  <tr>
        <td>Email: </td>
        </td><INPUT TYPE="email" name="email"></td>
  </tr>
    <tr>
    <td><INPUT TYPE="reset" VALUE="reset"></td>
    <td><INPUT TYPE="submit" VALUE="send"></td>
  </tr>
  
<tr>
  <?php
  $andreea= '192.168.135.111';
  $dragos= '192.168.135.223';
  $cristiana= '192.168.135.151';
    #print_r($_SERVER);
    if($_SERVER['REMOTE_ADDR'] == $andreea){
        
        print '<b>'.'Andreea'.'</b>';

    }
    else if ($_SERVER['REMOTE_ADDR']==$cristiana){
        print '<b>'.'Cristiana'.'</b>';
    }
    else if ($_SERVER['REMOTE_ADDR']==$dragos){
        print '<b>'.'Dragos'.'</b>';
    }
?>
</tr>
 </table>
 </form>
 


</body>
</html>