<?





function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}



/********* New translation style *******/

$lang=array("Adresse e-mail"=>"E-mail Address",	
	    "Inscription"=>"Subscription",
	    "D�sinscription"=>"Unsubscription",
	    "Nombre d'abonn�s"=>"Number of subscribers",
	    "Erreur ! Le mot de passe n'est pas valide"=>"Error ! Wrong password",
	    "En attente de validation"=>"Waiting for validation",
	    "Nbr de NewsLetter d�j� envoy�es"=>"Numbers of newsletter already sent",
	    "Num�ro de la prochaine NewsLetter"=>"Number of the next newsletter",
	    "Retour"=> "Back",
	    "Erreur"=>"Error",
	    "D�j� inscrit"=>"Already in the Database",
	    "Impossible de trouver la base"=>"Unable to find Database",
	    "Impossible de trouver le serveur"=>"Unable to connect to host",
	    "Erreur lors du flush de la table temp"=>"Error during temporary table flush",
	    "Appercu du message"=>"Message Preview",
	    "R�initialiser"=>"Reset",
	    "Sujet"=>"Subject",
	    "R�diger un nouveau message"=>"Compose a new message",
	    "Tous les champs doivent �tre remplis"=>"All fields have to be filled in",
	    "Texte"=>"Text",
	    "Adresse Email non valide"=>"Invalid Email Address",
	    "Administration"=>"Administration Area",
	    "Nouveau message"=>"News message",
	    "Liste des abonn�s"=>"Subscribers list",
	    "Ajout d'un abonn�"=>"Add a subscriber",
	    "Suppression d'un abonn�"=>"Delete a Subscriber",
	    "Voir l'historique"=>"View logs",
	    "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"To unsubscribe, go to the followig URL",

	    "Configuration"=>"Configuration",
	    "Se d�connecter"=>"Log Out",
	    "Configuration de phpMyNewsletter"=>"phpMyNewsletter Configuration",
	    "Editer la configuration"=>"Edit Configuration",
	    "Editer les messages de bienvenue ..."=>"Edit welcome message ...",
	    "Mise � jour de la configuration effectu�e"=>"Configuration updated",
	    "Supprimer des abonn�s"=>"Delete Subscribers",
	    "S�lectionner les abonn�s � supprimer"=>"Select subscibers you want to delete",
	    "Supprimer les abonn�s s�lectionn�s"=>"Delete selected subscribers",
	    "Les abonn�s s�lectionn�s ont �t� supprim�"=>"Selected subscribers deleted",
	    "Importer un fichier texte dans la base de donn�e"=>"Import a text file in the database",
	    "Importation effectu�e"=>"Importation Done",
	    "Logs de phpMyNewsletter"=>"phpMyNewsletter logs",
	    "Heure"=>"Hour",
	    "Sujet du message de bienvenue"=>"Welcome message subject",
	    "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"Welcome message sent after subscriber confirmation",
	    "Corps du message de bienvenue"=>"Welcome message body",
	    "Pied des messages"=>"Message footer",
	    
	    "Mettre � jour"=>"Update",
	    "R�initialiser"=>"Reset",
	    "Message de demande de confirmation"=>"Confirmation message",
	    "Inscription"=>"Subscription",
	    
	    "Avertir de l'inscription par mail"=>"Inform the subscriber",
	    "Un mail de d'information va �tre envoy�"=>"An information email has been sent",
	    "Nombre total d'abonn�s"=>"Number of subscriber",
	    "Vous n'avez pas d'abonn�s"=>"No subscriber in the database",
	    
	    
	    "Mot de passe"=>"Password",
	    "valider"=>"Login",
	    "Identification"=>"Identification",
	    "Acc�s � l'administration"=>"Administration Access",
	    
	    "Rendez-vous � l'adresse suivante pour confirmer votre inscription"=>"Just go to the the following link to confirm your subscription",
	    "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message"=>"If you didn't request this subscription, just ignore this message",
	    "Confirmation de l'inscription"=>"Subscription confirmation",
	    
	    
	    "Votre inscription c'est bien d�roul�e"=>"Subscription successfull",
	    "L'inscription s'est bien d�roul�e"=>"Subscription successfull",
	    "Vous allez recevoir un mail de confirmation"=>"A confirmation email has been sent to you",
	    "Vous �tes d�j� inscrit"=>"You are already in the database",
	    "Vous n'�tes pas inscrit � cette Newsletter"=>"You're not in the database",
	    "Votre inscription a �t� confirm�e"=>"Subscription confirmed",
	    "D�sinscription de" =>"Unsubscription of",
	    "effectu�e, merci de votre visite" =>"done, thank you for your visite",
	    "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante" =>"If you want to subscribe back, just click here " ,
	    
	    
	    "Nom de la lettre d'information"=>"Newsletter name",
	    "H�bergeur" =>"Provider",
	    "autre" =>"None of the above",
	    "Adresse de provenance des messages envoy�s" =>"Expediting Address (From email field)",
	    "Nombre de jours accord� pour la validation de l'abonnement"=>"Waiting for validation",
	    "jours"=>"days",
	    "Base de donn�es"=>"DataBase",
	    "Serveur mysql"=>"MySQL Server",
	    "Nom d'utilisateur"=>"Username",
	    "Mot de passe"=>"Password",
	    "Nom de la base de donn�e"=>"Database Name",
	    "Nom de la table de stockage des adresses"=>"Address table",
	    "Nom de la table d'attente de validation"=>"Validation table",
	    "Nom de la table de logs"=>"Logs table",
	    "Nom de la table de config"=>"Config table",
	    "Mot de passe d'acc�s au panneau d'administration"=>"Administration area password",
	    "Nombre de newsletter � afficher par page de logs"=>"Number of logs per page",
	    "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Web page url by example:  http://www.myweb.com/ (don't forget the last / )", 
	    "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin"=>"Path to phpMyNewsletter by example: tools/newsletter/ (don't forget the last / )",
	    "Langue"=>"Language",  
	    "Activer le processus de validation des inscriptions"=>"Enable Subscription Validation Process",
	    "OUI"=>"YES",
	    "NON"=>"NO",
	    
	    "Export" => "Export",
	    "Exporter les abonn�s" => "Export subscribers",
	    "exporter" => "export",

	    "Collez les lignes suivantes dans le fichier include/config.inc.php" => "Cut & paste the lines below in include/config.inc.php",
	    "Cr�� le fichier include/config.inc.php, puis Collez les lignes suivantes dans ce fichier."=>"Create the include/config.inc.php file, then Cut & paste the lines below in this file",
	    
	    "Message envoy�"=>"Message Sent",
	    "Lettre d'information N�"=>"Newsletter #",
	    "Envoyer le message"=>"Send message",
	    "Retour"=>"Go Back",




	    "Cr�er la base de donn�e"=>"Create database",
	    "Cr�er les tables"=>"Create database tables",
	    "inscrit"=>"subscriber",
	    "inscrits"=>"subscribers"

);
?>
