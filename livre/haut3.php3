<?php
$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);

$fd = fopen("nbmsg.txt","r");
$nbremessages = fread ($fd, filesize("nbmsg.txt"));
fclose($fd);

$debut = (20 * $page) - 20  + 1;
$fin = $debut + ($nbremessages - $debut);
$derpage = ceil($nbremessages / 20); 

?>


<div align="center">
  <table border="0" width="650" height="30">
    <tr>
      <td width="33%" height="26"><font face="Verdana" size="1"><b>
<?php
$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);
if ($page == 1)
echo "<font color='#E8C47F'>précédente</font>";
else
{
$page = $page - 1;
echo "<a href='livredor.php3?page=$page' style='color: #E8C47F'>précédente";
}
?>
</b></font></td>
      <td width="33%" height="26">
        <p align="center"><font face="Verdana" size="1" color="#E8C47F"><b>[
<?php
$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);
$pagencours = 1;
while ($pagencours <= $derpage)
{
if ($page != $pagencours)
echo "<a href='livredor.php3?page=$pagencours' style='color: #E8C47F'>$pagencours</a>";
else
echo "<font color='#E8C47F'>$pagencours</font>";

$pagencours = $pagencours + 1;

if ($pagencours <= $derpage)
echo "-";
}

?>
 ]</b></font></td>
    <td width="34%" height="26">
      <p align="right"><font face="Verdana" size="1"><b>

<?php
$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);
if ($derpage == $page)
echo "<font color='#E8C47F'>suivante</font>";
else
{
$page = $page + 1;
echo "<a href='livredor.php3?page=$page' style='color: #E8C47F'>suivante";
}
?>

</b></font></td>
  </tr>
  </table>
</div>