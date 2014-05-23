<?php
/*
@language: French By Nicolas Simond -> http://nicolas-simond.com/
*/
// Buttons
$lang['button_login'] = "Connexion";
$lang['button_logout'] = "D&eacute;connexion";
$lang['button_forgot'] = "Mot de passe oubli&eacute;";
$lang['button_reset'] = "Remise &agrave; z&eacute;ro";
$lang['button_add_new_server'] = "Ajouter un nouveau serveur";
$lang['button_force'] = "V&eacute;rification manuelle";
$lang['button_download_connector'] = "T&eacute;l&eacute;charger le connecteur";
$lang['button_download_connector_script'] = "T&eacute;l&eacute;charger le script du connecteur";
$lang['button_edit'] = "Editer";
$lang['button_view'] = "Voir";
$lang['button_remove'] = "Enlever";
$lang['button_edit_server'] = "Editer le serveur";
$lang['button_add_server'] = "Ajouter un serveur";
$lang['button_delete_server'] = "Supprimer le serveur";
$lang['button_register_server'] = "Enregistrer le serveur";
$lang['button_add_service'] = "Ajouter un service";
$lang['button_edit_user'] = "Modifier l'utilisateur";
$lang['button_save'] = "Sauvegarder";
$lang['button_install'] = "Installer";
$lang['button_save_new_password'] = "Sauvegarder le nouveau mot de passe";
$lang['button_delete'] = "Supprimer";
$lang['button_save_Param&egrave;tres'] = "Sauvegarder les param&egrave;tres";
$lang['button_delete_user'] = "Supprimer l'utilisateur";
$lang['button_set_schedule'] = "Appliquer la planification";
$lang['button_yes_install'] = "Oui, ajoute un serveur maintenant";
$lang['button_no_later'] = "Non, je le ferais plus tard";
$lang['button_yes_delete'] = "Oui, supprime ce serveur";
$lang['button_cancel'] = "Annuler";

// Text field placeholders (all should be lowercase)
$lang['placeholder_hostname'] = "h&ocirc;te";
$lang['placeholder_database'] = "base de donn&eacute;es";
$lang['placeholder_name'] = "votre nom";

$lang['placeholder_username'] = "nom d'utilisateur";
$lang['placeholder_password'] = "mot de passe";
$lang['placeholder_confirm_password'] = "confirmer le mot de passe";
$lang['placeholder_email'] = "adresse mail";
$lang['placeholder_path'] = "chemin vers le script";
$lang['placeholder_service_name'] = "nom";
$lang['placeholder_port'] = "port";
$lang['placeholder_script_path'] = "chemin vers le script";
$lang['placeholder_server_description'] = "description du serveur";

// First install
$lang['first_install1'] = "Premi&egrave;re installation";
$lang['first_install2'] = "Vous avez fini d'installer le syst&egrave;me, voulez-vous ajouter un serveur maintenant ?";

$lang['first_install3'] = "Le chemin d'installation existe d&eacute;j&agrave;, veuillez le supprimer o&ugrave; vous pourriez perdre vos donn&eacute;es";

// Titles
$lang['title_install'] = "Installer Severus";
$lang['title_database_setup'] = "Param&egrave;tres de la base de donn&eacute;es";
$lang['title_admin_setup'] = "Param&egrave;tres de l'administrateur";
$lang['title_drive_space'] = "Espace disque";
$lang['title_used'] = "Utilis&eacute;";
$lang['title_free'] = "Libre";
$lang['title_response_time'] = "Temps de r&eacute;ponse (ms)";


$lang['title_login'] = "Connection &agrave;"; // for the "Login to severus" page
$lang['title_reset'] = "R&eacute;initialiser votre mot de passe ?";
$lang['title_services'] = "Services";
$lang['title_add_server'] = "Ajouter un serveur";
$lang['title_connector_script'] = "Script du connecteur";
$lang['title_Param&egrave;tres'] = "Param&egrave;tres";
$lang['title_edit_user'] = "Editer l'utilisateur";
$lang['title_description'] = "Description";
$lang['title_confirm_delete'] = "Supprimer ce serveur ?";

// Messages
$lang['message_setup1'] = "Les param&egrave;tres de votre base de donn&eacute;es ne peuvent &ecirc;tre &eacute;crits, faites un chmod 777 sur le fichier application/config/database.php";
$lang['message_setup2'] = "La base de donn&eacute;es ne peut pas &ecirc;tre cr&eacute;&eacute;e, v&eacute;rifiez vos param&egrave;tres.";
$lang['message_setup3'] = "Les tables de donn&eacute;es de peuvent pas &ecirc;tre cr&eacute;es, v&eacute;rifiez vos param&egrave;tres.";
$lang['message_setup4'] = "Tous les champs n'ont pas &eacute;t&eacute;s remplis correctement !";
$lang['message_setup5'] = "Assurez-vous d'avoir l'acc&egrave;s en &eacute;criture sur le fichier application/config/database.php";
$lang['message_setup6'] = "Exemple: chmod 777 application/config/database.php - For windows servers make sure it's writable by IUSR";
$lang['message_setup7'] = "Mettez une adresse mail valide !";

