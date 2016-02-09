<?

function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}


/********* New translation style *******/


$lang=array("Adresse e-mail"=>"e-mail Adres",   
            "Inscription"=>"Inschrijven",
            "D�sinscription"=>"Uitschrijven",
            "Nombre d'abonn�s"=>"Aantal abonees",
            "Erreur ! Le mot de passe n'est pas valide"=>"Fout ! Verkeerd paswoord",
            "En attente de validation"=>"Wachten op validatie",
            "Nbr de NewsLetter d�j� envoy�es"=>"Aantal reeds verzonden nieuwsbrieven",
            "Num�ro de la prochaine NewsLetter"=>"Nummer van de volgende nieuwsbrief",
            "Retour"=> "Terug",
            "Cr�ation de la base de donn�e"=>"Database aangemaakt",
            "Cr�ation des tables"=>"Tabellen aangemaaakt",
            "Erreur"=>"Fout",
            "D�j� inscrit"=>"U bestaat reeds in de database",
            "Impossible de trouver la base"=>"Kan de database niet vinden",
            "Impossible de trouver le serveur"=>"Kan geen verbinding maken met de host",
            "Erreur lors du flush de la table temp"=>"Fout tijdens het maken van de tijdelijke tabel",
            "Appercu du message"=>"Bericht voorbeeld",
            "R�initialiser"=>"Reset",
            "Sujet"=>"Onderwerp",
            "R�diger un nouveau message"=>"Nieuw Bericht aanmaken",
            "Tous les champs doivent �tre remplis"=>"Alle velden dienen ingevuld te worden",
            "Texte"=>"Tekst",
            "Adresse Email non valide"=>"Ongeldig e-mail adres",
            "Administration"=>"Administrative zone",
            "Nouveau message"=>"Nieuw bericht",
            "Liste des abonn�s"=>"Abonnee lijst",
            "Ajout d'un abonn�"=>"Abonnee toevoegen",
            "Suppression d'un abonn�"=>"Abonnee verwijderen",
            "Voir l'historique"=>"Logboek bekijken",
            "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"Om uit te schrijven, ga naar volgende URL",
            "Configuration"=>"Configuratie",
            "Se d�connecter"=>"Log Out",
            "Configuration de phpMyNewsletter"=>"Configuratie van phpMyNewsletter",
            "Editer la configuration"=>"Configuration aanpassen",
            "Editer les messages de bienvenue ..."=>"Welkomst bericht aanpassen ...",
            "Mise � jour de la configuration effectu�e"=>"Configuratie is gewijzigd",
            "Supprimer des abonn�s"=>"Abonnees verwijderen",
            "S�lectionner les abonn�s � supprimer"=>"Selecteer de abonnee die u wil verwijderen",
            "Supprimer les abonn�s s�lectionn�s"=>"Verwijder geselecteerde abonnees",
            "Les abonn�s s�lectionn�s ont �t� supprim�"=>"Geselecteerde abonnees verwijderd",
            "Importer un fichier texte dans la base de donn�e"=>"Importeer een tekst bestand in de database",
            "Importation effectu�e"=>"Importering klaar",
            "Logs de phpMyNewsletter"=>"Logboek phpMyNewsletter",
            "Heure"=>"Uur",
            "Sujet du message de bienvenue"=>"Onderwerp van het welkomstbericht",
            "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"Welkomst bericht verzonden na bevestiging van de abonnee",
            "Corps du message de bienvenue"=>"Welkom tekst",
            "Pied des messages"=>"Voettekst",
            

            "Mettre � jour"=>"Aanpassen",
            "R�initialiser"=>"Reset",
            "Message de demande de confirmation"=>"Bericht bevestiging",
            "Inscription"=>"Inschrijving",
            

            "Avertir de l'inscription par mail"=>"Inschrijving verwittigen per e-mail",
            "Un mail de d'information va �tre envoy�"=>"Een informatie e-mail werd verzonden",
            "Nombre total d'abonn�s"=>"Nummer van de abonnee",
            "Vous n'avez pas d'abonn�s"=>"Geen abonnees in de database",
            
            

            "Mot de passe"=>"Paswoord",
            "valider"=>"Login",
            "Identification"=>"Identificatie",
            "Acc�s � l'administration"=>"Administratie toegang",
            

            "Rendez-vous � l'adresse suivante pour confirmer votre inscription"=>"Volg deze link om uw inschrijving te bevestigen",
            "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message"=>"Indien u geen inschrijving op deze nieuwsbrief aangevraagd hebt, negeer dan deze e-mail",
            "Confirmation de l'inscription"=>"Inschrijf bevestiging",       
            

            "Votre inscription c'est bien d�roul�e"=>"Uw inschrijving is aanvaard",
            "L'inscription s'est bien d�roul�e"=>"De inschrijving werd aanvaard",
            "L'inscription c'est bien d�roul�e"=>"De inschrijving is aanvaard",
            "Vous allez recevoir un mail de confirmation"=>"Een bevestigings e-mail wordt naar u verzonden",
            "Vous �tes d�j� inscrit"=>"U bent reeds ingeschreven",
            "Vous n'�tes pas inscrit � cette Newsletter"=>"U bent nog niet ingeschreven op deze nieuwsbrief",
            "Votre inscription a �t� confirm�e"=>"Uw inschrijving werd bevestigd",
            "D�sinscription de" =>"Uitschrijving van",
            "effectu�e, merci de votre visite" =>"klaar, dank u voor het bezoek",
            "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante" =>"Indien u terug wilt inschrijven, klik dan hier" ,                
            "Nom de la lettre d'information"=>"Naam van de nieuwsbrief",
            "H�bergeur" =>"Provider",
            "autre" =>"Andere",
            "Adresse de provenance des messages envoy�s" =>"Hoofdadres voor de ontvangen berichten",
            "Nombre de jours accord� pour la validation de l'abonnement"=>"Wachten op geldigheidscontrole",
            "jours"=>"dagen",
            "Base de donn�es"=>"Database",
            "Serveur mysql"=>"MySQL Server",
            "Nom d'utilisateur"=>"Gebruikersnaam",
            "Mot de passe"=>"Paswoord",
            "Nom de la base de donn�e"=>"Naam van de Database",
            "Nom de la table de stockage des adresses"=>"Adres tabel",
            "Nom de la table d'attente de validation"=>"Bevestigingstabel",
            "Nom de la table de logs"=>"Logboek tabel",
            "Nom de la table de config"=>"Configuratietabel",
            "Mot de passe d'acc�s au panneau d'administration"=>"Paswoord voor administrative zone",
            "Nombre de newsletter � afficher par page de logs"=>"Aantal logs per pagina",
            "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Voorbeeld van een url:  http://www.myweb.com/ (vergeet de laatste / niet)", 
            "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin"=>"voorbeeld route naar phpMyNewsletter : tools/newsletter/ (vergeet de laatste / niet)",
            "Langue"=>"Taal",  
            "Activer le processus de validation des inscriptions"=>"Activeren van de inschrijvingsbevestigingcontrole",
            "OUI"=>"JA",
            "NON"=>"NEE",           
            "Export" => "Export",
            "Exporter les abonn�s" => "Exporteren van abonnees",
            "exporter" => "export",
            "Collez les lignes suivantes dans le fichier include/config.inc.php3" => "Knip en plak inderstaande lijnen in de include/config.inc.php3",
            "Cr�� le fichier include/config.inc.php3, puis Collez les lignes suivantes dans ce fichier."=>"Maak het include/config.inc.php3 bestand aan, knip en plak dan onderstaande lijnen in dit bestand",
            

            "Message envoy�"=>"Bericht verzonden",
            "Lettre d'information N�"=>"Nieuwsbrief #",
            "Envoyer le message"=>"Bericht verzenden",
            "Retour"=>"Ga terug",





            "Cr�er la base de donn�e"=>"Maak database aan",
            "Cr�er les tables"=>"Maak tabellen aan"




);
?>
