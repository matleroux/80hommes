<?php
$fd = fopen("nbmsg.txt","r");
$nbremessages = fread ($fd, filesize("nbmsg.txt"));
fclose($fd);

$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);

$fd = fopen("debut.txt","r");
$debut = fread ($fd, filesize("debut.txt"));
fclose($fd);

$fd = fopen("fin.txt","r");
$fin = fread ($fd, filesize("fin.txt"));
fclose($fd);

?>

<div align="center">
  <center>
  <table border="0" width="650" cellspacing="0">
    <tr>
      <td width="33%" background="file://///Babel/home/webs/Tour%20du%20monde/Tour%20du%20monde/web/imges_ok/fond_sans_carte.gif"><b><font face="Verdana" size="1" color="#E8C47F">Messages:</font><font face="Verdana" size="1" color="#E8C47F"> 
        </font><font face="Verdana" size="1" color="#E8C47F"> 
        <? echo "$debut"; ?>
        </font><font face="Verdana" size="1" color="#E8C47F"> </font><font face="Verdana" size="2" color="#E8C47F">à</font><font face="Verdana" size="1" color="#E8C47F"> 
        </font><font face="Verdana" size="1" color="#E8C47F"> 
        <? echo "$fin"; ?>
        </font></b></td>
      <td width="33%" background="file://///Babel/home/webs/Tour%20du%20monde/Tour%20du%20monde/web/imges_ok/fond_sans_carte.gif"> 
        <p align="center"><font face="Verdana" size="1" color="#E8C47F"><b>Page:</b> 
          </font><b><font face="Verdana" size="1" color="#E8C47F"> 
          <?php echo"$page"; ?>
          </font></b> 
      </td>
    </center>
      <td width="34%" background="file://///Babel/home/webs/Tour%20du%20monde/Tour%20du%20monde/web/imges_ok/fond_sans_carte.gif" valign="middle" align="center"> 
        <p align="right"><font face="Verdana" size="1" color="#E8C47F"><b>Nombre 
          de messages:</b> </font><b><font face="Verdana" size="1" color="#E8C47F"> 
          <?php echo "$nbremessages"; ?>
          </font><font face="Verdana" size="1" color="#E8C47F"> 
          </font></b> 
      </td>
  </tr>
  </table>
</div>


