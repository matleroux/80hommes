<?php
if (!$bd=mysql_connect("localhost", "root", "")) {
    print ("<h1>Connexion au serveur impossible !</h1>\n");
} else {
    mysql_select_db("newletter",$bd);
}
?>