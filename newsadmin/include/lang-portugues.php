<?

/* thanks to 
"Fabio A. Martins" <cuzido@s2discos.com> */




function translate($phrase) {
 global $lang;
 if($lang[$phrase]!="") return $lang[$phrase];
else return ("[** Translation Needed ] -> $phrase");
}




/********* New translation style *******/


$lang=array("Adresse e-mail"=>"Endereco de email",      
            "Inscription"=>"Inscri��o",
            "D�sinscription"=>"Desinscri��o",
            "Nombre d'abonn�s"=>"N�mero de inscritos",
            "Erreur ! Le mot de passe n'est pas valide"=>"Erro ! Senha Inv�lida",
            "En attente de validation"=>"Esperando pela valida��o",
            "Nbr de NewsLetter d�j� envoy�es"=>"N�mero de newsletter ja eviando",
            "Num�ro de la prochaine NewsLetter"=>"N�mero do pr�ximo newsletter",
            "Retour"=> "Voltar",
            "Erreur"=>"Erro",
            "D�j� inscrit"=>"Ja est� na base de dados",
            "Impossible de trouver la base"=>"Imposs�vel achar no banco de dados",
            "Impossible de trouver le serveur"=>"Imposs�vel conectar ao host",
            "Erreur lors du flush de la table temp"=>"Erro durante limpeza na tabela tempor�ria",
            "Appercu du message"=>"Previa da mensagem ",
            "R�initialiser"=>"Reiniciar",
            "Sujet"=>"Assunto",
            "R�diger un nouveau message"=>"Escrever uma nova mensagem",
            "Tous les champs doivent �tre remplis"=>"Todos os campos devem ser preenchidos",
            "Texte"=>"Texto",
            "Adresse Email non valide"=>"Endere�o de email inv�lido",
            "Administration"=>"�rea de adminstra��o",
             "Nouveau message"=>"Mensagem de not�cia",
            "Liste des abonn�s"=>"Lista de inscritos",
            "Ajout d'un abonn�"=>"Adicionar um inscrito",
            "Suppression d'un abonn�"=>"Deletar um inscrito",
            "Voir les logs"=>"Ver registro (log) 
registros (logs)",
            "Pour vous d�sinscrire, rendez-vous � l'adresse suivante" =>"Para se desincrever, v� para a seguinte URL",


            "Configuration"=>"Configura��o",
            "Se d�connecter"=>"Fechar Sess�o",
            "Configuration de phpMyNewsletter"=>"Configura��o do phpMyNewsletter",
            "Editer la configuration"=>"Editar Configura��o",
            "Editer les messages de bienvenue ..."=>"Editar mensagem de boas vindas ...",
            "Mise � jour de la configuration effectu�e"=>"Configura��o Atualizada",
            "Supprimer des abonn�s"=>"Apagar inscritos",
            "S�lectionner les abonn�s � supprimer"=>"Selecionar inscritos que voce deseja deletar",
            "Supprimer les abonn�s s�lectionn�s"=>"Deletar inscritos selecionados",
            "Les abonn�s s�lectionn�s ont �t� supprim�"=>"Selecionar inscritos deletados",
            "Importer un fichier texte dans la base de donn�e"=>"Importar um arquivo texto na base de dados",
            "Importation effectu�e"=>"Importa��o feita",
            "Logs de phpMyNewsletter"=>"Registros do phpMyNewsletter (logs)",
            "Heure"=>"Hour",
            "Sujet du message de bienvenue"=>"Assunto da mensagem de boas vindas",
            "Message de bienvenue envoy� apr�s la confirmation de l'abonn�"=>"Mensagem de boas vindas enviada ap�s confirma��o do inscrito",
            "Corps du message de bienvenue"=>"Corpo da mensagem de boas vindas",
            "Pied des messages"=>"Rodap� da mensagem",
            

            "Mettre � jour"=>"Atualizar",
            "R�initialiser"=>"Reinicia",
            "Message de demande de confirmation"=>"Message de confirma��o",
            "Inscription"=>"Inscri��o",
            

            "Avertir de l'inscription par mail"=>"Informar o inscrito",
            "Un mail de d'information va �tre envoy�"=>"Uma informa��o de email foi enviada",
            "Nombre total d'abonn�s"=>"N�mero de inscritos",
            "Vous n'avez pas d'abonn�s"=>"Sem inscrito na base de dados",
            
            

            "Mot de passe"=>"Senha",
            "valider"=>"Usu�rio",
            "Identification"=>"Identifica��o",
            "Acc�s � l'administration"=>"Acesso � administra��o",
            

            "Rendez-vous � l'adresse suivante pour confirmer votre inscription"=>"Apenas v� para o seguinte endere�o para confirmar sua inscri��o.",
            "Si vous n'avez pas demand� d'inscription � cette newsletter, ignorez simplement ce message"=>"Se voce n�o requisitou esta inscri��o, apenas ignore essa mensagem",
            "Confirmation de l'inscription"=>"Inscri��o confirmada",
            
            

            "Votre inscription s'est bien d�roul�e"=>"Inscri��o efetuada com sucesso",
            "L'inscription c'est bien d�roul�e"=>"Inscri��o efetuada com sucesso",
            "Vous allez recevoir un mail de confirmation"=>"Um email de confirma��o foi enviado a voce",
            "Vous �tes d�j� inscrit"=>"Voce j� esta na base de dados",
            "Vous n'�tes pas inscrit � cette Newsletter"=>"Voce n�o esta na base de dados",
            "Votre inscription a �t� confirm�e"=>"Inscri��o confirmada",
            "D�sinscription de" =>"Desinscri��o de",
            "effectu�e, merci de votre visite" =>"Efetuada, obrigado pela sua visita",
            "Si vous d�sirez vous r�inscrire, rendez vous � l'adresse suivante" =>"Se voce quer voltar sua inscri��o, apenas clique aqui" ,
            
            

            "Nom de la lettre d'information"=>"Nome do newsletter",
            "H�bergeur" =>"Provedor",
            "autre" =>"Nenhum desses acima",
            "Adresse de provenance des messages envoy�s" =>"Endere�o de expedi��o (Do campo email)",
            "Nombre de jours accord� pour la validation de l'abonnement"=>"Esperando pela valida��o",
            "jours"=>"dias",
            "Base de donn�es"=>"Base de dados",
            "Serveur mysql"=>"Servidor MySQL",
            "Nom d'utilisateur"=>"Nome do usu�rio",
            "Mot de passe"=>"Senha",
            "Nom de la base de donn�e"=>"Nome do banco de dados",
            "Nom de la table de stockage des adresses"=>"Nome da tabela de enderecos",
            "Nom de la table d'attente de validation"=>"Nome da tabela de valida��o",
            "Nom de la table de logs"=>"Nome da tabela de registros",
            "Nom de la table de config"=>"Nome da tabela de configura��o",
            "Mot de passe d'acc�s au panneau d'administration"=>"Senha da �rea de adminstra��o",
            "Nombre de newsletter � afficher par page de logs"=>"Numero de registros por p�ginas",
            "Adresse de votre page ex : http://www.myweb.com/ avec un / � la fin" =>"Endereco da p�gina:  http://www.myweb.com/ (N�o esqueca da / no final)", 
            "Emplacement du r�pertoire de phpMyNewsletter ex : tools/newsletter/ avec un / � la fin"=>"Caminho para o phpMyNewsletter por exemplo: tools/newsletter/ (N�o esqueca da / no final)",
            "Langue"=>"Language",  
            "Activer le processus de validation des inscriptions"=>"Processo de valida��o da inscri��o ativada",
            "OUI"=>"SIM",
            "NON"=>"N�O",
            

            "Export"=>"Exportar",
            "Message envoy�"=>"Mensagem enviada",
            "Lettre d'information N�"=>"Newsletter #",
                "Envoyer le message"=>"Enviar mensagem",
                "Retour"=>"Voltar");
?>
