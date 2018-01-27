<?php

$lang = array(

//----------------------------
// General word list
//----------------------------

"no" =>
"Non",

"yes" =>
"Oui",

"on" =>
"allumé",

"off" =>
"eteint",

"first" =>
"Premier",

"last" =>
"Dernier",

"enabled" =>
"activé",

"disabled" =>
"désactivé",

"back" =>
"Retour",

"submit" =>
"Envoyer",

"update" =>
"Mettre à jour",

"thank_you" =>
"Merci !",

"page" =>
"Page",

"of" =>
"sur",

'by' =>
'par',

'at' =>
'à',

'dot' =>
'point',

'and' =>
'et',

'or' =>
'ou',

'id' =>
'ID',

'encoded_email' =>
'(Le JavaScript doit être activé pour voir cette adresse email)',

'search' =>
"Recherche",

"system_off_msg" =>
"Ce site est actuellement désactivé.",

"not_authorized" =>
"Vous n'êtes pas autorisé à exécuter cette action",

"auto_redirection" =>
"Vous serez redirigé automatiquement dans %x secondes",

"click_if_no_redirect" =>
"Cliquez ici si vous n'êtes pas redirigé automatiquement",

"return_to_previous" =>
"Retourner à la page précédente",

'not_available' =>
'Indisponible',

'setting' =>
'Paramètre',

'preference' =>
'Préférence',

'pag_first_link' => '&lsaquo; Début',
'pag_last_link' => 'Fin &rsaquo;',

//----------------------------
// Errors
//----------------------------

"error" =>
"Erreur",

'generic_fatal_error' =>
'Une erreur est survenue et cette URL ne peut être rendue pour le moment.',

"invalid_url" =>
"L'URL que vous avez soumise est invalide.",

"submission_error" =>
"Le formulaire que vous avez soumis contient les erreurs suivantes",

"general_error" =>
"Les erreurs suivantes ont été rencontrées",

"invalid_action" =>
"L'action que vous avez demandée est invalide.",

'csrf_token_expired' =>
'Ce formulaire a expiré. Merci de raffraîchir l\'écran et de réessayer.',

'current_password_required' =>
'Votre mot de passe actuel est requis.',

'current_password_incorrect' =>
'Vous n\'avez pas correctement saisi votre mot de passe actuel.',

"captcha_required" =>
"Vous devez saisir le mot qui apparaît dans l'image",

"captcha_incorrect" =>
"Vous n'avez pas saisi le mot exactement comme il apparaît dans l'image",

"nonexistent_page" =>
"La page que vous avez demandée n'a pu être trouvée",

'unable_to_load_field_type' =>
'Impossible de charger le fichier de type de champ demandé :  %s.<br />
Confirmez que le fichier de type de champ est bien situé dans le répertoire expressionengine/third_party/ ',

'unwritable_cache_folder' =>
'Votre répertoire Cache ne possède pas les permissions nécessaires.<br>
Correction : mettez les permissions du répertoire Cache (/expressionengine/cache/) à 777 (ou équivalent pour votre serveur).',

'unwritable_config_file' =>
'Votre fichier de configuration ne possède pas les permissions nécessaires.<br>
Correction: mettez les permissions du fichier de configuration (/expressionengine/config/config.php) à 666 (ou équivalent pour votre serveur).',

'redirect_xss_fail' => 'Le lien vers lequel vous êtes redirigé contient du code potentiellement malicieux ou dangereux. Nous vous recommandons de cliquer sur le bouton de retour arrière et d\'envoyer un email à %s pour communiquer le lien qui a généré ce message.',

'missing_mime_config' =>
'Impossible d\'importer votre liste blanche de types MIME : le fichier %s n\'existe pas ou ne peut pas être lu.',

'file_not_found' =>
'Le fichier %s n\'existe pas.',

//----------------------------
// Member Groups
//----------------------------

"banned" =>
"Exclu",

"guests" =>
"Invités",

"members" =>
"Membres",

"pending" =>
"En attente",

"super_admins" =>
"Super Administrateurs",


//----------------------------
// Template.php
//----------------------------

"error_tag_syntax" =>
"La balise suivante contient une erreur de syntaxe :",

"error_fix_syntax" =>
"Veuillez corriger la syntaxe dans votre modèle.",

"error_tag_module_processing" =>
"La balise suivante ne peut être interprétée :",

"error_fix_module_processing" =>
"Veuillez vérifier que le module '%x' est installé et que '%y' est une méthode disponible pour ce module",

"template_loop" =>
"Vous avez causé une boucle de modèle due à un sous-modèle mal imbriqué ('%s' est appelé de façon récursive)",

'template_load_order' =>
'Ordre de chargement des modèles',

'error_multiple_layouts' =>
'Plusieurs dispositions trouvées, merci de vous assurer que vous n\'avez qu\'une balise de disposition par modèle.',

'error_layout_too_late' =>
'Balise de plugin ou de module trouvée avant la déclaration de disposition. Merci de déplacer la balise de disposition tout en haut de votre modèle.',

'error_invalid_conditional' =>
'Vous avez une conditionnelle invalide dans votre modèle. Merci de vérifier vos conditionnelles en cherchant une chaîne non fermée, des opérateurs invalides, un } manquant ou un {/if} manquant.',

'layout_contents_reserved' =>
'Le nom "contents" est réservé pour les données de modèle et ne peut pas être utilisé en tant que variable de disposition (ex. {layout:set name="contents"} or {layout="foo/bar" contents=""}).',


//----------------------------
// Email
//----------------------------

"forgotten_email_sent" =>
"Si cette adresse email est associée à un compte, Les instructions pour réinitialiser votre mot de passe viennent de vous être envoyées par email.",

"error_sending_email" =>
"Impossible d'envoyer l'email pour le moment.",

"no_email_found" =>
"L'adresse email que vous avez saisie n'a pu être trouvée dans la base de données.",

'password_reset_flood_lock' =>
'Vous avez essayé de réinitialiser votre mot de passe de trop nombreuses fois aujourd\'hui. Merci de vérifier vos dossiers Boîte de réception et Spam (courrier indésirable) pour les requêtes précédentes, ou contacter l\'administrateur du site.',

"your_new_login_info" =>
"Information de connexion",

"password_has_been_reset" =>
"Votre mot de passe a été réinitialisé et un nouveau mot de passe vous a été envoyé par email.",

//----------------------------
// Date
//----------------------------

'singular' =>
'une',

'less_than' =>
'moins de',

'about' =>
'environ',

'past' =>
'il y a %s',

'future' =>
'dans %s',

'ago' =>
'il y a %x',

"year" =>
"année",

"years" =>
"années",

"month" =>
"mois",

"months" =>
"mois",

'fortnight' =>
'quinzaine',

'fortnights' =>
'quinzaines',

"week" =>
"semaine",

"weeks" =>
"semaines",

"day" =>
"jour",

"days" =>
"jours",

"hour" =>
"heure",

"hours" =>
"heures",

"minute" =>
"minute",

"minutes" =>
"minutes",

"second" =>
"seconde",

"seconds" =>
"secondes",

"am" =>
"matin",

"pm" =>
"après midi",

"AM" =>
"MATIN",

"PM" =>
"APRÈS MIDI",

"Sun" =>
"Dim",

"Mon" =>
"Lun",

"Tue" =>
"Mar",

"Wed" =>
"Mer",

"Thu" =>
"Jeu",

"Fri" =>
"Ven",

"Sat" =>
"Sam",

"Su" =>
"D",

"Mo" =>
"L",

"Tu" =>
"M",

"We" =>
"ME",

"Th" =>
"J",

"Fr" =>
"V",

"Sa" =>
"S",

"Sunday" =>
"Dimanche",

"Monday" =>
"Lundi",

"Tuesday" =>
"Mardi",

"Wednesday" =>
"Mercredi",

"Thursday" =>
"Jeudi",

"Friday" =>
"Vendredi",

"Saturday" =>
"Samedi",


"Jan" =>
"Jan",

"Feb" =>
"Fév",

"Mar" =>
"Mar",

"Apr" =>
"Avr",

"May" =>
"Mai",

"Jun" =>
"Juin",

"Jul" =>
"Jui",

"Aug" =>
"Aoû",

"Sep" =>
"Sep",

"Oct" =>
"Oct",

"Nov" =>
"Nov",

"Dec" =>
"Déc",

"January" =>
"Janvier",

"February" =>
"Février",

"March" =>
"Mars",

"April" =>
"Avril",

"May_l" =>
"Mai",

"June" =>
"Juin",

"July" =>
"Juillet",

"August" =>
"Août",

"September" =>
"Septembre",

"October" =>
"Octobre",

"November" =>
"Novembre",

"December" =>
"Décembre",


'UM12'  	=>	'(UTC -12:00) Fuseau horaire des îles Baker et Howland',
'UM11'		=>	'(UTC -11:00) Heure standard des Samoa, Niue',
'UM10'		=>	'(UTC -10:00) Heure standard d\'Hawaii et des îles Aléoutiennes, îles Cook, Tahiti',
'UM95'		=>	'(UTC -9:30) Fuseau horaire des îles Marquises',
'UM9'		=>	'(UTC -9:00) Heure standard de l\'Alaska, îles Gambier',
'UM8'		=>	'(UTC -8:00) Heure standard du Pacifique, île de Clipperton',
'UM7'		=>	'(UTC -7:00) Heure standard des Montagnes Rocheuses',
'UM6'		=>	'(UTC -6:00) Heure standard du Centre',
'UM5'		=>	'(UTC -5:00) Heure standard de l\'Est de l\'Amérique du Nord',
'UM45'		=>	'(UTC -4:30) Fuseau horaire du Vénézuéla',
'UM4'		=>	'(UTC -4:00) Heure standard de l\'Atlantique',
'UM35'		=>	'(UTC -3:30) Heure standard de Terre-Neuve',
'UM3'		=>	'(UTC -3:00) Fuseau horaire Argentine, Brésil, Guyane française, Uruguay, Groënland',
'UM2'		=>	'(UTC -2:00) Fuseau horaire Géorgie du Sud et les îles Sandwich du Sud',
'UM1'		=>	'(UTC -1:00) Fuseau horaire des Açores, îles du Cap-Vert',
'UTC'		=>	'(UTC) Heure de l\'Europe occidentale, Heure du méridien de Greenwich',
'UP1'		=>	'(UTC +1:00) Heure de l\'Europe centrale',
'UP2'		=>	'(UTC +2:00) Heure de l\'Europe orientale',
'UP3'		=>	'(UTC +3:00) Fuseau horaire de l\'Afrique de l\'est, Moscou et St Pétersbourg',
'UP35'		=>	'(UTC +3:30) Fuseau horaire de l\'Iran',
'UP4'		=>	'(UTC +4:00) Fuseau horaire de l\'Arménie, Azerbaïdjan, EAU, Oman, Maurice, Seychelles, La Réunion',
'UP45'		=>	'(UTC +4:30) Fuseau horaire de l\'Afghanistan',
'UP5'		=>	'(UTC +5:00) Fuseau horaire du Pakistan, Ouzbékistan, Tadjikistan, Turkménistan, Maldives, Kerguélen, Iékatérinbourg',
'UP55'		=>	'(UTC +5:30) Heure standard de l\'Inde',
'UP575'		=>	'(UTC +5:45) Fuseau horaire du Népal',
'UP6'		=>	'(UTC +6:00) Fuseau horaire du Bangladesh, Bhoutan, Kirghizstan, Novosibirsk, Omsk',
'UP65'		=>	'(UTC +6:30) Fuseau horaire de la Birmanie et des îles Cocos',
'UP7'		=>	'(UTC +7:00) Fuseau horaire du Cambodge, Laos, Thailande, Krasnoyarsk',
'UP8'		=>	'(UTC +8:00) Heure standard de l\'Australie occidentale et de la Chine, Brunei, Malaisie, Singapour, Taiwan',
'UP875'		=>	'(UTC +8:45) Fuseau horaire de l\'Australie occidentale (Caiguna, Eucla, Border Village)',
'UP9'		=>	'(UTC +9:00) Heure standard du Japon, Corée du Nord et du Sud, Timor oriental, Irkoutsk',
'UP95'		=>	'(UTC +9:30) Heure standard de l\'Australie centrale',
'UP10'		=>	'(UTC +10:00) Heure standard de l\'Australie orientale, Guam, Papouasie-Nouvelle Guinée, Vladivostok',
'UP105'		=>	'(UTC +10:30) Fuseau horaire de l\'île Lord Howe (Nouvelle-Galles du Sud)',
'UP11'		=>	'(UTC +11:00) Fuseau horaire de la Nouvelle-Calédonie, îles Salomon, Vanuatu',
'UP115'		=>	'(UTC +11:30) Fuseau horaire de l\'île Norfolk',
'UP12'		=>	'(UTC +12:00) Heure standard de la Nouvelle-Zélande, fuseau horaire des Fidji, îles Gilbert, Marshall, Wallis-et-Futuna, Wake, Tuvalu',
'UP1275'	=>	'(UTC +12:45) Fuseau horaire des îles Chatham',
'UP13'		=>	'(UTC +13:00) Fuseau horaire des Tonga et Samoa, îles Phoenix',
'UP14'		=>	'(UTC +14:00) Fuseau horaire des îles de la Ligne (île Christmas)',

"select_timezone" =>
"Sélectionner le fuseau horaire",

"no_timezones" =>
"Aucun fuseau horaire",

// IGNORE
''=>'');
/* End of file core_lang.php */
/* Location: ./system/expressionengine/language/french/core_lang.php */