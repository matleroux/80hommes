<?php
/* taitement du formulaire de la newsletter si son bouton submit a �t� press� */
if (isset($button_newsletter)) {
   /* s'il a �t� press� on v�rifie s'il est valide */
   if (strlen($newsletter_email)<7 || ! ereg("\.",$newsletter_email) || ! ereg("@",$newsletter_email)) {
       echo "<script language=\"javascript\">\n";
       echo "<!--\n";
       echo "alert(\"L'email saisi est invalide !\\nVeuillez resaisir celui-ci !\");\n";
        echo "//-->\n";
       echo "</script>\n";
       print_page($newsletter_email, $newsletter_choice, $page);
   /* sinon on taite la table en fonction des renseignements demand�s */
   } else {
       /* si le choix est inscription */
       if ($newsletter_choice=="inscribe") {
           @include("connection.php");
           $insert_mail=@mysql_query("insert into newsletter values('$newsletter_email')");
           /* on effectue un test pour savoir si l'adresse email existe d�j� (donc qu'elle a fait plant�e la requ�te !) */
           if($insert_mail) {
               echo "<script language=\"javascript\">\n";
               echo "<!--\n";
               echo "alert(\"Vous avez �t� ins�r� avec succ�s dans la newsletter !\");\n";
               echo "//-->\n";
               echo "</script>\n";
            } else {
               echo "<script language=\"javascript\">\n";
               echo "<!--\n";
               echo "alert(\"Votre email n'a pu �tre ins�r� car vous �tes d�j� inscrit � notre newsletter !\");\n";
               echo "//-->\n";
               echo "</script>\n";
            }
       /* sinon si le choix est d�sinscription */
       } elseif ($newsletter_choice=="unscribe") {
           @include("connection.php");
           $select_mail=@mysql_query("select * from newsletter where email='$newsletter_email'");
           /* on effectue un test pour savoir si l'adresse email existe d�j� (donc qu'elle a fait plant�e la requ�te !) */
           if(@mysql_num_rows($select_mail)==1) {
               @mysql_query("delete from newsletter where email='$newsletter_email'");
               echo "<script language=\"javascript\">\n";
               echo "<!--\n";
               echo "alert(\"Votre email a �t� supprim� avec succ�s de la newsletter !\");\n";
               echo "//-->\n";
               echo "</script>\n";
            } else {
               echo "<script language=\"javascript\">\n";
               echo "<!--\n";
               echo "alert(\"Votre email n'a pu �tre supprim� car vous n'�tes pas inscrit � notre newsletter !\");\n";
               echo "//-->\n";
               echo "</script>\n";
            }
       }
   /* on vide les valeurs de $newsletter_choice et $newsletter_email pour �viter les pb en cas d'actualisation de la page */
   $newsletter_choice="";
   $newsletter_email="";
   /* et on renvoie sur la page */
   print_page($newsletter_email, $newsletter_choice, $page);
   }
} else {
   /* s'il n'a pas �t� press� on affiche la page */
   print_page($newsletter_email, $newsletter_choice, $page);
}

/* la fonction print_page repr�sente toute la page � afficher */
function print_page($newsletter_email, $newsletter_choice, $page) {
?>

<html>
<head>
<title>newsletter</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="160" align="center">
                        <tr>
                          <td width="100%">
                             <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
                                <tr>
                                   <td height="5px">
                                </tr>
                                <tr>
                                   
          <td align="center" valign="middle" height="20px"> <span style="font-family:Verdana;font-size:10px;font-weight:bold;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Votre 
            email :</b></font></span> </td>
                                <tr>
                                   <td align="center">
                                      <form method="post">
                                      <input type="text" name="newsletter_email" value="<?php echo $newsletter_email; ?>" size="30">
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                      <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                      <tr>
                                      <td width="20px"></td>
                                      <td>
                                      <input type="radio" name="newsletter_choice" value="inscribe" <?php if($newsletter_choice!="unscribe") { echo " checked"; }?>>
                  <font face="Verdana, Arial, Helvetica, sans-serif">Inscription 
                  </font><br>
                  <br>
                  <input type="radio" name="newsletter_choice" value="unscribe" <?php if($newsletter_choice=="unscribe") { echo " checked"; }?>>
                  <font face="Verdana, Arial, Helvetica, sans-serif">D�sinscription 
                  </font></td>
                                      </tr>
                                      </table>
                                   </td>
                                </tr>
                                <tr>
                                   <td height="10px"> </td>
                                </tr>
                                <tr>
                                   
          <td align="center"> 
            <input type="submit" name="button_newsletter" value="S'inscrire">
            </form> </td>
                                </tr>
                                <tr>
                                   <td height="5px"></td>
                                </tr>
                             </table>
                          </td>
                        </tr>
                      </table>

</body>
</html>



<?php
}
?>
