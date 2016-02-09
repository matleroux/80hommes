<?



function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** No disponemos de la traducci�n de esta frase: ] -> $phrase");
}





/********* New translation style *******/

$lang=array("Adresse e-mail"=>"Direccion de E-mail",	
	    "Inscription"=>"Inscripci�n",
	    "D�sinscription"=>"Cancelar inscripci�n",
	    "Nombre d'abonn�s"=>"Numero de inscritos",
	    "Erreur ! Le mot de passe n'est pas valide"=>"Clave incorrecta",
	    "En attente de validation"=>"A la espera de validar",
	    "Nbr de NewsLetter d�j� envoy�es"=>"Noticias enviadas",
	    "Num�ro de la prochaine NewsLetter"=>"N�mero de la pr�xima noticia",
	    "Retour"=> "Volver",
	    "Erreur"=>"Error",
	    "D�j� inscrit"=>"Ya se encuentra en la base de datos",
	    "Impossible de trouver la base"=>"No se encuentra en la base de datos",
	    "Impossible de trouver le serveur"=>"Error de conexi�n con el servidor",
	    "Erreur lors du flush de la table temp"=>"Se ha producido un error al regenerar la tabla temporal",
	    "Appercu du message"=>"Mensaje anterior",
	    "R�initialiser"=>"Reiniciar",
	    "Sujet"=>"Tema:",
	    "R�diger un nouveau message"=>"Crear un nuevo mensaje",
	    "Tous les champs doivent �tre remplis"=>"Debe rellenar todos los campos",
	    "Texte"=>"Texto",
	    "Adresse Email non valide"=>"Direcci�n de correo electr�nico no v�lida",
	    "Administration"=>"�rea de Administraci�n",
	     "Nouveau message"=>"Nuevo mensaje",
	    "Liste des abonn�s"=>"Lista de inscritos",
	    "Ajout d'un abonn�"=>"Agregar una inscripci�n",
	    "Suppression d'un abonn�"=>"Eliminar una inscripci�n",
	    "Voir l'historique"=>"Ver el control de acciones",
	    "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"para cancelar la inscripci�n copie en su navegador de internet o pulse la siguiente direcci�n: ",

	    "Configuration"=>"Configuraci�n",
	    "Se d�connecter"=>"Salir",
	    "Configuration de phpMyNewsletter"=>"Configuraci�n de la Lista de Correos",
	    "Editer la configuration"=>"Editar la configuraci�n",
	    "Editer les messages de bienvenue ..."=>"Editar el mensaje de bienvenida ...",
	    "Mise � jour de la configuration effectu�e"=>"Se ha actualizado la configuraci�n requerida",
	    "Supprimer des abonn�s"=>"Eliminar inscritos",
	    "S�lectionner les abonn�s � supprimer"=>"seleccione los correos electr�nicos que desea borrar de su lista de correo",
	    "Supprimer les abonn�s s�lectionn�s"=>"Borrar los correos electr�nicos seleccionados",
	    "Les abonn�s s�lectionn�s ont �t� supprim�"=>"registros borrados",
	    "Importer un fichier texte dans la base de donn�e"=>"Importar un archivo de texto a la base de datos",
	    "Importation effectu�e"=>"La transferencia de datos ha sido completada con �xito",
	    "Logs de phpMyNewsletter"=>"Acciones de la Lista de Correos",
	    "Heure"=>"Hora",
	    "Sujet du message de bienvenue"=>"Tema del mensaje de bienvenida",
	    "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"Mensaje de bienvenida enviado despu�s de la confirmacion",
	    "Corps du message de bienvenue"=>"Cuerpo del mensaje de bienvenida",
	    "Pied des messages"=>"Pie de mensaje",
	    
	    "Mettre � jour"=>"Actualizar",
	    "R�initialiser"=>"Reiniciar",
	    "Message de demande de confirmation"=>"Mensaje de confirmaci�n",
	    "Inscription"=>"Inscripci�n",
	    
	    "Avertir de l'inscription par mail"=>"Informar al suscriptor por correo electr�nico",
	    "Un mail de d'information va �tre envoy�"=>"Se ha enviado un mensaje al interesado inform�ndole que su correo electr�nico ha sido incluido en la Lista de Correos",
	    "Nombre total d'abonn�s"=>"N�mero total de inscritos",
	    "Vous n'avez pas d'abonn�s"=>"Numero de inscritos en la base de datos",
	    
	    
	    "Mot de passe"=>"Clave",
	    "valider"=>"Acceso",
	    "Identification"=>"Identificati�n",
	    "Acc�s � l'administration"=>"Acceso al panel de administraci�n",
	    
	    "Rendez-vous � l'adresse suivante pour confirmer votre inscription"=>"para confirmar su inscripci�n copie en su navegador de internet o pulse la siguiente direcci�n: ",
	    "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message"=>"Si usted no ha pedido esta inscripci�n ignore y borre este mensaje.",
	    "Confirmation de l'inscription"=>"Confirmacion de la inscripci�n",
	    
	    
	    "Votre inscription c'est bien d�roul�e"=>"Inscripci�n correcta",
	    "L'inscription s'est bien d�roul�e"=>"Inscripci�n correcta",
	    "Vous allez recevoir un mail de confirmation"=>"Acabamos de enviarle a su correo electr�nico un mensaje para confirmar su inscripci�n.",
	    "Vous �tes d�j� inscrit"=>"Correo electr�nico ya se hab�a inclu�do en su base de datos.",
	    "Vous n'�tes pas inscrit � cette Newsletter"=>"Sus datos no est�n inclu�dos en nuestra base de datos",
	    "Votre inscription a �t� confirm�e"=>"Inscripci�n confirmada",
	    "D�sinscription de" =>"Borrar de la lista a",
	    "effectu�e, merci de votre visite" =>"Acci�n realizada. Muchas gracias por su visita",
	    "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante" =>"Para volver a inscribirse pulse aqui " ,
	    
	    
	    "Nom de la lettre d'information"=>"Nombre de la Lista de Correos",
	    "H�bergeur" =>"Proveedor",
	    "autre" =>"Ninguna de las anteriores",
	    "Adresse de provenance des messages envoy�s" =>"Campo FROM en el email del newsletter",
	    "Nombre de jours accord� pour la validation de l'abonnement"=>"Esperando validacion",
	    "jours"=>"dias",
	    "Base de donn�es"=>"DataBase",
	    "Serveur mysql"=>"MySQL Server",
	    "Nom d'utilisateur"=>"Username",
	    "Mot de passe"=>"Password",
	    "Nom de la base de donn�e"=>"Nombre de la base de datos",
	    "Nom de la table de stockage des adresses"=>"Nombre para la tabla de direcciones",
	    "Nom de la table d'attente de validation"=>"Nombre para la tabla de validaciones",
	    "Nom de la table de logs"=>"Nombre para la tabla de control de acciones",
	    "Nom de la table de config"=>"Nombre para la tabla de configuraci�n",
	    "Mot de passe d'acc�s au panneau d'administration"=>"Clave para accederal panel de administraci�n",
	    "Nombre de newsletter � afficher par page de logs"=>"N�mero de accesos por pagina",
	    "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Pagina web: ejemplo: http://www.myweb.com/ (incluya el �ltimo / )", 
	    "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin"=>"Ruta de la Lista de Correos, ejemplo: tools/newsletter/ (incluya el ultimo / )",
	    "Langue"=>"Idioma",  
	    "Activer le processus de validation des inscriptions"=>"Activar el proceso de validaci�n de las inscripciones",
	    "OUI"=>"SI",
	    "NON"=>"NO",
	    "Export" => "Exportar",
	    "Message envoy�"=>"EL mensaje ha sido enviado.",
	    "Collez les lignes suivantes dans le fichier include/config.inc.php" => "Corta y pega la informaci�n que aparece debajo en el archivo: include/config.inc.php",
	    "Lettre d'information N�"=>"SLKE - Noticias & News No.");
	  

?>
