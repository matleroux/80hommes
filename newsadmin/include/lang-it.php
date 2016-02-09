<?

function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}



$lang=array(  "Adresse e-mail"=>"Indirizzo E-mail",
	      "Inscription"=>"Iscrizione",
	      "D�sinscription"=>"Cancellazione",
	      "Nombre d'abonn�s"=>"Numero degli iscritti",	 
	      "Erreur ! Le mot de passe n'est pas valide"=>"Errore ! Password Sbagliata",
	      "En attente de validation"=>"In Attesa di Convalida",
	      "Nbr de NewsLetter d�j� envoy�es"=>"Numeri delle NewsLetter gi� spedite",
	      "Num�ro de la prochaine NewsLetter"=>"Numero della prossima NewsLetter",

	      "Retour"=>"Indietro",
	      "Erreur"=>"Errore",
	      "D�j� inscrit"=>"Iscritto gi� presente",
	      "Impossible de trouver la base"=>"Non trovo il Database",
	      "Impossible de trouver le serveur"=>"Non posso connettermi all host",
	      "Erreur lors du flush de la table temp"=>"Errore durante il flush",

	      
	      /*** ENVOI DE MESSAGE ***/
	      "Appercu du message"=>"Anteprima Messaggio",
	      "R�initialiser"=>"Reset",
	      "Sujet"=>"Oggetto",
	      "R�diger un nouveau message"=>"Componi un nuovo messaggio",
	      "Tous les champs doivent �tre remplis"=>"Tutti i campi devono essere riempiti",
	      "Texte"=>"Testo",
	      "Adresse Email non valide"=>"Indirizzo Email non valido",	
	      
	
	      /*** ADMININSTRATION ***/
	      "Administration"=>"Administration Area",
	      "Nouveau message"=>"Nuovi messaggi",
	      "Liste des abonn�s"=>"Lista Iscritti",
	      "Ajout d'un abonn�"=>"Aggiungi un iscritto",
	      "Suppression d'un abonn�"=>"Cancella un iscritto",
	      "Voir l'historique"=>"Vedi logs",
	      "Pour vous d�sinscrire, rendez-vous � l'adresse suivante"=>"per cancellarti, vai al seguente URL",
	      "Configuration"=>"Configurazione",
	      "Se d�connecter"=>"Log Out",	
	      "Configuration de phpMyNewsletter"=>"phpMyNewsletter Configurazione",
	      "Editer la configuration"=>"Edit Configurazione",
	      "Editer les messages de bienvenue ..."=>"Modifica il messaggio di benvenuto",
	      "Mise � jour de la configuration effectu�e"=>"Configurazione aggiornata",
	      "Supprimer des abonn�s"=>"Cancella Iscritti",
	      "S�lectionner les abonn�s � supprimer" =>"Seleziona iscritti che vuoi cancellare",
	      "Supprimer les abonn�s s�lectionn�s"	=>"Cancella iscritti selezionati",
	      "Les abonn�s s�lectionn�s ont �t� supprim�" =>"Iscritti selezionati Cancellati",
	      
	      "Importer un fichier texte dans la base de donn�e" =>"Importa un file di testo nel database",
	      "Importation effectu�e"	=>"Importazione OK",
	
	      "Logs de phpMyNewsletter" =>"phpMyNewsletter logs",
	      "Heure" =>"Ora",
	      
	      
	      "Sujet du message de bienvenue" 	=>"Oggetto del messaggio di benvenuto",
	      "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"messaggio di benvenuto dopo la conferma iscritto",
	      "Corps du message de bienvenue"=>"Testo messaggio di benvenuto",
	      "Pied des messages" =>"Piedipagina messaggio" ,
	      
	      "Mettre � jour"=>"Aggiorna",
	      "R�initialiser" =>"Ripulisci",
	      "Message de demande de confirmation" =>"Messaggio di Conferma",
	      "Inscription"=>"Iscrizione",
	      
	      "Avertir de l'inscription par mail" =>"Informa di una iscrizione per posta",
	      "Un mail de d'information va �tre envoy�" =>"Una Email di iscrizione inviata",
	      "Nombre total d'abonn�s" =>"Numero di iscritto",
	      "Vous n'avez pas d'abonn�s" =>"Nessun iscritto nel database",
	      
	 
	      "Mot de passe"  		=>"Password",
	      "valider" =>"Login",
	      "Identification"=>"Identificazione",
	      "Acc�s � l'administration"=>"Administration Access",
	      
	      "Rendez-vous � l'adresse suivante pour confirmer votre inscription" =>"Vai a questo link per confermare la tua iscrizione",
	      "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message" =>"Se non ti sei iscritto, ignora questo messaggio",
	      "Confirmation de l'inscription"=>"Conferma Iscrizione",
	      
	      
	      "Votre inscription c'est bien d�roul�e" =>"Iscrizione avvenuta",
	      "L'inscription s'est bien d�roul�e" =>"Iscrizione avvenuta",
	      "Vous allez recevoir un mail de confirmation" =>"Ti ho spedito una Email di conferma spedita",
	      "Vous �tes d�j� inscrit" =>"Sei gi� Iscritto nel Database",
	      "Vous n'�tes pas inscrit � cette Newsletter" =>"Non sei iscritto nel Database",
	      "Votre inscription a �t� confirm�e" =>"Iscrizione confermata",
	      "D�sinscription de"  =>"Cancellazione di",
	      "effectu�e, merci de votre visite"  =>"fatto, grazie per la visita",
	      "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante"  =>"If you want to subscribe back, just click here " ,

	      
	      "Nom de la lettre d'information" =>"Nome della Newsletter",
	      "H�bergeur"  =>"Provider",
	      "autre"  =>"Nessuno in elenco",
	      "Adresse de provenance des messages envoy�s"  =>"Indirizzo di Spedizione (da campo email)",
	      "Nombre de jours accord� pour la validation de l'abonnement" =>"Aspetto la convalida",
	      "jours" =>"giorni",
	      "Base de donn�es" 			=>"DataBase",
	      "Serveur mysql" 				=>"MySQL Server",
	      "Nom d'utilisateur" 			=>"Username",
	      "Mot de passe"  				=>"Password",
	      "Nom de la base de donn�e" 		=>"Database Name",
	      "Nom de la table de stockage des adresses" =>"Address table",
	      "Nom de la table d'attente de validation" =>"Validation table",
	      "Nom de la table de logs" 	=>"Logs table",
	      "Nom de la table de config"=>"Config table",
	      "Mot de passe d'acc�s au panneau d'administration" =>"Administration area password",
	      "Nombre de newsletter � afficher par page de logs" =>"Number of logs per page",
	      "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Web page url by example:  http://www.myweb.com/ (don't forget the last / )", 
	      "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin" =>"Path to phpMyNewsletter by example: tools/newsletter/ (don't forget the last / )",
	      "Langue" 	=>"Language",  
	      "Activer le processus de validation des inscriptions" =>"Enable Subscription Validation Process",
	      "OUI" =>"SI",
	      "NON" =>"NO",
	      "Lettre d'information N�"=> "Newsletter ",
	      "Collez les lignes suivantes dans le fichier include/config.inc.php" => "Cut & paste the lines below in include/config.inc.php"
);



?>