$lang['message_reset1'] = "R&eacute;initialiser votre mot de passe ?";
$lang['message_reset2'] = "Vous avez bien r&eacute;initialiser votre mot de passe";
$lang['message_reset3'] = "Merci, un mail vous a &eacute;t&eacute; envoy&eacute; pour r&eacute;cup&eacute;rer votre mot de passe";

$lang['message_cron1'] = "Veuillez supprimer la t&acirc;che CRON manuellement.";
$lang['message_cron2'] = "Mises &agrave; jours automatiques d&eacute;sactiv&eacute;es.";
$lang['message_cron3'] = "L'entr&eacute;e existe d&eacute;j&agrave; mais ne peut &ecirc;tre mise &agrave; jour, veuillez le faire manuellement";
$lang['message_cron4'] = "La planification &agrave; &eacute;t&eacute; mise &agrave; jour";
$lang['message_cron5'] = "Veuillez mettre &agrave; jour la t&acirc;che CRON manuellement.";
$lang['message_cron6'] = "Cr&eacute;er automatiquement des t&acirc;ches planifi&eacute;es n'est possible que sous linux, veuillez le faire manuellement sous Windows.";
$lang['message_cron7'] = "R&eacute;glez l'intervalle de temps ci-dessous pour qu'elle corresponde &agrave; la t&acirc;che automatique que vous avez cr&eacute;&eacute;.";
$lang['message_cron8'] = "Impossible de cr&eacute;er la t&acirc;che automatique, veuillez le faire manuellement.";
$lang['message_cron9'] = "La planification ci-dessous doit correspondre &agrave; la t&acirc;che CRON pour que le serveur puisse d&eacute;terminer la prochaine v&eacute;rification";
$lang['message_cron10'] = "Mises &agrave; jours automatiques d&eacute;sactiv&eacute;es.";
$lang['message_cron11'] = "Mises &agrave; jours automatiques d&eacute;sactiv&eacute;es.";
$lang['message_cron12'] = "Mises &agrave; jours automatiques d&eacute;sactiv&eacute;es.";

$lang['message_home1'] = "Votre nom d'utilisateur/mot de passe est incorrect.";
$lang['message_home2'] = "R&eacute;initialiser votre mot de passe.";
$lang['message_home3'] = "Pour r&eacute;initialiser votre mot de passe, cliquez sur le lien ci-dessous et suivez les instructions";
$lang['message_home4'] = "Si vous n'avez pas demander a r&eacute;initialiser votre mot de passe, ne faites rien.";
$lang['message_home5'] = "Note: Ce code de remise &agrave; z&eacute;ro expiera apr&egrave;s";
$lang['message_home6'] = "Ce mail est inconnu";

$lang['message_server1'] = "Impossible d'enregistrer ce serveur, remplacez le script du connecteur.";
$lang['message_server2'] = "Impossible d\enregistrer ce serveur, v&eacute;rifiez l'adresse que vous avez rentrer.";
$lang['message_server3'] = "Impossible d'enregistrer le serveur";
$lang['message_server4'] = "Un serveur avec cette ip existe d&eacute;j&agrave;, pour le voir";
$lang['message_server5'] = "Cliquez ici";
$lang['message_server6'] = "Le serveur a &eacute;t&eacute; enregistr&eacute;, "; // part of "The server was successfully registered, click here to view/configure it or add another server below"
$lang['message_server7'] = "pour le voir/configurer ou ajoutez un nouveau serveur "; // see above comment
$lang['message_server8'] = "Impossible d'ajouter le serveur dans la base de donn&eacute;es.";

$lang['message_Param&egrave;tres1'] = "Param&egrave;tres mis &agrave; jour";
$lang['message_Param&egrave;tres2'] = "G&eacute;n&eacute;ral";
$lang['message_Param&egrave;tres3'] = "Objets";

$lang['message_users1'] = "Utilisateur ajout&eacute;";
$lang['message_users2'] = "Utilisateur mis &agrave; jour";
$lang['message_users3'] = "Vous n'avez pas la permission de modifier cet utilisateur";
$lang['message_users4'] = "Utilisateur supprim&eacute;";

