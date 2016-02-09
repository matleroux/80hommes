<?php
if ($mail != "" && $nom != "" && $pays != "" && $message != "")
{
?>
<body bgcolor="F7E8D0">
<form method="post" action="livredor.php">

        
  <table border="0" width="650"  cellspacing="1" cellpadding="2" height="83" align="center">
    <tr> 
            <td height="35" colspan="2" valign="top"> 
              
        <h2 align="center"><font face="Verdana" size="1" color="#E8C47F">Vous 
          voulez laisser une trace sur ce site, nous encourager, 
          poser une question ou nous faire part de conseils, contacts 
          ou critiques, &eacute;crivez dans notre livre d'or !!!<br>
          </font><font face="Verdana" size="2" color="#E8C47F"> 
          <br>
          </font></h2>
            </td>
          </tr>
          <tr> 
            
      <td valign="top" height="19" align="right"> 
        <h3><font face="Verdana" size="2" color="E8C47F">&nbsp;<font size="1">&nbsp; 
          Votre nom :</font></font> </h3>
      </td>
            <td valign="top" height="19"> 
              <input type="text" name="nom" size="20">
            </td>
          </tr>
          <tr> 
            
      <td valign="top" height="21" align="right">
        <h3><font face="Verdana" size="2" color="#E8C47F">&nbsp;<font color="E8C47F" size="1">&nbsp; 
          Votre Email&nbsp; :</font></font></h3>
      </td>
            <td valign="top" height="21"> 
              <input type="text" name="mail" size="20" onFocus="if (this.value=='mail@nonyme') this.value=''" value="mail@nonyme" onBlur="if (this.value=='') this.value='mail@nonyme'" class="text">
            </td>
          </tr>
          <tr> 
            
      <td valign="top" height="21" align="right">
        <h3><font face="Verdana" size="2" color="#E8C47F">&nbsp;<font size="1">&nbsp; 
          <font color="E8C47F">Pays&nbsp;:</font></font></font></h3>
      </td>
            <td valign="top" height="21"> 
              <input type="text" name="pays" size="20">
            </td>
          </tr>
          <tr> 
            
      <td valign="top" align="right"> 
        <div align="left">
          <h3 align="right"><font face="Verdana" size="2" color="#E8C47F">&nbsp;<font color="E8C47F">&nbsp;<font size="1"> 
            <font color="E8C47F">Votre message :</font></font></font></font></h3>
        </div>
      </td>
            <td valign="top"> 
              <textarea rows="6" name="message" cols="33"></textarea>
            </td>
          </tr>
          <tr> 
            <td valign="top" align="left" colspan="2"> 
              <div align="center"> 
                <input type="submit" value="Envoyer" name="B12">
              </div>
            </td>
          </tr>
        </table>
      
  <p align="center">&nbsp;</p>
</form>

<?php
}

else
{
?>
<form method="post" action="livredor.php3">

        
  <table border="0" width="650" cellspacing="1" cellpadding="2" height="83" background="file://///Babel/home/webs/Tour%20du%20monde/Tour%20du%20monde/web/imges_ok/fond_sans_carte.gif" align="center">
    <tr>
            <td width="500" height="35" colspan="2" valign="top"> 
              
        <h2 align="center"><font face="Verdana" size="1" color="#E8C47F">Vous 
          voulez laisser une trace sur ce site, nous encourager, 
          poser une question ou nous faire part de conseils, contacts 
          ou critiques, &eacute;crivez dans notre livre d'or !!!<br>
          </font><font face="Verdana" size="2" color="#E8C47F"> 
          <br>
          </font></h2>
        </td>
      </tr>
    
      <tr>
        
      <td width="185" height="19" align="right" valign="middle"> 
        <h3 align="right"><font face="Verdana" size="1" color="#E8C47F">&nbsp;&nbsp;<font color="E8C47F"> 
          Votre nom :</font></font> </h3>
      </td>



        <td width="300" height="19"><?php echo "<input type='text' name='nom' size='20' value='$nom'>"; ?></td>
        </tr>
      <tr>
            
      <td width="185" height="21" align="right" valign="middle">
        <h3><font face="Verdana" size="2" color="E8C47F">&nbsp;&nbsp;<font size="1"> 
          <font color="E8C47F">Votre Email<font size="2"> </font></font></font><font color="E8C47F">:</font></font></h3>
      </td>
          
<?php
if ($mail == "" or $mail == "mail@nonyme")
{
?>
<td width="300" height="21"><input type="text" name="mail" size="20" onFocus="if (this.value =='mail@nonyme') this.value=''" value="mail@nonyme" onBlur="if (this.value=='') this.value='mail@nonyme'" class="text"></td>
<?php
}
else
{
echo "<td width='300' height'21'><input type='text' name='mail' size='20' value='$mail'></td>";
}      
?>

</tr>
        <tr>
            
      <td width="185" height="21" align="right" valign="middle">
        <h3><font face="Verdana" size="2" color="#E8C47F">&nbsp;<font size="1">&nbsp; 
          <font color="E8C47F">Pays</font></font><font color="E8C47F"> 
          :</font></font></h3>
      </td>
          <td width="300" height="21"><?php echo "<input type='text' name='pays' size='20' value='$pays'>"; ?></td>
        </tr>
        <tr>
            
      <td width="185" height="113" align="right" valign="top">
        <h3><font face="Verdana" size="2" color="E8C47F">&nbsp;&nbsp;<font size="1"> 
          Votre message :</font></font></h3>
      </td>
          <td width="300" height="113"><?php echo "<textarea rows='6' name='message' cols='33'>$message</textarea>"; ?></td>
        </tr>
        

<?php
if (($mail != "" && $nom == "" && $pays == "" && $message == "") or ($nom != "" && $pays == "" && $message == "") or ($nom != "" && $pays != "" && $message == "") or ($nom != "" && $pays != "" && $message != "") or ($nom != "" && $pays == "" && $message != "") or ($nom == "" && $pays != "" && $message == "") or ($nom == "" && $pays != "" && $message != "") or ($nom == "" && $pays == "" && $message != ""))
{
 echo "<tr>
          <td width='485' height='1' align='left' colspan='2'>
            <p align='center'><font color='#E8C47F' face='Verdana' size='2'>(ATTENTION!!!
            Pour que votre message soit posté<br>
            <b>vous devez remplir TOUS les champs</b>)</font></p>
          </td>
        </tr>";
}
?>

      </table>
   
  <div align="center">
    <input type="submit" value="Envoyer" name="B1">
  </div>
</form>

<?php
}
?>