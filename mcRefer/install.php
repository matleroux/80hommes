<?
///////////////////////////////////////////
// mcRefer 1.0                       //
// Marc Cagninacci - marc@phpforums.net  //
// http://www.phpforums.net              //
///////////////////////////////////////////
?>
<html>
<head>
<title>Installation mcRefer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
a:active {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFF00; text-decoration: none; font-weight: bold}
a:link {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; text-decoration: none font-weight: bold}
a:hover {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFF00; text-decoration: none font-weight: bold}
a:visited {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; text-decoration: none font-weight: bold}
-->
</style>
</head>
<?
if ((file_exists("mcrconf.inc.php"))&&(!isset($verif))) {
include ("mcrconf.inc.php");
if($p!=$pass)  {
?>
<form name="form" method="post" action="install.php">
  <table width="400" border="0" cellspacing="1" bgcolor="#666699" align="center">
    <tr>
      <td colspan="2" bgcolor="#FFFF00">
        <div align="center"><b><font face="Verdana" size="2" color="#000000">Administration
          mcRefer </font></b></div>
      </td>
    </tr>
    <tr>
      <td>
        <div align="right"><font face="Verdana" color="#FFFFFF" size="1">Mot
          de Passe</font></div>
      </td>
      <td>
        <div align="center">
          <input type="password" name="p">
          <input type="hidden" name="verif" value="1">
          &nbsp;
          <input type="submit" name="envoi" value="Entrer">
        </div>
      </td>
    </tr>
  </table>
</form>
<?
         }
}
else {

if(isset($submit)) {
       if((!$bgcolor)||(!$tablecolor)||(!$tdcolor)||(!$fontface)||(!$fontcolor)||(!$fontsize)||(!$nomsite)||(!$url)||(!$pass))
        {
        unset($submit);
        ?>
        <table width="500" border="0" cellspacing="1" align="center">
  <tr>
    <td bgcolor="#666699">
      <div align="center"><font face="Verdana" size="2" color="#FFFFFF">Aucun champ ne doit rester vide !<br>(sauf <b>Email</b> si vous ne souhaitez pas recevoir les copies)</font>
      </div>
    </td>
  </tr>
</table>
<?
        }
        else
        {
$fd = fopen("mcrconf.inc.php","w");
fwrite($fd, "<?php\n$");
fwrite($fd, "bgcolor= \"$bgcolor\";\n$");
fwrite($fd, "tablecolor= \"$tablecolor\";\n$");
fwrite($fd, "tdcolor= \"$tdcolor\";\n$");
fwrite($fd, "fontface= \"$fontface\";\n$");
fwrite($fd, "fontcolor= \"$fontcolor\";\n$");
fwrite($fd, "fontsize= \"$fontsize\";\n$");
fwrite($fd, "font= '<font face=\"$fontface\" color=\"$fontcolor\" size=\"$fontsize\">';\n$");
fwrite($fd, "nomsite= \"$nomsite\";\n$");
fwrite($fd, "url= \"$url\";\n$");
fwrite($fd, "email= \"$email\";\n$");
fwrite($fd, "pass= \"$pass\";\n");
fwrite($fd, "?>");
fclose($fd);

?>
<table width="500" border="0" cellspacing="1" align="center">
  <tr>
    <td bgcolor="#666699">
      <div align="center"><font face="Verdana" size="2" color="#FFFFFF">Donn&eacute;es enregistr&eacute;es.<br><a href="<? echo $url; ?>"><b>Retour</b></a></font>
      </div>
    </td>
  </tr>
</table>

<?
       }
}

if (file_exists("mcrconf.inc.php")) {
include ("mcrconf.inc.php");
 }
?>


<body bgcolor="<? echo $bgcolor; ?>">

<br>
  <table width="500" border="0" cellspacing="1" align="center" bgcolor="#FFFF00">
    <tr>
      <td align="center">
        <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#000000"><b>Configuration
          mcRefer</b></font>
      </td>
    </tr>
    <tr>
      <td bgcolor="#666699" align="center">
        <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Création du Fichier de Configuration.</font>
      </td>
    </tr>
  </table>
  <br>

<form name="form2" method="post" action="install.php">

  <table width="500" border="0" cellspacing="1" cellpadding="2" bgcolor="<? echo $tablecolor; ?>" align="center">
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Couleur Fond de Page</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="bgcolor" value="<? echo $bgcolor; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Couleur des Bordures</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="tablecolor" value="<? echo $tablecolor; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Couleur du Formulaire</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="tdcolor" value="<? echo $tdcolor; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Police</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="fontface" value="<? echo $fontface; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Taille de Police</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="fontsize" value="<? echo $fontsize; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Couleur de Police</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="fontcolor" value="<? echo $fontcolor; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
       <? echo $font; ?>Nom de votre Site</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="nomsite" value="<? echo $nomsite; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>URL de votre Page d'accueil</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="url" value="<? echo $url; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
       <? echo $font; ?>Votre Email (si vous souhaitez recevoir une copie des recommandations envoyées)</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="text" name="email" value="<? echo $email; ?>">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="right">
        <? echo $font; ?>Mot de Passe mcRefer</font>
      </td>
      <td bgcolor="<? echo $tdcolor; ?>">
        <input type="password" name="pass">
      </td>
    </tr>
    <tr>
      <td bgcolor="<? echo $tdcolor; ?>">&nbsp;</td>
      <td bgcolor="<? echo $tdcolor; ?>">
         <input type="hidden" name="verif" value="1">
        <input type="submit" name="submit" value="Valider">
      </td>
    </tr>
  </table>
</form>
 <?
 }
 ?>
</body>
</html>