<?
   include "mcrconf.inc.php";
?>
<html>
<head>
<title>mcRefer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<style type="text/css">
<!--
a:link {  font-family: <? echo $fontface; ?>; color: <? echo $fontcolor; ?>; text-decoration: none}
a:actif {  font-family: <? echo $fontface; ?>; color: <? echo $fontcolor; ?>; text-decoration: none}
a:hover {  font-family: <? echo $fontface; ?>; color: <? echo $fontcolor; ?>; text-decoration: none}
a:visited {  font-family: <? echo $fontface; ?>; color: <? echo $fontcolor; ?>; text-decoration: none}
-->
</style>

<body bgcolor="<? echo $bgcolor; ?>" text="<? echo $fontcolor; ?>">
<?
   if((isset($submit))&&(ereg(".+(@.+)(.[[:alpha:]]{2}([[:alpha:]]?))$", $emailexp)))
      {
	if(ereg(".+(@.+)(.[[:alpha:]]{2}([[:alpha:]]?))$", $email1))
	{$email1=$email1;}
	else {unset($email1); unset($dest1);}
	if(ereg(".+(@.+)(.[[:alpha:]]{2}([[:alpha:]]?))$", $email2))
	{$email2=$email2;}
	else {unset($email2); unset($dest2);}
	if(ereg(".+(@.+)(.[[:alpha:]]{2}([[:alpha:]]?))$", $email3))
	{$email3=$email3;}
	else {unset($email3); unset($dest3);}

      if((!$email1)&&(!$email2)&&(!$email3))
         {echo "";}
      else {
         $texte=stripslashes($texte);

         if(isset($email1))
            {
            mail($email1, "Recommandation", "$texte\n__________________________\n$dest1, voici l'adresse du site $nomsite:\n$url", "From: $emailexp");
            }

         if(isset($email2))
            {
            mail($email2, "Recommandation", "$texte\n__________________________\n$dest2, voici l'adresse du site $nomsite:\n$url", "From: $emailexp");
            }

         if(isset($email3))
            {
            mail($email3, "Recommandation", "$texte\n__________________________\n$dest3, voici l'adresse du site $nomsite:\n$url", "From: $emailexp");
            }
            
         if(isset($email))
            {
            mail($email, "Recommandation", "Recommandation envoyée par $exp  $emailexp à:\n$dest1 $email1\n$dest2 $email2\n$dest3 $email3\nMessage:\n$texte", "From: $email");
            }


?>
      <table width="70%" border="0" cellspacing="1" cellpadding="5" bgcolor="<? echo $tablecolor; ?>" align="center">
      <tr>
      <td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Merci <? echo $exp; ?>,<br>
Le message suivant:</font></td></tr>
<tr><td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?><? echo $texte; ?><br>________________<br>
voici l'adresse du site <? echo $nomsite; ?>:<br><? echo $url; ?></font></td></tr>
<tr><td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>a &eacute;t&eacute; envoy&eacute; &agrave;:<br>
<? echo $dest1; echo " "; echo $email1; ?><br>
<? echo $dest2; echo " "; echo $email2; ?><br>
<? echo $dest3; echo " "; echo $email3; ?></font></td></tr>
<tr><td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>De la part de:<br>
<? echo $exp; echo "   "; echo $emailexp; ?></font></td>
</tr>
</table>
<?
} }
else
   {
?>
<form method="post" action="mcRefer.php">
<table width="70%" border="0" cellspacing="1" cellpadding="5" bgcolor="<? echo $tablecolor; ?>" align="center">
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center">&nbsp;</td>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Nom</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Email</font></td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Destinataire 1</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="dest1" value="<? echo $dest1; ?>">
</td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="email1" value="<? echo $email1; ?>">
</td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Destinataire 2</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="dest2" value="<? echo $dest2; ?>">
</td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="email2" value="<? echo $email2; ?>">
</td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Destinataire 3</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="dest3" value="<? echo $dest3; ?>">
</td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="email3" value="<? echo $email3; ?>">
</td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Votre Message</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center" colspan="2">
<textarea name="texte" cols="50"><? echo $texte; ?></textarea>
<br>
<? echo $font; ?>le lien vers <? echo $nomsite; ?> sera ajout&eacute; &agrave; la fin de votre message</font></td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><? echo $font; ?>Expediteur</font></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="exp" value="<? echo $exp; ?>">
</td>
<td bgcolor="<? echo $tdcolor; ?>" align="center">
<input type="text" name="emailexp" value="<? echo $emailexp; ?>">
</td>
</tr>
<tr>
<td bgcolor="<? echo $tdcolor; ?>" align="center"><input type="submit" name="submit" value="Envoyer"></td>
<td bgcolor="<? echo $tdcolor; ?>" align="center" colspan="2"><? echo $font; ?>Attention: votre Email est <b>obligatoire!</b></font>
</td>
</tr>
</table>
</form>

<?
}
?>
<p align="center"><? echo $font; ?><a href="<? echo $url; ?>" target="_top">Retour</a></font>
<br><br>
<a href="http://www.phpforums.net/index.php?dir=dld" target="_blank"><img src="mcr.gif" border="0"></a>
</p>
</body>
</html>