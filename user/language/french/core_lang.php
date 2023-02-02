<?php

$lang = array(

    /* General word list */
    'and' => 'et',

    'and_n_others' => 'et %d autres',

    'at' => 'à',

    'auto_redirection' => 'Vous serez automatiquement redirigé(e) dans %x secondes',

    'back' => 'Retour',

    'by' => 'par',

    'click_if_no_redirect' => 'Cliquer ici si vous n\'êtes pas redirigé(e) automatiquement ',

    'disabled' => 'désactivé',

    'dot' => 'point',

    'enabled' => 'activé',

    'encoded_email' => '(JavaScript doit être activé pour visualiser cette adresse email)',

    'first' => 'Premier',

    'id' => 'ID',

    'last' => 'Dern.',

    'next' => 'Prochain',

    'no' => 'Non',

    'not_authorized' => 'Vous n\'êtes pas autorisé(e) à engager cette action',

    'not_available' => 'Non disponible',

    'of' => 'de',

    'off' => 'fermé',

    'on' => 'ouvert',

    'or' => 'ou',

    'pag_first_link' => '&lsaquo; Premier',

    'pag_last_link' => 'Dernier &rsaquo;',

    'page' => 'Page',

    'preference' => 'Préférence',

    'prev' => 'Précédent',

    'return_to_previous' => 'Retour à la page précédente',

    'search' => 'Rechercher',

    'setting' => 'Réglage',

    'site_homepage' => 'Page d\'accueil du site',

    'submit' => 'Envoi',

    'system_off_msg' => 'Ce site est actuellement inactif.',

    'thank_you' => 'Merci!',

    'update' => 'Mettre à jour',

    'updating' => 'Mise à jour en cours…',

    'yes' => 'Oui',

    'required_fields' => 'Champs requis',

    'edit_this' => 'Editer cela',

    /* Errors */
    'captcha_incorrect' => 'Vous n\'avez pas saisi le mot exactement tel qu\'il apparaît sur l\'image',

    'captcha_required' => 'Vous devez soumettre le mot qui apparaît sur l\'image',

    'recaptcha_required' => 'la vérification reCAPTCHA n\'a pas réussi',

    'checksum_changed_accept' => 'Accepter les changements',

    'checksum_changed_warning' => 'Un ou plusieurs fichiers \'core\' ont été altérés:',

    'checksum_email_message' => 'ExpressionEngine a détecté la modification d\'un fichier \'core\' sur: {url}

Les fichiers suivants ont été affectés:
{changed}

Si vous êtes l\'auteur de ces changements, merci d\'accepter les modifications sur la page d\'accueil du tableau de bord. Si vous n\'avez pas vous-même modifié ces fichiers, cela peut être une indication que vous êtes victime d\'une tentative de piratage. Vérifiez que les fichiers ne comprennent pas de contenus suspicieux (JavaScript ou iFrames) et consultez: ' . DOC_URL . 'troubleshooting/error-messages.html#expressionengine-has-detected-the-modification-of-a-core-file',

    'checksum_email_subject' => 'Un fichier \'core\' a été modifié sur votre site.',

    'warning_system_status_title' => 'Merci de vérifier le statut de système en ligne',

    'warning_system_status_message' => 'Le statut actuel de votre système est réglé sur <b>%s</b>. Si vous avez besoin d\'en changer, merci de consulter les <a href="%s">Réglages système</a> ou cliquer sur le bouton ci-dessous.',

    'warning_system_status_button' => 'Régler le système %s',

    'csrf_token_expired' => 'Ce formulaire a expiré. Merci de rafraîchir la page et de réessayer.',

    'cookie_domain_mismatch' => 'Le domaine de cookies configuré ne correspond pas à l\'URL du site.',

    'current_password_incorrect' => 'Le mot de passe actuel n\'a pas été correctement saisi.',

    'current_password_required' => 'Votre mot de passe actuel est requis.',

    'curl_not_installed' => 'cURL n\'est pas installé sur votre serveur',

    'error' => 'Erreur',

    'file_not_found' => 'Le fichier %s n’existe pas.',
    
    'file_manager' => 'Gestionnaire de fichiers',

    'general_error' => 'Les erreurs suivantes ont été détectées',

    'generic_fatal_error' => 'Quelque chose s\'est mal déroulé et cette URL ne peut pas être traitée pour l\'instant.',

    'invalid_action' => 'L\'action que vous avez requise n\'est pas valide.',

    'invalid_url' => 'L’URL que vous avez saisie n\'est pas valide.',

    'missing_encryption_key' => 'Vous n\'avez pas réglé de valeur pour <code>%s</code> dans votre fichier config.php. Cela peut exposer votre installation à des failles de sécurité. Restaurez les clés ou consulter <a href="%s">this troubleshooting article</a>, le guide utilisateur pour obtenir de l\'aide.',

    'el_folder_present' => ' Le répertoire <code>%s</code> est présent sur votre serveur. Veuillez vérifier que vous avez remplacé <code>index.php</code> et <code>admin.php</code> conformément aux <a href="%s">informations de mise à jour</a> et retirez ce répertoire.',

    'missing_mime_config' => 'Impossible d\'importer votre liste blanche mime-type: le fichier %s n\'existe pas et ne peut être lu.',

    'new_version_error' => 'Une erreur imprévue est apparue en tentant de télécharger l\'actuelle version d\'Expressionengine. Consultez ce <a href="%s" rel="external noreferrer">document de dépannage</a> pour davantage d\'informations.',

    'nonexistent_page' => 'La page demandée n\'a pas été trouvée',

    'redirect_xss_fail' => 'Le lien vers lequel vous avez été redirigé(e) contient potentiellement un code malicieux ou dangereux. Nous vous recommandons de cliquer sur le bouton retour et d\'adresser un email %s pour nous communiquer le lien qui a généré ce message.',

    'redirect_warning_header' => 'Alerte de redirection',

    'redirect_description' => 'Vous êtes en train d\'ouvrir une nouvelle page web destinée à accueillir <b>%s</b> qui ne fait pas partie de votre site ',

    'redirect_check_address' => 'Merci de vérifier que cette adresse soit conforme.',

    'redirect_cancel' => 'Annuler',

    'submission_error' => 'Le formulaire que vous avez saisi contient les erreurs suivantes',

    'theme_folder_wrong' => 'Le chemin de votre dossier "themes" est incorrect. Merci de vous rendre à <a href="%s">Réglages d\'URL et réglages de chemin</a> et de vérifier <code>le chemin de themes</code> et <code>l\'URL de themes</code>.',

    'unable_to_load_field_type' => 'Impossible de charger le fichier de type de champ: %s. <br /> Confirmez que ce fichier de type de champ est situé dans le/' . SYSDIR . '/user/addons/ directory',

    'unwritable_cache_folder' => 'Votre dossier de cache n\'a pas les permissions requises.<br />Pour résoudre ce problème: réglez les permissions de dossier de cache (/' . SYSDIR . '/user/cache/) sur 777 (ou sur le réglage équivalent sur votre serveur).',

    'unwritable_config_file' => 'Votre fichier de configuration ne possède pas les permissions appropriées.<br />Pour résoudre ce problème: réglez les permissions du fichier de configuration(/' . SYSDIR . '/user/config/config.php) sur 666 (ou sur le réglage équivalent pour votre serveur).',

    'version_mismatch' => 'La version de votre installation ExpressionEngine (%s) n\'est pas cohérente avec la version signalée (%s). <a href="' . DOC_URL . 'installation/update.html" rel="external"> Merci de mettre de nouveau à jour votre installation de ExpressionEngine</a>.',

    'php72_intl_error' => 'Votre extension PHP <code>intl</code> est périmée. Veuillez vous assurer que vous avez la version <code>ICU 4.6</code> ou une version plus récente.',
    
    'license_error' => 'Erreur de licence',
    'license_error_file_not_writable' => 'Le dossier de cache doit être réinscriptible pour faire fonctionner ExpressionEngine Pro',
    'license_error_file_broken' => 'Il y a eu une erreur lors de la validation du statut de licence d\'ExpressionEngine Pro',


    /* Member Groups */
    'banned' => 'Censurés',

    'guests' => 'Invités',

    'members' => 'Membres',

    'pending' => 'En attente',

    'super_admins' => 'Super Admins',

    'anonymous' => 'Anonymes',

    /* Template.php */
    'error_fix_module_processing' => 'Merci de vérifier que le module \'%x\' est installé et que \'%y\' est une méthode compatible avec le module',
    
    'error_fix_install_addon' => 'Merci de vérifier que l\'add-on \'%x\' est installé.',

    'error_fix_syntax' => 'Merci de corriger la syntaxe dans votre modèle.',

    'error_invalid_conditional' => 'Vous avez une condition non valide dans votre modèle. Merci de reconsidérer vos conditions relatives à une chaîne non fermée, de vérifier des opérateurs non valides, un } manquant, ou un {/if} oublié…',

    'error_layout_too_late' => 'Balise de plugin ou de module trouvée avant la déclaration d\'affichage. Merci de déplacer la balise d\'affichage dans la partie supérieure de votre modèle.',

    'error_multiple_layouts' => 'Plusieurs affichages ont été trouvés, merci de vous assurer que vous avez seulement une balise de présentation par modèle',

    'error_tag_module_processing' => 'La balise suivante n\'a pas pu être traitée:',

    'error_tag_syntax' => 'La balise suivante comprend une erreur de syntaxe:',

    'layout_contents_reserved' => 'Le nom "contents" est réservé aux données de modèles et ne peut pas être utilisé comme variable d\'affichage (c\'est-à-dire. {layout:set name="contents"} ou {layout="foo/bar" contents=""}).',

    'template_load_order' => 'Classement de chargements de modèles',

    'template_loop' => 'Vous avez causé une boucle de modèles due à des sous-modèles incorrectement imbriqués (\'%s\' est appelé de façon récursive)',
    
     'route_not_found' => 'Route de modèle non trouvée.',

    /* Email */
    'error_sending_email' => 'Impossible d\'adresser un email pour le moment.',

    'forgotten_email_sent' => 'Si cette adresse email est associée à un compte, les instructions pour réinitaliser votre mot de passe viennent de vous être adressées par email.',

    'no_email_found' => 'L\'adresse email que vous avez saisie n\'a pas été trouvée dans la base de données.',

    'password_has_been_reset' => 'Votre mot de passe a été réinitialisé et un nouveau mot de passe vous a été adressé par email.',

    'password_reset_flood_lock' => 'Vous avez tenté de réinitialiser votre mot de passe par de trop nombreuses tentatives aujourd\'hui. Merci de consulter votre boite de réception ainsi que les dossiers de spam pour ce qui concerne les requêtes précédentes sinon contacter l\'administrateur de votre site.',

    'forgotten_username_email_sent' => 'Si cette adresse email est associée à un compte, un email contenant votre nom d\'utilisateur vient de vous être adressé par courriel.',

    'your_new_login_info' => 'Information de connexion',

    /* Timezone */
    'invalid_date_format' => 'Le format de date que vous avez fourni est non valide.',

    'invalid_timezone' => 'Le fuseau horaire que vous avez fourni est non valide.',

    'no_timezones' => 'Pas de fuseaux horaires',

    'select_timezone' => 'Sélectionnez le fuseau horaire',

    /* Date */
    'singular' => 'un',

    'less_than' => 'moins de',

    'about' => 'environ',

    'past' => ' il y a %s',

    'future' => 'dans %s',

    'ago' => 'il y a %x',

    'year' => 'année',

    'years' => 'années',

    'month' => 'mois',

    'months' => 'mois',

    'fortnight' => 'deux semaines',

    'fortnights' => 'deux semaines',

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

    'am' => 'am',

    'pm' => 'pm',

    'AM' => 'AM',

    'PM' => 'PM',

    'Sun' => 'Dim',

    'Mon' => 'Lun',

    'Tue' => 'Mar',

    'Wed' => 'Mer',

    'Thu' => 'Jeu',

    'Fri' => 'Ven',

    'Sat' => 'Sam',

    'Su' => 'S',

    'Mo' => 'M',

    'Tu' => 'T',

    'We' => 'W',

    'Th' => 'T',

    'Fr' => 'F',

    'Sa' => 'S',

    'Sunday' => 'Dimanche',

    'Monday' => 'Lundi',

    'Tuesday' => 'Mardi',

    'Wednesday' => 'Mercredi',

    'Thursday' => 'Jeudi',

    'Friday' => 'Vendredi',

    'Saturday' => 'Samedi',

    'Jan' => 'Jan',

    'Feb' => 'Fev',

    'Mar' => 'Mar',

    'Apr' => 'Avr',

    'May' => 'Mai',

    'Jun' => 'Juin',

    'Jul' => 'Juil',

    'Aug' => 'Aou',

    'Sep' => 'Sep',

    'Oct' => 'Oct',

    'Nov' => 'Nov',

    'Dec' => 'Dec',

    'January' => 'Janvier',

    'February' => 'Février',

    'March' => 'Mars',

    'April' => 'Avril',

    'May_l' => 'Mai',

    'June' => 'Juin',

    'July' => 'Juillet',

    'August' => 'Aoüt',

    'September' => 'Septembre',

    'October' => 'Octobre',

    'November' => 'Novembre',

    'December' => 'Décembre',

    'UM12' => '(UTC -12:00) Baker/Ile Howland',

    'UM11' => '(UTC -11:00) Niue',

    'UM10' => '(UTC -10:00) Heure Standard Hawaii-Iles Aléoutiennes, Iles Cook, Tahiti',

    'UM95' => '(UTC -9:30) Iles Marquises',

    'UM9' => '(UTC -9:00) Heure standard Alaska, Iles Gambier',

    'UM8' => '(UTC -8:00) Heure Standard Pacifique, Ile Clipperton',

    'UM7' => '(UTC -7:00) Heure Standard Montagne',

    'UM6' => '(UTC -6:00) Heure Standard Centre',

    'UM5' => '(UTC -5:00) Heure Standard de l\'Est, Heure standard Ouest Caraïbes',

    'UM45' => '(UTC -4:30) Heure Standard Vénézuélienne',

    'UM4' => '(UTC -4:00) Heure Standard de l\'Atlantique, Heure Standard Est Caraïbes',

    'UM35' => '(UTC -3:30) Heure Standard de Terre-Neuve',

    'UM3' => '(UTC -3:00) Argentine, Brésil, Guyane française, Uruguay, Saint-Pierre et Miquelon',

    'UM2' => '(UTC -2:00) Géorgie du sud /Sud Iles Sandwich',

    'UM1' => '(UTC -1:00) Açores, Iles du Cap Vert',

    'UTC' => '(UTC) Temps universel Greenwich, Heure Europe de l\'ouest',

    'UP1' => '(UTC +1:00) Heure Centre Europe, Heure Afrique de l\'Ouest',

    'UP2' => '(UTC +2:00) Heure Centre Afrique, Europe de l\'Est, Kaliningrad',

    'UP3' => '(UTC +3:00) Heure Afrique de l\'Est, Heure Standard Arabie saoudite ',

    'UP35' => '(UTC +3:30) Heure Standard de l\'Iran',

    'UP4' => '(UTC +4:00) Heure de Moscou, Heure Standard d\' Azerbaijan',

    'UP45' => '(UTC +4:30) Afghanistan',

    'UP5' => '(UTC +5:00) Heure Standard du Pakistan, Heure Yekaterinburg ',

    'UP55' => '(UTC +5:30) Heure Standard de l\'Inde, du Sri Lanka ',

    'UP575' => '(UTC +5:45) Heure du Népal',

    'UP6' => '(UTC +6:00) Heure Standard du Bangladesh, du Bhutan, de Omsk',

    'UP65' => '(UTC +6:30) Iles Cocos, Myanmar',

    'UP7' => '(UTC +7:00) Heure de Krasnoyarsk, Cambodge, Laos, Thaïlande, Vietnam',

    'UP8' => '(UTC +8:00) Here Standard de l\'Ouest Australie, Beijing, Irkutsk ',

    'UP875' => '(UTC +8:45) Heure Standard du Centre Australie',

    'UP9' => '(UTC +9:00) Heure Standard du Japon, Heure Standard de Corée, Heure de Yakutsk',

    'UP95' => '(UTC +9:30) Heure Standard du Centre Australie',

    'UP10' => '(UTC +10:00) Heure Standard de l\'Est Australie, Heure de Vladivostok',

    'UP105' => '(UTC +10:30) Ile Lord Howe',

    'UP11' => '(UTC +11:00) Heure de Magadan, Iles Salomon, Vanuatu',

    'UP115' => '(UTC +11:30) Ile Norfolk',

    'UP12' => '(UTC +12:00) Fiji, Iles Gilbert, Heure Kamchatka, Heure Standard de Nouvelle Zélande',

    'UP1275' => '(UTC +12:45) Heure Standard des Iles Chatham',

    'UP13' => '(UTC +13:00) Fuseau horaire Samoa, Iles Phoenix, Tonga',

    'UP14' => '(UTC +14:00) Iles de la ligne',

    /* Cookies */

    'cookie_csrf_token' => 'Jeton CSRF',
    'cookie_csrf_token_desc' => 'Un cookie de sécurité utilisé pour authentifier l\'utilisateur et pour prévenir des attaques "Cross Site Request Forgery" ',

    'cookie_flash' => 'Données Flash',
    'cookie_flash_desc' => 'Messages de feedback utilisateur, cryptés pour des raisons de sécurité.',

    'cookie_remember' => 'Me garder en mémoire',
    'cookie_remember_desc' => 'Détermine si un utilisateur est automatiquement connecté en visitant le site.',

    'cookie_sessionid' => 'Session ID',
    'cookie_sessionid_desc' => 'ID de session, utilisée pour associer un membre connecté avec ses propres données.',

    'cookie_visitor_consents' => 'Consentement de visiteurs',
    'cookie_visitor_consents_desc' => 'Sauvegarde les réponses des requêtes de consentement pour des visiteurs non connectés',

    'cookie_last_activity' => 'Dernière activité',
    'cookie_last_activity_desc' => 'Enregistre le temps de chargement de la dernière page. Utilisé pour calculer les sessions actives.',

    'cookie_last_visit' => 'Dernière visite',
    'cookie_last_visit_desc' => 'Date de la dernière visite de l\'utilisateur, basée sur le cookie last_activity.  Peut être affichée sous forme de statistique pour les membres et utilisée par les forums et les commentaires pour repérer des sujets non lus à la fois pour les membres et les invités.',

    'cookie_anon' => 'Anonymisation',
    'cookie_anon_desc' => 'Détermine si le nom d\'utilisateur d\'un usager est affiché dans la liste des membres actuellement connectés.',

    'cookie_tracker' => 'Traqueur',
    'cookie_tracker_desc' => 'Contient les 5 dernières pages affichées, cryptées pour la sécurité. Typiquement utilisé pour les formulaires ou les retours de messages d\'erreur.',

    'cookie_viewtype' => 'Type de visualisation du gestionnaire de fichiers',
    'cookie_viewtype_desc' => 'Détermine \'View Type\' pour son utilisation dans Filemanager (table de vues en miniatures)',

    'cookie_cp_last_site_id' => 'CP dernière ID du site',
    'cookie_cp_last_site_id_desc' => 'Cookie MSM indiquant le dernier site consulté dans le tableau de bord.',

    'cookie_collapsed_nav' => 'Navigation réduite',
    'cookie_collapsed_nav_desc' => 'Détermine si la barre de navigation latérale du tableau de bord devrait être rabattue.',

     'cookie_secondary_sidebar' => 'Etat de volet latéral secondaire',
    'cookie_secondary_sidebar_desc' => 'Détermine si le volet de navigation secondaire dans le tableau de bord devrait être rabattue.',


    'cookie_ee_cp_viewmode' => 'CP Mode visualisation',
    'cookie_ee_cp_viewmode_desc' => 'Détermine le mode de visualisation pour le tableau de bord.',

    'cp' => 'Tableau de bord',

     'adapter_local' => 'Local',


);

// EOF
