<?





function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}



/********* New translation style *******/

$lang=array("Adresse e-mail"=>"E-mailov� adresa",
	    "Inscription"=>"Zap�sanie sa",
	    "D�sinscription"=>"Odhl�senie sa",
	    "Nombre d'abonn�s"=>"Po�et prihl�sen�ch",
	    "Erreur ! Le mot de passe n'est pas valide"=>"Chyba! Zl� heslo",
	    "En attente de validation"=>"�akajte na overenie",
	    "Nbr de NewsLetter d�j� envoy�es"=>"Po�et u� poslan�ch spr�v",
	    "Num�ro de la prochaine NewsLetter"=>"Po�et �al�ch spr�v",
	    "Retour"=> "Sp��",
	    "Erreur"=>"Chyba",
	    "D�j� inscrit"=>"Tak�to z�znam u� v DB existuje",
	    "Impossible de trouver la base"=>"Nem��em n�js� DB",
	    "Impossible de trouver le serveur"=>"Nem��em sa spoji� s hostite�om",
	    "Erreur lors du flush de la table temp"=>"Chyba po�as odstra�ovania do�asnej tabulky",
	    "Appercu du message"=>"N�h�ad spr�vy",
	    "R�initialiser"=>"Reset",
	    "Sujet"=>"Predmet",
	    "R�diger un nouveau message"=>"Nap�sa� nov� spr�vu",
	    "Tous les champs doivent �tre remplis"=>"V�etky polia formul�ra musia by� vyplnen�",
	    "Texte"=>"Text",
	    "Adresse Email non valide"=>"Chybn� e-mailov� adresa",
	    "Administration"=>"Administra�n� z�na",
	    "Nouveau message"=>"Nov� spr�va",
	    "Liste des abonn�s"=>"Zoznam odberate�ov",
	    "Ajout d'un abonn�"=>"Pridaj odberate�a",
	    "Suppression d'un abonn�"=>"Odstr�� odberata�a",
	    "Voir l'historique"=>"Prezrie� logy",
	    "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"Pre odhl�senie sa, cho�te na tento URL odkaz",

	    "Configuration"=>"Konfigur�cia",
	    "Se d�connecter"=>"Log Out",
	    "Configuration de phpMyNewsletter"=>"Konfigur�cia phpMyNewsletter",
	    "Editer la configuration"=>"Zmeni� konfigur�ciu",
	    "Editer les messages de bienvenue ..."=>"Zmeni� uv�taciu spr�vu ...",
	    "Mise � jour de la configuration effectu�e"=>"Konfigur�cia aktualizovan�",
	    "Supprimer des abonn�s"=>"Odstr�ni� odberate�ov",
	    "S�lectionner les abonn�s � supprimer"=>"Ozna� odberate�a, ktor� sa m� odstr�ni�",
	    "Supprimer les abonn�s s�lectionn�s"=>"Odstr�ni� ozna�en�ch odberate�ov",
	    "Les abonn�s s�lectionn�s ont �t� supprim�"=>"Ozna�en� odberatelia odstr�nen�",
	    "Importer un fichier texte dans la base de donn�e"=>"Importuj textov� s�bor do DB",
	    "Importation effectu�e"=>"Importovanie hotov�",
	    "Logs de phpMyNewsletter"=>"phpMyNewsletter logy",
	    "Heure"=>"Hodina",
	    "Sujet du message de bienvenue"=>"Predmet uv�tacej spr�vy",
	    "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"Uv�tacia spr�va poslan� po s�hlase odberate�a",
	    "Corps du message de bienvenue"=>"Telo uv�tacej spr�vy",
	    "Pied des messages"=>"P�ta spr�vy",

	    "Mettre � jour"=>"Aktualizuj",
	    "R�initialiser"=>"Reset",
	    "Message de demande de confirmation"=>"Potvrdzovacia spr�va",
	    "Inscription"=>"Zap�sanie sa",

	    "Avertir de l'inscription par mail"=>"Informuj odberate�a",
	    "Un mail de d'information va �tre envoy�"=>"Informa�n� e-mail bol poslan�",
	    "Nombre total d'abonn�s"=>"Po�et odberate�ov",
	    "Vous n'avez pas d'abonn�s"=>"�iaden odberate� v DB",


	    "Mot de passe"=>"Heslo",
	    "valider"=>"Login",
	    "Identification"=>"Identifik�cia",
	    "Acc�s � l'administration"=>"Administr�torsk� pr�stup",

	    "Rendez-vous � l'adresse suivante pour confirmer votre inscription"=>"Jednoducho cho�te na tento odkaz, ak chcete potvrdi� zap�sanie sa",
	    "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message"=>"Ak ste nepo�adovali zap�sanie sa, jednoducho t�to spr�vu ignorujte",
	    "Confirmation de l'inscription"=>"Potvrdenie zap�sania sa",


	    "Votre inscription c'est bien d�roul�e"=>"Zap�sanie sa hotov�",
	    "L'inscription s'est bien d�roul�e"=>"Zap�sanie sa hotov�",
	    "Vous allez recevoir un mail de confirmation"=>"Potvrdzovac� e-mail V�m bol poslan�",
	    "Vous �tes d�j� inscrit"=>"U� ste v na�ej DB",
	    "Vous n'�tes pas inscrit � cette Newsletter"=>"E�te nie ste v na�ej DB",
	    "Votre inscription a �t� confirm�e"=>"Zap�sanie sa bolo potvrden�",
	    "D�sinscription de" =>"Odhl�senie sa z",
	    "effectu�e, merci de votre visite" =>"hotovo, �akujeme za Va�u n�v�tevu",
	    "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante" =>"Ak sa chcete op�� zap�sa�, jednoducho kliknite sem " ,


	    "Nom de la lettre d'information"=>"Meno oznamu",
	    "H�bergeur" =>"Poskytovate�",
	    "autre" =>"Ni� �al�ieho",
	    "Adresse de provenance des messages envoy�s" =>"Expedujem adresy (z po�a e-mail)",
	    "Nombre de jours accord� pour la validation de l'abonnement"=>"�akajte na overenie",
	    "jours"=>"dn�",
	    "Base de donn�es"=>"DataB�za",
	    "Serveur mysql"=>"MySQL server",
	    "Nom d'utilisateur"=>"U�. meno",
	    "Mot de passe"=>"Heslo",
	    "Nom de la base de donn�e"=>"Meno DB",
	    "Nom de la table de stockage des adresses"=>"Tabu�ka adries",
	    "Nom de la table d'attente de validation"=>"Tabu�ka overenia platnosti",
	    "Nom de la table de logs"=>"Tabu�ka logov",
	    "Nom de la table de config"=>"Tabu�ka nastaven�",
	    "Mot de passe d'acc�s au panneau d'administration"=>"Heslo pre administra�n� z�nu",
	    "Nombre de newsletter � afficher par page de logs"=>"Po�et logov na str�nku",
	    "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Pr�klad URL web str�nky:  http://www.mojweb.com/ (nazabudnite na posledn� / )",
	    "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin"=>"Pr�klad cesty k phpMyNewsletter: tools/newsletter/ (nazabudnite na posledn� / )",
	    "Langue"=>"Jazyk",
	    "Activer le processus de validation des inscriptions"=>"Povo� overovac� proces pri zap�san� sa",
	    "OUI"=>"�NO",
	    "NON"=>"NIE",

	    "Export" => "Export",
	    "Exporter les abonn�s" => "Exportuj odberate�ov",
	    "exporter" => "export",

	    "Collez les lignes suivantes dans le fichier include/config.inc.php" => "Vystrihni & Vlo� riadky z include/config.inc.php",

	    "Message envoy�"=>"Spr�va poslan�",
	    "Lettre d'information N-"=>"Oznam #",
	    "Envoyer le message"=>"Posla� spr�vu",
	    "Retour"=>"Cho� sp��");
?>