<?php
$fd = fopen("page.txt","r");
$page = fread ($fd, filesize("page.txt"));
fclose($fd);

$fd = fopen("nbmsg.txt","r");
$nbremessages = fread ($fd, filesize("nbmsg.txt"));
fclose($fd);

$fd = fopen("messages.txt","r");
$messages = fread ($fd, filesize("messages.txt"));
fclose($fd);

$debut = (20 * $page) - 20  + 1;
$derpage = ceil($nbremessages / 20);

if ($derpage == $page)
{
if ($nbremessages < 20)
$fin = $nbremessages;
else
{
$sto = 20 - (($derpage * 20) - $nbremessages);
$fin = (($derpage - 1) * 20) + $sto;
}
}
else
$fin = $page * 20;

$fd = fopen("debut.txt","w");
fwrite($fd, $debut);
fclose($fd);
 
$fd = fopen("fin.txt","w");
fwrite($fd, $fin);
fclose($fd);

$compt = 0;
$compt2= 0;


while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Nom:>', $compt2);
$compt = $compt + 1;
$compt2 = $rangdepart + 1;
}

$compt = 0;
$compt3 = 0;

while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Mail:>', $compt3);
$compt = $compt + 1;
$compt3 = $rangdepart + 1;
}

$compt = 0;
$compt4 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Message:>', $compt4);
$compt = $compt + 1;
$compt4 = $rangdepart + 1;
}

$compt = 0;
$compt5 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Date:>', $compt5);
$compt = $compt + 1;
$compt5 = $rangdepart + 1;
}

$compt = 0;
$compt6 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Mail:>', $compt6);
$compt = $compt + 1;
$compt6 = $rangdepart + 1;
}

$compt = 0;
$compt7 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Message:>', $compt7);
$compt = $compt + 1;
$compt7 = $rangdepart + 1;
}

$compt = 0;
$compt8 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<Date:>', $compt8);
$compt = $compt + 1;
$compt8 = $rangdepart + 1;
}

$compt = 0;
$compt9 = 0;
while ($debut > ($compt + 1))
{
$rangdepart = strpos($messages, '<!--nouveau message>', $compt9);
$compt = $compt + 1;
$compt9 = $rangdepart + 1;
}

$compteur = $debut;
$debut2 = $debut;

//debut affichage des messages
while ($compteur <= $fin)
{
echo "<div align='center'><center>
  <table border='1' width='650' cellspacing='0'  bordercolorlight='#E8C47F' bordercolordark='#E8C47F'>
    <tr><td width='100%'><table border='0' width='100%'><tr>
            <td width='43%'><font face='Verdana' size='1' color='#E8C47F'><b>";


////////////////////////////////////
//     début affichage DU NOM     //
////////////////////////////////////
$rang = strpos($messages, '<Nom:>', $compt2);
$rang2 = strpos($messages, '<Mail:>', $compt3);
$rang3 = $rang2 - $rang;

$nompers = substr($messages, $rang, $rang3);
$nompers = str_replace("\'", "'", $nompers);
echo "$nompers";

$compt = 0;
$compt2= 0;
while (($debut2 + 1) > ($compt + 1))
{
$rangdepart = strpos($messages, '<Nom:>', $compt2);
$compt = $compt + 1;
$compt2 = $rangdepart + 1;
}

$compt = 0;
$compt3 = 0;
while (($debut2 + 1)> ($compt + 1))
{
$rangdepart = strpos($messages, '<Mail:>', $compt3);
$compt = $compt + 1;
$compt3 = $rangdepart + 1;
}
////////////////////////////////////
//      FIN affichage DU NOM      //
////////////////////////////////////


echo "</b></font></td><td width='37%'><font face='Verdana' size='1' color='#E8C47F'><b>";

////////////////////////////////////
//     DEBUT affichage DU MAIL    //
////////////////////////////////////
$rang = strpos($messages, '<Mail:>', $compt4);
$rang2 = strpos($messages, '<Message:>', $compt5);
$rang3 = $rang2 - $rang;

$nompers = substr($messages, $rang, $rang3);
$nompers = str_replace("\'", "'", $nompers);
$mail = "mailto:$nompers";
$mail = str_replace("<Mail:>", "", $mail);
echo "<A HREF='$mail' style='color: #E8C47F'>$nompers</a>";

$compt = 0;
$compt6 = 0;
while (($debut2 +1) > ($compt + 1))
{
$rangdepart = strpos($messages, '<Mail:>', $compt6);
$compt = $compt + 1;
$compt6 = $rangdepart + 1;
}

$compt = 0;
$compt7 = 0;
while (($debut2 + 1) > ($compt + 1))
{
$rangdepart = strpos($messages, '<Message:>', $compt7);
$compt = $compt + 1;
$compt7 = $rangdepart + 1;
}
////////////////////////////////////
//     FIN affichage DU MAIL      //
////////////////////////////////////


echo "</b></font></td></center><td width='20%'>
<p align='right'><font face='Verdana' size='1' color='#E8C47F'><b>";


////////////////////////////////////
//   DEBUT affichage DE LA DATE   //
////////////////////////////////////
$rang = strpos($messages, '<Date:>', $compt2);
$rang2 = strpos($messages, '<!--nouveau message>', $compt3);
$rang3 = $rang2 - $rang;

$nompers = substr($messages, $rang, $rang3);
$nompers = str_replace("\'", "'", $nompers);
echo "<font color='#E8C47F'>$nompers</font>";

$compt = 0;
$compt8 = 0;
while (($debut2 + 1)> ($compt + 1))
{
$rangdepart = strpos($messages, '<Date:>', $compt8);
$compt = $compt + 1;
$compt8 = $rangdepart + 1;
}

$compt = 0;
$compt9 = 0;
while (($debut2 + 1)> ($compt + 1))
{
$rangdepart = strpos($messages, '<!--nouveau message>', $compt9);
$compt = $compt + 1;
$compt9 = $rangdepart + 1;
}
////////////////////////////////////
//    FIN affichage DE LA DATE    //
////////////////////////////////////


echo "</b></font></td></tr><center><tr>
            <td width='100%' colspan='3'><font face='Verdana' size='1' color='#E8C47F'>";


////////////////////////////////////
//DEBUT affichage texte du message//
////////////////////////////////////
$rang = strpos($messages, '<Message:>', $compt4);
$rang2 = strpos($messages, '<Date:>', $compt5);
$rang3 = $rang2 - $rang;

$nompers = substr($messages, $rang, $rang3);
$nompers = str_replace("\'", "'", $nompers);
$nompers = nl2br($nompers);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nompers";


$compt = 0;
$compt4 = 0;
while (($debut2 + 1) > ($compt + 1))
{
$rangdepart = strpos($messages, '<Message:>', $compt4);
$compt = $compt + 1;
$compt4 = $rangdepart + 1;
}

$compt = 0;
$compt5 = 0;
while (($debut2 + 1) > ($compt + 1))
{
$rangdepart = strpos($messages, '<Date:>', $compt5);
$compt = $compt + 1;
$compt5 = $rangdepart + 1;
}
////////////////////////////////////
// FIN affichage texte du message //
////////////////////////////////////


echo "</font></td></tr></table></td></tr></table></center></div><br>";

$compteur = $compteur + 1;

////////////////////////////////////////////////////////////////
// on augmente d'1 point pour le compteur de début du message///
$debut2 = $debut2 + 1;                                       ///
////////////////////////////////////////////////////////////////

}
?>