<?php
	/**
	* BoZoN language file:
	* sets all the messages in various languages
	* to add one, simply copy paste the french one and change all the values: the array's keys must stay the same !
	* @author: Bronco (bronco@warriordudimanche.net)
	**/
	function e($txt,$echo=true){
		global $lang;
		if (isset($lang[$_SESSION['language']][$txt])){$t= $lang[$_SESSION['language']][$txt];}else{$t= $txt;}
		if ($echo){echo $t;}else{return $t;}
	}
	$lang=array();

	# ENGLISH (by default)
	$lang['en']=array();

	# FRENCH
	$lang['fr']=array(
		'Drag, drop, share.'=>'Glisser, d&eacute;poser, partager.',
		'Search in the uploaded files'=>'Rechercher dans les fichiers uploadés',
		'Filter'=>'Mot-clé',
		'Copy this share link'=>'Copiez ce lien de partage',
		'Drag the file you want to share to upload it on the server'=>'glisser le fichier à partager pour l\'envoyer sur ton serveur',
		'Copy the file\'s link (right click on it)'=>'copier le lien du fichier (clic bouton droit, copier le lien)',
		'Share the link with your buddies...'=>'partager le lien avec les autres...',
		'tiny file sharing app, coded with love and php by '=>'mini app de partage de fichier, codée avec amour et php par ',
		'Logout'=>'Déconnexion',
		'Type to filter the list'=>'Filtrer la liste',
		'Drop your files here or click to select a local file'=>'Glisser les fichiers ici ou cliquer pour sélectionner un fichier local',
		'Please, login'=>'Connectez-vous',
		'Create your account'=>'Créez votre compte',
		'Login'=>'Login',
		'Password'=>'Passe',
		'Stay connected'=>'Rester connect&eacute;',
		'No file on the server'=>'Aucun fichier sur le serveur',
		'Delete this file ?'=>'Supprimer ce fichier ?',
		'Rename this file ?'=>'Renommer ce fichier ?',
		'Problem accessing remote file.'=>'Problème d\'acces au fichier distant',
		'Paste a file\'s URL to get it on this server'=>'Coller l\'URL d\'un fichier pour le récupérer sur ce serveur',
		'Paste a file\'s URL'=>'Coller l\'URL d\'un fichier',
		'New_folder'=>'Nouveau_dossier',
		'Create a subfolder'=>'Créer un nouveau dossier',
		'Create a subfolder in this folder'=>"Créer un sous-dossier dans ce dossier",
		'Manage links'=>'Gérer les liens',
		'Move files'=>'Déplacer des fichiers',
		'Manage files'=>'Gérer les fichiers',
		'Move file or folder'=>'Dépl. fichier/dossier',
		'Move'=>'Déplacer',
		'To'=>'Vers',
		'Yes'=>'Oui',
		'Files list'=>'Liste de fichiers',
		'Rename'=>'Renommer',
		'Delete'=>'Supprimer',
		'Move a file by clicking on it and choosing the destination folder in the list'=>'Déplacer un fichier en cliquant dessus puis en sélectionnant la destination dans la liste',
		'Move a folder by clicking on the move icon and choosing the destination folder in the list'=>'Déplacer un dossier en cliquant sur "Déplacer" puis en sélectionnant la destination dans la liste',
		'Lock the access to the file/folder with a password'=>"Verrouiller l'acces au fichier/dossier à l'aide d'un mot de passe",
		'When burn is on, the user can access the file/folder only once'=>"Quand l'item est en mode burn, l'utilisateur ne pourra accéder à la ressource qu'une seule fois",
		'Renew the share link of the file/folder (in case of a stolen link for example)'=>"Renouveler le lien de partage d'un fichier/dossier quand celui-ci a fuité par exemple",
		'The user can access this only one time'=>"L'utilisateur ne pourra y accéder qu'une fois",
		'The user can access this only with the password'=>"L'utilisateur ne pourra y accéder qu'avec un mot de passe.",
		'This page in'=>"Cette page au format ",
		'This link is no longer available, sorry.'=>"Ce lien n'est plus valable, désolé.",
		'Choose a folder'=>'Choisissez un dossier',
		'Please give a password to lock access to this file'=>"Taper un mot de passe pour verrouiller cette ressource.",
		'Lock access'=>"Verrouiller l'accès",
		'This share is protected, please type the correct password:'=>'Ce lien est protégé: veuillez taper le mot de passe.',
		'Root'=>'Racine',
		'Share link'=>'Lien de partage',
		'View this file'=>'Voir ce fichier',
		'Delete this file'=>'Supprimer ce fichier',
		'Get the share link'=>'Obtenir le lien de partage',
		'Rename this file (share link will not change)'=>'Renommer ce fichier (le lien de partage ne changera pas)',
		'Put a password on this share'=>"Protéger l'accès par mot de passe",
		'Turn this share into a burn after access share'=>"Passer ce partage en mode accès unique",
		'Regen the share link'=>'Régénérer le lien de partage',
		'Move this file to another directory'=>'Déplacer ce fichier vers un autre dossier',
		'If you want to remove the password, just click on Renew button'=>'Si vous voulez retirer le mot de passe, cliquez sur le bouton Régénérer le lien',
		'Problem accessing ID file: not readable'=>"Erreur d'accès en lecture au fichier ID.",
		'Problem accessing ID file: not writable'=>"Erreur d'accès en écriture au fichier ID.",
		'Convert this zip file to folder'=>"Convertir ce fichier Zip en dossier",
		'File'=>'Fichier',
		'Date'=>'Date',
		'Origin'=>"Page d'origine",
		'Host'=>'Hôte',
		'Delete all stat data'=>'Supprimer les données statistiques',
		'List'=>'Liste',
		'Icons'=>'Icônes',
		'Change theme'=>'Changer le thème',
		'Download a zip from this folder'=>'Télécharger un zip à partir de ce dossier',
	);

	# ESPANOL
	$lang['es']=array(
		'Drag, drop, share.'=>'Arrastra, deposita, comparte.',
		'Search in the uploaded files'=>'Buscar en los ficheros del servidor',
		'Filter'=>'Filtrar',
		'Copy this share link'=>'Copie este enlace público',
		'Drag the file you want to share to upload it on the server'=>'Deposita el fichero que quieras subir al servidor',
		'Copy the file\'s link (right click on it)'=>'Copia el enlace del fichero (haz un clic con el botón derecho y copia el enlace)',
		'Share the link with your buddies...'=>'Comparte la dirección con los demás...',
		'tiny file sharing app, coded with love and php by '=>'Mini utilidad para compartir ficheros, creada con amor y php por ',
		'Logout'=>'Salir',
		'Type to filter the list'=>'Filtrar la lista',
		'Drop your files here or click to select a local file'=>'Deposita los ficheros aquí o pincha para escoger uno en tu ordenador',
		'Please, login'=>'Conéctate',
		'Create your account'=>'Crea tu cuenta admin',
		'Login'=>'Login',
		'Password'=>'Contrasena',
		'Stay connected'=>'Permanecer conectado',
		'No file on the server'=>'Ningún fichero en el servidor',
		'Delete this file ?'=>'¿ Borrar este fichero ?',
		'Rename this file ?'=>'¿ Cambiar el nombre del fichero ?',
		'Problem accessing remote file.'=>'Imposible acceder al fichero remoto',
		'Paste a file\'s URL to get it on this server'=>'Pegar la URL de un fichero',
		'Paste a file\'s URL'=>'Pegar la URL de un fichero',
		'New_folder'=>'Nueva_carpeta',
		'Create a subfolder'=>'Crear una carpeta nueva',
		'Create a subfolder in this folder'=>"Crear una subcarpeta nueva en esta carpeta",
		'Manage links'=>'Gestionar los enlaces',
		'Move files'=>'Mover ficheros',
		'Manage files'=>'Gestionar los ficheros',
		'Move file or folder'=>'Mover fichero/carpeta',
		'Move'=>'Mover',
		'To'=>'A',
		'Yes'=>'Sí',
		'Files list'=>'Lista de ficheros',
		'Rename'=>'Cambiar el nombre',
		'Delete'=>'Borrar',
		'Move a file by clicking on it and choosing the destination folder in the list'=>'Mueve un fichero haciendo clic en él y escogiendo el destino en la lista',
		'Move a folder by clicking on the move icon and choosing the destination folder in the list'=>'Mueve una carpeta pinchando en "Mover" y escogiendo el destino en la lista',
		'Lock the access to the file/folder with a password'=>"Poner una contraseña al fichero",
		'When burn is on, the user can access the file/folder only once'=>"En modo burn, el usuario solo puede acceder al fichero una vez",
		'Renew the share link of the file/folder (in case of a stolen link for example'=>"Regenerar el enlace público del fichero",
		'The user can access this only one time'=>"El usuario solo puede acceder al fichero una vez",
		'The user can access this only with the password'=>"El usuario solo puede acceder al fichero con una contraseña",
		'This page in'=>"Esta página en formato ",
		'This link is no longer available, sorry.'=>'Este enlace está caducado.',
		'Choose a folder'=>'Escoja una carpeta',
		'Please give a password to lock access to this file'=>"Poner una contraseña en el fichero",
		'Lock access'=>"Impedir el acceso",
		'This share is protected, please type the correct password:'=>'Este enlace está protegido por una contraseña:',
		'Root'=>'Raíz',
		'Share link'=>'Enlace público',
		'View this file'=>'Ver este fichero',
		'Get the share link'=>'Conseguir el enlace público',
		'Rename this file (share link will not change)'=>'Cambiar el nombre (el enlace no cambiará)',
		'Put a password on this share'=>"Proteger con una contraseña",
		'Turn this share into a burn after access share'=>"Pasar al modo acceso único",
		'Regen the share link'=>'Renovar el enlace público',
		'Move this file to another directory'=>'Desplazar este fichero a otra carpeta',
		'If you want to remove the password, just click on Renew button'=>'Si quiere quitarle la contraseña, solo tiene que pinchar en el botón Renovar el enlace',
		'Problem accessing ID file: not readable'=>"Error de acceso leyendo el fichero ID.",
		'Problem accessing ID file: not writable'=>"Error de acceso escribiendo al fichero ID.",
		'Convert this zip file to folder'=>"Convertir este fichero Zip en carpeta",
		'File'=>'Fichero',
		'Date'=>'Fecha',
		'Origin'=>"Página de origen",
		'Host'=>'Huésped',
		'Delete all stat data'=>'Borrar las estadìsticas',
		'List'=>'Lista',
		'Icons'=>'Íconos',
		'Change theme'=>'Cambiar el aspecto',
		'Download a zip from this folder'=>'Bajar un zip con esta carpeta',
	);
?>