// Navigation
$lang['nav_dashboard'] = "Tableau de bord";
$lang['nav_servers'] = "Serveurs";
$lang['nav_users'] = "Utilisateurs";
$lang['nav_Param&egrave;tres'] = "Param&egrave;tres";
$lang['nav_services'] = "Services";
$lang['nav_schedule'] = "Planification";
$lang['nav_support'] = "Support";

// Home
$lang['home_total'] = "Total";
$lang['home_online'] = "Serveurs";
$lang['home_online2'] = "online";
$lang['home_master'] = "Serveur de surveillance";
$lang['home_last_check'] = "Derni&egrave;re v&eacute;rification";


// Server page / options
$lang['server_online'] = "online";
$lang['server_offline'] = "offline";
$lang['server_available'] = "Disponible";
$lang['server_cached'] = "En cache";
$lang['server_unknown'] = "Inconnu";
$lang['server_replace'] = "Remplacez le script du connecteur";
$lang['server_never'] = "Jamais";
$lang['server_server'] = "Serveur";
$lang['server_load'] = "Charge";
$lang['server_response'] = "D&eacute;lai";
$lang['server_model'] = "Mod&egrave;le";
$lang['server_processes'] = "Processus";
$lang['server_memory'] = "M&eacute;moire";
$lang['server_ip'] = "Adresse IP";
$lang['server_services'] = "Services";
$lang['server_tab_all'] = "Tous les serveurs";
$lang['server_tab_add'] = "Ajouter un nouveau";
$lang['server_add_script1'] = "Vous devez t&eacute;l&eacute;charger le script du connecteur en cliquant ici et l'envoyer sur votre site";
$lang['server_add_script2'] = "Note: Vous ne pouvez pas lire le script du connecteur depuis votre navigateur, c'est normal.";
$lang['server_Param&egrave;tres_text'] = "Une fois que vous avez envoy&eacute; le connecteur, indiquez son adresse publique (i.e. http://domain.com/connector_script.php)";
$lang['server_currently_none'] = "Il n'y a aucun serveur actuellement";
$lang['server_currently_no_attention'] = "Il n'y a aucun probl&egrave;me sur les serveurs";
$lang['server_no_description'] = "Aucune description";
$lang['server_confirm_delete'] = "Souhaitez-vous vraiment supprimer ce serveur ? Toutes les donn&eacute;es seront effac&eacute;es";


// Users page
$lang['users_tab_all'] = "Tous les utilisateurs";
$lang['users_tab_add'] = "Ajouter un nouveau";
$lang['users_last_login'] = "Derni&egrave;re connexion";
$lang['users_label_name'] = "Nom";
$lang['users_label_username'] = "Nom d'utilisateur";
$lang['users_label_password'] = "Mot de passe";
$lang['users_label_blank'] = "Laissez vide pour garder le mot de passe actuel";
$lang['users_label_email'] = "Email";
$lang['users_label_active'] = "Actif";
$lang['users_option_enabled'] = "Activer";
$lang['users_option_disabled'] = "D&eacute;sactiver";

// Param&egrave;tres page
$lang['Param&egrave;tres_label_public'] = "Page publique";
$lang['Param&egrave;tres_label_additional'] = "Additionnel";
$lang['Param&egrave;tres_public_text'] = "Si vous activez la page publique, un aper&ccedil;u des serveurs sera visible sur la page d'accueil, sinon, la page de login sera affich&eacute;e";
$lang['Param&egrave;tres_label_high_load_linux'] = "Fort taux de charge (linux)";
$lang['Param&egrave;tres_high_load_linux_text'] = "R&eacute;gler la valeur de charge pour que le serveur passe en warning";
$lang['Param&egrave;tres_label_high_load_windows'] = "Fort taux de charge (windows)";
$lang['Param&egrave;tres_high_load_windows_text'] = "Sur Windows, la valeur du processeur ce r&egrave;gle avec le pourcentage d'utilisation.";
$lang['Param&egrave;tres_public_enabled'] = "Activer la page publique";
$lang['Param&egrave;tres_public_disabled'] = "D&eacute;sactiver la page publique";
$lang['Param&egrave;tres_label_email_notification'] = "Notification par mail";
$lang['Param&egrave;tres_text_email_notification'] = "Laissez vide pour d&eacute;sactiver ou entrez votre mail pour recevoir un message lorsqu'un serveur passe offline.";
$lang['Param&egrave;tres_label_language'] = "Langue par d&eacute;faut";
$lang['Param&egrave;tres_language_text'] = "S&eacute;lectionnez la langue par d&eacute;faut du site";


