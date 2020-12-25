<?php

$lang = array(

//----------------------------
// General word list
//----------------------------

'and_n_others' => 'et les %d autres...',

'and' => 'et',

'at' => 'à',

'by' => 'par',

'dot' => 'point',

'edit_this'	=>	'Modifier ceci',

'encoded_email' => '(Le JavaScript doit être activé pour voir cette adresse email)',

'id' => 'ID',

'next' => 'Suivant',

'not_available' => 'Indisponible',

'or' => 'ou',

'pag_first_link' => '&lsaquo; Début',

'pag_last_link' => 'Fin &rsaquo;',

'preference' => 'Préférence',

'prev' => 'Précédent',

'required_fields' => 'Champs Obligatoires',

'search' => 'Rechercher',

'setting' => 'Paramètre',

'site_homepage' => 'Page d\'accueil du site',

'updating' => 'Mise à Jour',

'auto_redirection' => 'Vous serez redirigé automatiquement dans %x secondes',

'back' => 'Retour',

'click_if_no_redirect' => 'Cliquez ici si vous n\'êtes pas redirigé automatiquement',

'disabled' => 'désactivé',

'enabled' => 'activé',

'first' => 'Premier',

'last' => 'Dernier',

'no' => 'Non',

'not_authorized' => 'Vous n\'êtes pas autorisé à exécuter cette action',

'of' => 'sur',

'off' => 'éteint',

'on' => 'sur',

'page' => 'Page',

'return_to_previous' => 'Retourner à la page précédente',

'submit' => 'Envoyer',

'system_off_msg' => 'Ce site est actuellement désactivé.',

'thank_you' => 'Merci !',

'update' => 'Mettre à jour',

'yes' => 'Oui',

//----------------------------
// Errors
//----------------------------

'captcha_incorrect' => 'Vous n\'avez pas saisi le mot exactement comme il apparaît dans l\'image',

'captcha_required' => 'Vous devez saisir le mot qui apparaît dans l\'image',

'checksum_changed_accept' => 'Accepter les modifications',

'checksum_changed_warning' => 'Un ou plusieurs fichiers principaux d\ExpressionEngine ont été altérés :',

'checksum_email_message' => 'ExpressionEngine a détecté la modification de l\'un de ses fichiers principaux sur : {url}

Les fichiers suivants sont affectés :
{changed}

Si vous avez effectué ces changements, veuillez accepter les modifications sur l\'accueil du panneau de contrôle. Si vous n\'avez pas modifié ces fichiers ceci peut indiquer une tentative de piratage. Vérifiez les fichiers pour tout contenu suspect (JavaScript ou iFrames) et consultez : '.DOC_URL.'troubleshooting/error_messages/expressionengine_has_detected_the_modification_of_a_core_file.html',

'checksum_email_subject' => 'Un fichier principal d\'ExpressionEngine a été modifié sur votre site.',

'csrf_token_expired' => 'Ce formulaire a expiré. Merci de rafraîchir et de re-essayer.',

'current_password_incorrect' => 'Vous n\'avez pas correctement saisi votre mot de passe actuel.',

'current_password_required' => 'Votre mot de passe actuel est requis.',

'el_folder_present' => 'Le répertoire <code>%s</code> est présent sur votre serveur. Merci de vous assurer que vous avez remplacé votre <code>index.php</code> et <code>admin.php</code> comme stipulé dans les <a href="%s">instructions de mise à jour</a> et supprimé ce répertoire.',

'error' => 'Erreur',

'file_not_found' => 'Le fichier %s n\'existe pas.',

'general_error' => 'Les erreurs suivantes ont été rencontrées',

'generic_fatal_error' => 'Oups, quelque chose s\'est mal passé et cete URL ne peut pas être rendue pour le moment.',

'invalid_action' => 'L\'action que vous avez demandée est invalide.',

'invalid_url' => 'L\'URL que vous avez soumise est invalide.',

'missing_encryption_key' => 'Aucune valeur n\'est définie dans votre fichier config.php pour <code>%s</code>. Ceci peut rendre vulnérable la sécurité de votre installation. Restaurez les clefs ou consultez <a href="%s">cet article</a> du guide utilisateur pour obtenir de l\'aide.',

'missing_mime_config' => 'Impossible d\'importer votre liste blanche de types MIME : le fichier %s n\'existe pas ou ne peut pas être lu.',

'new_version_error' => 'Une erreur s\'est produite en tentant de télécharger le numéro de la version actuelle d\'ExpressionEngine. Consultez ce <a href="%s" rel="external noreferrer">document de dépannage</a> pour de plus amples informations.',

'nonexistent_page' => 'La page que vous avez demandée n\'a pu être trouvée',

'php72_intl_error' => 'Votre extension PHP <code>intl</code> est obsolète. Merci de vous assurer que vous avez installé <code>ICU 4.6</code> ou plus récent.',

'redirect_xss_fail' => 'Le lien vers lequel vous êtes redirigé contient du code potentiellement malicieux ou dangereux. Nous vous recommandons de cliquer sur le bouton "Retour Arrière" de votre navigateur et d\'envoyer un email à %s pour lui rapporter le lien qui a généré ce message d\'alerte.',

'submission_error' => 'Le formulaire que vous avez soumis contient les erreurs suivantes',

'theme_folder_wrong' => 'Le chemin serveur de votre dossier thème est incorrect. Merci de visiter <a href="%s">Paramètres URL et chemin serveur</a> et de vérifier le <code>Chemin serveur des thèmes</code> et le <code>Répertoire des thèmes</code>.',

'unable_to_load_field_type' => 'Impossible de charger le fichier de type de champ demandé :  %s.<br />Confirmez que le fichier de type de champ est bien situé dans le répertoire /'.SYSDIR.'/user/addons/ ',

'unwritable_cache_folder' => 'Votre répertoire Cache n\'a pas les permissions requises.<br />Pour corriger : définissez les permissions du répertoire Cache (/'.SYSDIR.'/user/cache/) à 777 (ou équivalent, selon votre serveur).',

'unwritable_config_file' => 'Votre fichier de configuration n\'a pas les permissions requises.<br />Pour corriger : définissez les permissions du fichier de configuration (/'.SYSDIR.'/user/config/config.php) à 666 (ou équivalent, selon votre serveur).',

'version_mismatch' => 'Votre version d\'ExpressionEngine installée (%s) n\'est pas en phase avec la version rapportée (%s). <a href="'.DOC_URL.'installation/update.html" rel="external">Merci de mettre de nouveau à jour votre installation d\'ExpressionEngine</a>.',


//----------------------------
// Member Groups
//----------------------------

'banned' => 'Exclu',

'guests' => 'Invités',

'members' => 'Membres',

'pending' => 'En attente',

'super_admins' => 'Super Administrateurs',


//----------------------------
// Template.php
//----------------------------

'error_fix_module_processing' => "Veuillez vérifier que le module '%x' est installé et que '%y' est une méthode disponible pour ce module",

'error_fix_syntax' => 'Veuillez corriger la syntaxe dans votre modèle.',

'error_invalid_conditional' => "Il y a une boucle conditionnelle invalide dans votre modèle. Merci de rechercher dans vos boucles conditionnelles une chaîne restée ouverte, des opérateurs invalides, un } ou un {/if} manquant.",

'error_layout_too_late' => 'Balise module ou plugin trouvée avant la déclaration de disposition. Merci de déplacer la balise de disposition (layout tag) en haut de votre modèle.',

'error_multiple_layouts' => 'Plusieurs dispositions trouvées, merci de vous assurer que vous n\'avez qu\'une seule balise de disposition (layout tag) par modèle',

'error_tag_module_processing' => 'La balise suivante ne peut être interprétée :',

'error_tag_syntax' => 'La balise suivante contient une erreur de syntaxe :',

'layout_contents_reserved' => 'Le nom "contents" est réservé aux données de modèle est ne peut pas être utilisé comme variable de disposition (ex. {layout:set name="contents"} ou {layout="foo/bar" contents=""}).',

'template_load_order' => 'Ordre de chargement des modèles',

'template_loop' => "Vous avez provoqué une boucle de modèle due à un sous-modèle mal imbriqué ('%s' est appelé de façon récursive)",


//----------------------------
// Email
//----------------------------

'error_sending_email' => 'Impossible d\'envoyer l\'email pour le moment.',

'forgotten_email_sent' => 'Si cette adresse email est associée à un compte, Les instructions pour réinitialiser votre mot de passe viennent de vous être envoyées par email.',

'forgotten_username_email_sent' => 'Si cette adresse email est associée à un compte, un email contenant votre identifiant vient de vous être envoyé à l\'instant.',

'no_email_found' => 'L\'adresse email que vous avez saisie n\'a pu être trouvée dans la base de données.',

'password_has_been_reset' => 'Votre mot de passe a été réinitialisé et un nouveau mot de passe vous a été envoyé par email.',

'password_reset_flood_lock' => 'Vous avez tenté de réinitialiser votre mot de passe de trop nombreuse fois aujourd\'hui. Merci de vérifier vos boîte de réception et boîte Spam pour récupérer les demandes précédentes, sinon contactez l\'administrateur du site.',

'your_new_login_info' => 'Information de connexion',


//----------------------------
// Date
//----------------------------

'singular' => 'une',

'less_than' => 'moins de',

'about' => 'environ',

'past' => 'il y a %s',

'future' => 'dans %s',

'ago' => 'il y a %x',

'year' => 'année',

'years' => 'années',

'month' => 'mois',

'months' => 'mois',

'fortnight' => 'quinzaine',

'fortnights' => 'quinzaines',

'week' => 'semaine',

'weeks' => 'semaines',

'day' => 'jour',

'days' => 'jours',

'hour' => 'heure',

'hours' => 'heures',

'minute' => 'minute',

'minutes' => 'minutes',

'second' => 'seconde',

'seconds' => 'secondes',

'am' => 'matin',

'pm' => 'après-midi',

'AM' => 'MATIN',

'PM' => 'APRÈS-MIDI',

'Sun' => 'Dim',

'Mon' => 'Lun',

'Tue' => 'Mar',

'Wed' => 'Mer',

'Thu' => 'Jeu',

'Fri' => 'Ven',

'Sat' => 'Sam',

'Su' => 'Di',

'Mo' => 'Lu',

'Tu' => 'Ma',

'We' => 'Me',

'Th' => 'Je',

'Fr' => 'Ve',

'Sa' => 'Sa',

'Sunday' => 'Dimanche',

'Monday' => 'Lundi',

'Tuesday' => 'Mardi',

'Wednesday' => 'Mercredi',

'Thursday' => 'Jeudi',

'Friday' => 'Vendredi',

'Saturday' => 'Samedi',

'Jan' => 'Jan',

'Feb' => 'Fév',

'Mar' => 'Mar',

'Apr' => 'Avr',

'May' => 'Mai',

'Jun' => 'Juin',

'Jul' => 'Juil',

'Aug' => 'Aoû',

'Sep' => 'Sep',

'Oct' => 'Oct',

'Nov' => 'Nov',

'Dec' => 'Déc',

'January' => 'Janvier',

'February' => 'Février',

'March' => 'Mars',

'April' => 'Avril',

'May_l' => 'Mai',

'June' => 'Juin',

'July' => 'Juillet',

'August' => 'Août',

'September' => 'Septembre',

'October' => 'Octobre',

'November' => 'Novembre',

'December' => 'Décembre',

'UM12'  	=>	'(UTC -12:00) Fuseau horaire des îles Baker et Howland',

'UM11'		=>	'(UTC -11:00) Heure normale des Samoa, Niue',

'UM10'		=>	'(UTC -10:00) Heure normale d\'Hawaii et des îles Aléoutiennes, îles Cook, Tahiti',

'UM95'		=>	'(UTC -9:30) Fuseau horaire des îles Marquises',

'UM9'		=>	'(UTC -9:00) Heure normale de l\'Alaska, îles Gambier',

'UM8'		=>	'(UTC -8:00) Heure normale du Pacifique, île de Clipperton',

'UM7'		=>	'(UTC -7:00) Heure normale des Montagnes Rocheuses',

'UM6'		=>	'(UTC -6:00) Heure normale du Centre',

'UM5'		=>	'(UTC -5:00) Heure normale de l\'Est de l\'Amérique du Nord',

'UM45'		=>	'(UTC -4:30) Fuseau horaire du Vénézuéla',

'UM4'		=>	'(UTC -4:00) Heure normale de l\'Atlantique',

'UM35'		=>	'(UTC -3:30) Heure normale de Terre-Neuve',

'UM3'		=>	'(UTC -3:00) Fuseau horaire Argentine, Brésil, Guyane française, Uruguay, Groënland',

'UM2'		=>	'(UTC -2:00) Fuseau horaire Géorgie du Sud et les îles Sandwich du Sud',

'UM1'		=>	'(UTC -1:00) Fuseau horaire des Açores, îles du Cap-Vert',

'UTC'		=>	'(UTC) Heure de l\'Europe occidentale, Heure du méridien de Greenwich',

'UP1'		=>	'(UTC +1:00) Heure de l\'Europe centrale',

'UP2'		=>	'(UTC +2:00) Heure de l\'Europe orientale, Heure d\'Afrique centrale, Heure normale d\'Egypte et d\'Afrique du Sud',

'UP3'		=>	'(UTC +3:00) Heure d\'Afrique de l\'est, Heure de Moscou et St Pétersbourg',

'UP35'		=>	'(UTC +3:30) Fuseau horaire de l\'Iran',

'UP4'		=>	'(UTC +4:00) Fuseau horaire de l\'Arménie, Azerbaïdjan, EAU, Oman, Maurice, Seychelles, La Réunion, Heure de Samara',

'UP45'		=>	'(UTC +4:30) Fuseau horaire de l\'Afghanistan',

'UP5'		=>	'(UTC +5:00) Fuseau horaire du Pakistan, Ouzbékistan, Tadjikistan, Turkménistan, Maldives, Kerguélen, Heure de Iékatérinbourg',

'UP55'		=>	'(UTC +5:30) Heure normale de l\'Inde',

'UP575'		=>	'(UTC +5:45) Fuseau horaire du Népal',

'UP6'		=>	'(UTC +6:00) Fuseau horaire du Bangladesh, Bhoutan, Kirghizstan, Novosibirsk, Heure d\'Omsk',

'UP65'		=>	'(UTC +6:30) Fuseau horaire de la Birmanie et des îles Cocos',

'UP7'		=>	'(UTC +7:00) Fuseau horaire du Cambodge, Laos, Thailande, Heure de Krasnoïarsk',

'UP8'		=>	'(UTC +8:00) Heure normale de l\'Australie occidentale et de la Chine, Brunei, Malaisie, Singapour, Taiwan, Heure d\'Irkoutz',

'UP85'		=>	'(UTC +8:30) Fuseau horaire de la Corée du Nord',

'UP875'		=>	'(UTC +8:45) Fuseau horaire de l\'Australie occidentale (Caiguna, Eucla, Mundrabilla, Border Village)',

'UP9'		=>	'(UTC +9:00) Heure normale du Japon, Corée du Nord et du Sud, Timor oriental, Heure de Iakoutsk',

'UP95'		=>	'(UTC +9:30) Heure normale de l\'Australie centrale',

'UP10'		=>	'(UTC +10:00) Heure normale de l\'Australie orientale, Guam, Papouasie-Nouvelle Guinée, Heure de Vladivostok',

'UP105'		=>	'(UTC +10:30) Fuseau horaire de l\'île Lord Howe (Nouvelle-Galles du Sud)',

'UP11'		=>	'(UTC +11:00) Fuseau horaire de la Nouvelle-Calédonie, îles Salomon, Vanuatu, Heure de Srednekolymsk',

'UP115'		=>	'(UTC +11:30) Fuseau horaire de l\'île Norfolk',

'UP12'		=>	'(UTC +12:00) Heure normale de la Nouvelle-Zélande, fuseau horaire des Fidji, îles Gilbert, Marshall, Wallis-et-Futuna, Wake, Tuvalu, Heure de Petropavlovsk-Kamchatskiï',

'UP1275'	=>	'(UTC +12:45) Fuseau horaire des îles Chatham',

'UP13'		=>	'(UTC +13:00) Fuseau horaire des Tonga et Samoa, îles Phoenix',

'UP14'		=>	'(UTC +14:00) Fuseau horaire des îles de la Ligne (île Christmas)',

'select_timezone' => 'Sélectionner le fuseau horaire',

'no_timezones' => 'Aucun fuseau horaire',

'invalid_timezone' => 'Le fuseau horaire soumis est invalide.',

'invalid_date_format' => 'Le format de date soumis est invalide.',

'curl_not_installed' => 'cURL n\'est pas installé sur votre serveur.',

);

// EOF
