<?

function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}



$lang=array("Adresse e-mail"                 =>"E-mail Adresse",
            "Inscription"                 =>"Abonnieren",
            "D�sinscription"                 =>"Abbestellen",
            "Nombre d'abonn�s"         =>"Anzahl Abonnenten",
            "Erreur ! Le mot de passe n'est pas valide"  =>"Fehler! Falsches Passwort",
            "En attente de validation"        =>"Warten auf Best�tigung",
            "Nbr de NewsLetter d�j� envoy�es" =>"Anzahl bereits gesendete Newsletter",
            "Num�ro de la prochaine NewsLetter"        =>"Nummer des n�chsten Newsletters",

            "Retour"                         =>"Zur�ck",
            "Erreur"                        =>"Fehler",
            "D�j� inscrit"                =>"Bereits in der Datenbank",
            "Impossible de trouver la base"  =>"Kann Datenbank nicht finden",
            "Impossible de trouver le serveur"  =>"Kann nicht mit dem Host verbinden",
            "Erreur lors du flush de la table temp" =>"Fehler w�hrend des tempor�ren table-flush",


            /*** ENVOI DE MESSAGE ***/
            "Appercu du message"         =>"Newsletter Vorschau",
            "R�initialiser"                =>"Reset",
            "Sujet"                        =>"Betreff",
            "R�diger un nouveau message"  =>"Neue Nachricht erstellen",
            "Tous les champs doivent �tre remplis" =>"Alle Felder m�ssen ausgef�llt werden",
            "Texte"                        =>"Text",
            "Adresse Email non valide" =>"Ung�ltige Email-Adresse",


        /*** ADMININSTRATION ***/
         "Administration"  =>"Administrations-Seite",
         "Nouveau message"                =>"Neue Nachricht",
         "Liste des abonn�s"        =>"Abonnentenliste",
            "Ajout d'un abonn�"        =>"Abonnent hinzuf�gen",
            "Suppression d'un abonn�"        =>"Abonnent l�schen",
         "Voir l'historique"                =>"Logs ansehen",
         "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"Um den Newsletter abzubestellten gehen Sie bitte zu folgender URL",
            "Configuration"                =>"Konfiguration",
         "Se d�connecter"                =>"Ausloggen",
         "Configuration de phpMyNewsletter" =>"phpMyNewsletter Konfiguration",
         "Editer la configuration"        =>"Konfiguration editieren",
         "Editer les messages de bienvenue ..."        =>"Willkommensnachricht editieren...",
         "Mise � jour de la configuration effectu�e"          =>"Konfiguration aktualisiert",
         "Supprimer des abonn�s" =>"Abonnenten l�schen",
         "S�lectionner les abonn�s � supprimer" =>"Markieren Sie die Abonnenten, die Sie l�schen wollen",
         "Supprimer les abonn�s s�lectionn�s"        =>"Markierte Abonnenten l�schen",
         "Les abonn�s s�lectionn�s ont �t� supprim�" =>"Markierte Abonnenten gel�scht",
         "Importer un fichier texte dans la base de donn�e" =>"Textdatei in die Datenbank importieren",
         "Importation effectu�e"        =>"Import erfolgreich",

         /*** Eingef�gt von Tom ***/
         "Export" =>"Textdatei exportieren",
         "exporter" =>"exportieren",
         "Envoyer le message" =>"Nachricht absenden",
         "Newsletter envoy�e" =>"Nachricht versendet",
		 "Exporter les abonn�s" =>"Abonnenten exportieren",

         "Logs de phpMyNewsletter" =>"phpMyNewsletter Logdateien",
         "Heure" =>"Stunde",
          "Pour vous desinscrire, cliquez ici" =>"Um den Newsletter abzubestellen, hier klicken",

         "Sujet du message de bienvenue"         =>"Betreff Willkommensnachricht",
         "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"        =>"Willkommensnachricht, die nach Best�tigung des Abonnenten verschickt wird",
         "Corps du message de bienvenue"        =>"Text der Willkommensnachricht",
         "Pied des messages" =>"Nachrichtenfu� der Willkommensnachricht" ,

         "Mettre � jour"        =>"Aktualisieren",
         "R�initialiser" =>"Reinitialisieren",
         "Message de demande de confirmation" =>"Best�tigungsnachricht",
         "Inscription"        =>"Abonnement",

         "Avertir de l'inscription par mail" =>"Abonnenten informieren",
         "Un mail de d'information va �tre envoy�" =>"Eine Inforamtions-EMail wurde verschickt",
         "Nombre total d'abonn�s" =>"Anzahl der Abonnenten",
         "Vous n'avez pas d'abonn�s" =>"Keine Abonnenten in der Datenbank",

        /****** FORMULAIRE d'IDENTIFICATION  *********/
         "Mot de passe"                  =>"Passwort",
         "valider"                 =>"Login",
         "Identification"                =>"Identifizierung",
         "Acc�s � l'administration"        =>"Administrations-Zugang",

         "Rendez-vous � l'adresse suivante pour confirmer votre inscription" =>"Bitte gehen Sie zu folgendem Link um Ihr Abonnement zu best�tigen",
         "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message" =>"Falls Sie unseren Newsletter nicht abonnieren m�chten ignorieren Sie bitte diese Mail",
         "Confirmation de l'inscription"        =>"Best�tigung des Abonnements",


         "Votre inscription s'est bien d�roul�e" =>"Abonnement erfolgreich",
         "L'inscription c'est bien d�roul�e" =>"Abonnement erfolgreich",
         "Vous allez recevoir un mail de confirmation" =>"Eine Best�tigungs-EMail wurde an Sie versandt",
         "Vous �tes d�j� inscrit" =>"Sie sind bereits Abonnent",
         "Vous n'�tes pas inscrit � cette Newsletter" =>"Sie sind nicht in unserer Abonnenten-Datenbank eingetragen",
         "Votre inscription a �t� confirm�e" =>"Abonnement best�tigt",
         "D�sinscription de"  =>"Austragen von",
         "effectu�e, merci de votre visite"  =>"erledigt. Wir danken f�r Ihren Besuch",
         "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante"  =>"Falls Sie sich wieder eintragen m�chten, klicken Sie bitte hier " ,


         "Nom de la lettre d'information" =>"Name des Newsletters",
         "H�bergeur"  =>"Provider",
         "autre"  =>"Keiner von diesen",
         "Adresse de provenance des messages envoy�s"  =>"Absender Adresse (From email field)",
         "Nombre de jours accord� pour la validation de l'abonnement" =>"Warten auf Best�tigung",
         "jours" =>"days",
         "Base de donn�es"                         =>"Datenbank",
         "Serveur mysql"                                 =>"MySQL Server",
         "Nom d'utilisateur"                         =>"Username",
         "Mot de passe"                                  =>"Passwort",
         "Nom de la base de donn�e"                 =>"Datenbankname",
         "Nom de la table de stockage des adresses" =>"Addressen-Tabelle",
         "Nom de la table d'attente de validation" =>"Best�tigungs-Tabelle",
         "Nom de la table de logs"         =>"Log-Tabelle",
         "Nom de la table de config"        =>"Konfigurationstabelle",
         "Mot de passe d'acc�s au panneau d'administration" =>"Administrations Passwort",
         "Nombre de newsletter � afficher par page de logs" =>"Anzahl der Logs pro Seite",
         "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin"  =>"URL der Website, z.B.:  http://www.myweb.de/ (abschlie�enden Slash nicht vergessen)",
         "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin" =>"Pfad zu phpMyNewsletter, z.B.: tools/newsletter/ (abschlie�enden Slash nicht vergessen)",
            "Langue"         =>"Language",
            "Activer le processus de validation des inscriptions" =>"Abonnementsbest�tigung aktivieren",
            "OUI" =>"JA",
	    "NON" =>"NEIN",
	    "Lettre d'information N�"=> "Newsletter ",
	    "Collez les lignes suivantes dans le fichier include/config.inc.php" => "Cut & paste the lines below in include/config.inc.php"
);





?>