// Services page
$lang['services_current_services'] = "Services actuels";
$lang['services_add_new_service'] = "Ajouter un nouveau service";
$lang['services_add_new_adv_service'] = "Ajouter un nouveau service sp&eacute;cial";
$lang['services_advanced_text'] = "Les services sp&eacute;ciaux permettent d'utiliser un script, le script doit renvoyer 1 pour OK ou 0 pour CRITIQUE.  Mettez le chemin vers le script";
$lang['services_none'] = "Aucun service";
$lang['services_add'] = "Ajouter un service";


// Schedule page
$lang['schedule_server_checks'] = "Planifier la v&eacute;rification des serveurs";
$lang['schedule_text'] = "La planification permet de v&eacute;rifier le statut des serveurs sans votre intervention. Toutefois, si l'assistant ne peut pas le faire, vous devrez le faire manuellement";
$lang['schedule_option1'] = "D&eacute;sactiver la planification";
$lang['schedule_option2'] = "Toutes les minutes";
$lang['schedule_option_2'] = "Toutes les 2 minutes";
$lang['schedule_option_3'] = "Toutes les 3 minutes";
$lang['schedule_option_4'] = "Toutes les 4 minutes";
$lang['schedule_option_5'] = "Toutes les 5 minutes";
$lang['schedule_option_10'] = "Toutes les 10 minutes";
$lang['schedule_option_15'] = "Toutes les 15 minutes";
$lang['schedule_option_20'] = "Toutes les 20 minutes";
$lang['schedule_option_25'] = "Toutes les 25 minutes";
$lang['schedule_option_30'] = "Toutes les 30 minutes";
$lang['schedule_option_45'] = "Toutes les 45 minutes";
$lang['schedule_option_60'] = "Toutes les 60 minutes";

// Support page
$lang['support_title'] = "Support";
$lang['support_text1'] = "Nous avons travaill&eacute; dur pour rendre Severus aussi simple que possible, toutefois, si la configuration vous pose probl&egrave;me, n'h&eacute;sitez pas &agrave; venir sur notre topic de discussion sur Codecanyon, nous serons ravis de vous aider.";
$lang['support_text2'] = "Notez nous !";
$lang['support_text3'] = "Merci de nous noter sur Codecanyon. Si vous souhaitez mettre moins de 4 &eacute;toiles, contactez nous avant pour nous expliquer les raisons de votre choix afin que nous puissions rendre Severus meilleur.";
$lang['support_text4'] = "F.A.Q.";
$lang['support_text5'] = "Comment s&eacute;lectionner les services actifs sur mon serveur ?";
$lang['support_text6'] = "Lorsque vous &eacute;ditez un serveur, la liste de tous les services disponibles apparaie. S&eacute;lectionnez ceux que vous souhaitez surveiller et cliquez sur Sauvegarder";
$lang['support_text7'] = "J'ai chang&eacute; les services, mais ils ne s'affichent pas.";
$lang['support_text8'] = "Ils seront modifi&eacute;s &agrave; la prochaine v&eacute;rification, vous pouvez la forc&eacute;e manuellement depuis le tableau de bord.";
$lang['support_text9'] = "Je veut cr&eacute;er une planification avec une intervalle non propos&eacute;e, comment faire ?";
$lang['support_text10'] = "La mani&egrave;re la plus simple de le faire est de d&eacute;sactiver la planification, de se connecter en SSH sur le serveur de destination, de lancer la commande \"crontab -e\" et d'&eacute;crire la commande suivante :";
$lang['support_text11'] = "Pour une planification hebdomadaire";
$lang['support_text12'] = "Pour une v&eacute;rification toutes les 4 heures";
$lang['support_text13'] = "Mais faire la planification de cette mani&egrave;re n'affichera pas de compte a rebours jusqu'&agrave; la prochaine v&eacute;rification, toutefois, si vous modifiez le param&egrave;tres \"setting_heartbeat_interval\" dans la base de donn&eacute;es Settings &agrave; la valeur de votre planification secondes cela marchera, donc si vous avez choisi une v&eacute;rification toutes les 4H mettez cette valeur &agrave; ";
$lang['support_text14'] = "Mon serveur indique : \"Remplacez le script du connecteur\", qu'est ce que je dois faire ?";
$lang['support_text15'] = "Vous avez peut-&ecirc;tre r&eacute;-installer Severus sans remplacer le script du connecteur distant. Lorsque Severus est install&eacute;, il cr&eacute;e une cl&eacute; unique pour communiquer avec vos serveurs, cette cl&eacute; est &eacute;crite dans chaque script du connecteur, lorsque vous changez de serveur, vous devez mettre &agrave; jour le connecteur.";