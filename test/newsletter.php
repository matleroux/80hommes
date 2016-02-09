<?php
/* fonction permetant l'affichage du formulaire */
function print_form($de, $objet, $corps) {
?>

<html>
<head>
<title>
Partie adminsitration de ProgOtoP.net
</title>
</head>

<form method="post">
<table border="0" cellspacing="0" cellpadding="0" width="80%">
   <tr>
       <td>
           De :
       </td>
       <td>
           <input type="text" name="de" value="<?php echo $de; ?>">
       </td>
   </tr>
   <tr>
       <td>
           Sujet :
       </td>
       <td>
          <input type="text" name="objet" value="<?php echo $objet; ?>">
       </td>
    </tr>
   <tr>
       <td>
          Message :
       </td>
       <td>
          <textarea cols="60" rows="5" name="corps"><?php echo $corps; ?></textarea>
       </td>
    </tr>
    <tr>
       <td colspan="2" align="center">
           <input type="submit" name="send" value="Envoyer">
       </td>
   </tr>
</table>
</form>

<?php
} // fin de la fonction
if (isset($send)) {
    if (strlen($corps)>0 && strlen($de)>0 && strlen($objet)>0) {
        $corps=@stripslashes($corps);
        @include("connection.php");
        $email=@mysql_query("select * from newsletter");
        while ($email_array=@mysql_fetch_array($email)) {
            $a=$email_array["email"];
            $is_send=@mail($a, $objet, $corps, $de);
            if ($is_send) {
                echo "<dd>mail envoyé à : ".$a."<br>\n";
            } else {
                 echo "<dd>Le mail n'a pu être envoyé à : ".$a."<br>\n";
            }
        }
    } else {
        echo "Veuillez remplir tous les champs !\n";
        print_form($de, $objet, $corps);
    }
} else {
print_form($de, $objet, $corps);
}
?>