<?php

$lang = array(

/**
 * Menu
 */

'general_settings' => 'Paramètres généraux',

'url_path_settings' => 'Paramètres URL et chemin serveur',

'outgoing_email' => 'Email sortant',

'debugging_output' => 'Débogage & sortie',

'content_and_design' => 'Contenu & design',

'comment_settings' => 'Paramètres de commentaires',

'html_buttons' => 'Boutons <abbr title="Hyper-Text Markup Language">HTML</abbr>',

'template_settings' => 'Paramètres des modèles',

'hit_tracking' => 'Suivi des modèles',

'pages_settings' => 'Paramètres des pages',

'upload_directories' => 'Répertoires de téléchargement',

'word_censoring' => 'Censure de mots',

'menu_manager' => 'Gestion des menus',

'members' => 'Membres',

'messages' => 'Messages',

'avatars' => 'Avatars',

'security_privacy' => 'Securité & vie privée',

'access_throttling' => 'Filtrage des accès',

'captcha' => 'CAPTCHA',

'system_settings' => 'Paramètres Système',

/**
 * General Settings
 */

'site_name' => 'Nom de votre site',

'site_short_name' => 'Nom court',

'site_short_name_taken' => 'Ce nom court est déjà pris.',

'site_online' => 'Le site est-il en ligne ?',

'site_online_desc' => 'Si le site est hors ligne, seuls les Super Administrateurs et les groupes de membres avec les permissions suffisantes pourront le visualiser',

'version_autocheck' => 'Recherche automatique de nouvelle version ?',

'version_autocheck_desc' => 'Si positionné à <b>Auto</b>, ExpressionEngine recherchera automatiquement de nouvelles versions du logiciel.',

'enable_msm' => 'Activer le gestionnaire de sites ?',

'enable_msm_desc' => 'S\'il est sur <b>Activer</b>, les Super Administrateurs et les groupes de membres avec les permissions suffisantes pourront gérer des sites web supplémentaires à partir du <abbr title="Panneau de Contrôle">PC</abbr>.',

'online' => 'En Ligne',

'offline' => 'Hors Ligne',

'auto' => 'Auto',

'manual' => 'Manuel',

'check_now' => 'Vérifier maintenant',

'defaults' => 'Valeurs par défaut',

'language' => 'Langue',

'date_time_settings' => 'Paramètres Date &amp; Heure',

'site_default' => 'Utiliser les valeurs par défaut du site',

'timezone' => 'Fuseau horaire',

'date_time_fmt' => 'Format de date &amp; heure',

"24_hour" => "24 heures",

"12_hour" => "12 heures avec AM/PM",

'include_seconds' => "Afficher les secondes ?",

'include_seconds_desc' => 'Si positionné à <b>Oui</b>, les secondes seront ajoutées au format de date affiché.',

'btn_save_settings' => 'Enregistrer les paramètres',

'running_current' => 'ExpressionEngine est à jour',

'running_current_desc' => 'ExpressionEngine %s est la dernière version.',

'error_getting_version'	=> 'Vous utilisez ExpressionEngine %s. Impossible de déterminer à cet instant si une version plus récente est disponible.',

'version_update_available' => 'Une nouvelle version d\'ExpressionEngine est disponible !',

'version_update_inst' => 'ExpressionEngine %s est disponible. <a href="%s" rel="external">Téléchargez la dernière version</a> et suivez les <a href="%s" rel="external">instructions de mise à jour</a>.',

/**
 * License & Registration
 */

'license_and_registration' => 'Licence & enregistrement',
'license_and_registration_settings' => 'Paramètres de licence et d\'enregistrement',

'license_updated' => 'Licence & enregistrement mis à jour',
'license_updated_desc' => 'Vos informations de licence et d\'enregistrement ont été mises à jour avec succès.',

'license_file_upload_error' => 'Impossible de mettre à jour les informations de licence et d\'enregistrement',
'license_file_upload_error_desc' => 'Nous n\'avons pas pu mettre à jour les informations de licence et d\'enregistrement, merci de vérifier et corriger les erreurs ci-dessous.',

'license_file_error' => 'Licence invalide',
'license_file_corrupt_license_file' => 'Il manque des données dans le fichier de licence fourni.',
'license_file_invalid_signature' => 'Le fichier de licence fourni n\'a pas une signature valide.',
'license_file_missing_pubkey' => 'Il manque des données dans le produit ExpressionEngine. Merci de visiter <a href="%s" rel="external">EllisLab.com</a> et de télécharger un nouvel exemplaire.',
'license_file_invalid_license_number' => 'Le fichier de licence fourni est invalide.',

'license_file_fail' => 'Licence non enregistrée',
'license_file_permissions' => 'Nous n\'avons pas pu enregistrer le fichier de licence. Vérifiez les permission sur <b>%s</b>.',

'license_file' => 'Fichier de licence',
'license_file_desc' => 'Tel que trouvé sur votre page <a href="%s" rel="external">gestion des achats</a>.',

'site_limit' => 'Limite de site',

'features_limited' => 'Fonctionnalités limitées',
'features_limited_desc' => 'La version Core d\'ExpressionEngine a des fonctionnalités limitées. <a href="%s" rel="external">Mettez-la à jour maintenant.</a>',

/**
 * URLs and Path Settings
 */

'url_path_settings_title' => 'Paramètres <abbr title="Uniform Resource Location">URL</abbr> et chemin serveur',

'base_url' => 'URL de base par défaut',

'base_url_desc' => 'Utilisez <code>{base_url}</code> pour construire des URLs dans les champs "URL" du panneau de contrôle.',

'base_path' => 'Chemin de base par défaut',

'base_path_desc' => 'Utilisez <code>{base_path}</code> pour construire des chemins serveur dans les champs "chemin" du panneau de contrôle.',

'site_index' => 'Page d\'index du site web',

'site_index_desc' => 'Plus communément <mark>index.php</mark>.',

'site_url' => 'Répertoire racine du site web',

'site_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre fichier <mark>index.php</mark>.',

'cp_url' => 'Répertoire du panneau de contrôle',

'cp_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre panneau de contrôle.',

'themes_url' => 'Répertoire des thèmes',

'themes_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre répertoire des <mark>thèmes</mark>.',

'themes_path' => 'Chemin serveur des thèmes',

'themes_path_desc' => 'Chemin serveur complet vers votre répertoire des <mark>thèmes</mark>.',

'docs_url' => 'Répertoire de la documentation',

'docs_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre répertoire de la <mark>documentation</mark>.',

'member_segment_trigger' => 'Segment <abbr title="Uniform Resource Location">URL</abbr> de profil',

'member_segment_trigger_desc' => 'Mot qui déclenche l\'affichage du profil de membre. <b>Ne peut pas</b> être identique à celui identifiant un modèle ou un groupe de modèle.',

'category_segment_trigger' => 'Segment <abbr title="Uniform Resource Location">URL</abbr> de catégorie',

'category_segment_trigger_desc' => 'Mot qui déclenche l\'affichage d\'une catégorie. <b>Ne peut pas</b> être identique à celui identifiant un modèle ou un groupe de modèle.',

'category_url' => '<abbr title="Uniform Resource Location">URL</abbr> de catégorie',

'category_url_desc' => 'S\'il est sur <b>Titres</b>, les liens de catégories utiliseront les titres <abbr title="Uniform Resource Location">URL</abbr> de catégories plutôt que les identifiants de catégories.',

'category_url_opt_titles' => 'Titres',

'category_url_opt_ids' => 'IDs',

'url_title_separator' => 'Séparateur de titre <abbr title="Uniform Resource Location">URL</abbr>',

'url_title_separator_desc' => 'Caractère utilisé pour séparer les mots dans les <abbr title="Uniform Resource Location">URL</abbr>s générées, <mark>les tirets (-)</mark> sont recommandés.',

'url_title_separator_opt_hyphen' => 'Tiret (mots-différents)',

'url_title_separator_opt_under' => 'Souligné (mots_différents)',

/**
 * Outgoing Email
 */

'webmaster_email' => 'Adresse',

'webmaster_email_desc' => 'Adresse email d\'expédition des emails automatiques. Sans cela, les emails automatiques seront probablement marqués comme SPAM.',

'webmaster_name' => 'Nom pour la zone De',

'webmaster_name_desc' => 'Nom que vous souhaitez que les emails automatiques utilisent.',

'email_charset' => 'Encodage des caractères',

'email_charset_desc' => 'Une adresse email recquiert un encodage des caractères pour être formattée correctement. UTF-8 est l\'option recommandée.',

'mail_protocol' => 'Protocole',

'mail_protocol_desc' => 'Protocole d\'envoi préféré des emails automatiques. SMTP est recommandé.',

'smtp_options' => 'Options SMTP',

'smtp_server' => 'Adresse du serveur',

'smtp_server_desc' => 'Emplacement URL de votre <mark>serveur SMTP</mark>.',

'sending_options' => 'Options d\'envoi',

'mail_format' => 'Format d\'email',

'mail_format_desc' => 'Format dans lequel les emails sont envoyés. Texte Brut est l\'option recommandée.',

'word_wrap' => 'Activer la césure de mot par défaut ?',

'word_wrap_desc' => 'S\'il est sur <b>Activer</b>, le système appliquera une césure automatique sur les longues lignes de texte afin de rendre ce dernier plus lisible.',

'php_mail' => 'PHP Mail',

'sendmail' => 'Sendmail',

'smtp' => 'SMTP',

'email_smtp_crypto' => 'Type de connexion',

'email_smtp_crypto_desc' => 'Contactez votre fournisseur de service SMTP pour obtenir les instructions nécessaires.',

'ssl' => 'SSL (ssl://)',

'tls' => 'STARTTLS',

'unencrypted' => 'Non chiffré (non recommandé)',

'email_newline' => 'Caractère de nouvelle ligne',

'email_newline_desc' => '\\\n procure la meilleure compatibilité ; si ce paramètre ne fonctionne pas pour vous, contactez votre fournisseur de service email pour obtenir les instructions nécessaires.',

'plain_text' => 'Texte Brut',

'html' => 'HTML',

'empty_stmp_fields' => 'Ce champ est obligatoire pour le protocol SMTP.',

/**
 * Debugging & Output
 */

'enable_errors' => 'Activer les rapports d\'erreurs ?',

'enable_errors_desc' => 'S\'il est sur <b>Activer</b>, les Super Administrateurs pourront voir les erreurs PHP/MySQL quand elles surviendront.',

'show_profiler' => 'Activer le débogage ?',

'show_profiler_desc' => 'S\'il est sur <b>Activer</b>, les Super Administrateurs verront les résultats des tests de performances, toutes les requêtes SQL, ainsi que les données des formulaires s\'afficher au bas de la fenêtre du navigateur.',

'enable_devlog_alerts' => 'Activer les alertes du Journal Développeur ?',

'enable_devlog_alerts_desc' => 'S\'il est sur <b>Activer</b>, les Super Administrateurs verront des alertes dans le panneau de contrôle quand de nouveaux éléments du <a href="%s">Journal Développeur</a> exigeront une action. Actuellement <b>%s élément(s)</b> est/sont journalisé(s).',

'output_options' => 'Options de sortie',

'gzip_output' => 'Activer la compression <abbr title="GNU Zip Compression">GZIP</abbr> ?',

'gzip_output_desc' => 'Si positionné à <b>Oui</b>, votre site sera compressé dans le format GZIP pour optimiser le chargement des pages.',

'force_query_string' => 'Forcer les <abbr title="Uniform Resource Location">URL</abbr> de chaînes de requête ?',

'force_query_string_desc' => 'Si positionné à <b>Oui</b>, les serveurs qui ne supportent pas la variable <mark>PATH_INFO</mark> utiliseront les URLs de chaînes de requête à la place.',

'send_headers' => 'Utiliser les en-têtes <abbr title="Hypertext Transfer Protocol">HTTP</abbr> des pages ?',

'send_headers_desc' => 'Si positionné à <b>Oui</b>, votre site générera des en-têtes <abbr title="Hypertext Transfer Protocol">HTTP</abbr> pour toutes les pages.',

'redirect_method' => 'Méthode de redirection',

'redirect_method_desc' => 'Précise la méthode de redirection de page que le système utilisera pour <mark>{redirect=\'\'}</mark> et les autres redirections intégrées.',

'redirect_method_opt_location' => 'Localisation (plus rapide)',

'redirect_method_opt_refresh' => 'Actualisation (serveurs Windows)',

'caching_driver' => 'Driver de cache',

'caching_driver_desc' => 'Les caches peuvent être stockées soit dans un driver basé sur les fichiers, soit dans un driver basé sur la mémoire vive.',

'caching_driver_failover' => 'Impossible de se connecter à %s, utilisation du driver %s à la place.',

'caching_driver_file_fail' => 'Impossible d\'utiliser le driver %s, vérifiez les permissions du chemin de cache.',

'disable_caching' => 'Désactiver les caches',

'max_caches' => 'Nombre maximum d\'<abbr title="Uniform Resource Identifier">URI</abbr> en cache',

'max_caches_desc' => 'Si vous activez le cache des pages ou de la base de données, cette préférence limitera le nombre total d\'instances en cache. Nous recommandons 150 pour un petit site et 300 pour les grands sites. Une limite interne de 1000 ne peut être dépassée.',

'new_relic' => 'Options New Relic',

'use_newrelic' => 'Activer le Javascript RUM New Relic ?',

'use_newrelic_desc' => 'Si positionné à <b>Oui</b>, New Relic ajoutera le <a href="https://docs.newrelic.com/docs/browser/new-relic-browser/page-load-timing-resources/instrumentation-browser-monitoring" rel="external">Javascript Real User Monitoring</a> à toutes vos pages web.',

'newrelic_app_name' => 'Nom de l\'application New Relic',

'newrelic_app_name_desc' => 'Modifier le nom de l\'application qui apparaît dans le tableau de bord New Relic pour cette installation d\'ExpressionEngine.',

/**
 * Content & Design
 */

'new_posts_clear_caches' => 'Réinitialiser les caches pour tout nouvel article ?',

'new_posts_clear_caches_desc' => 'Si positionné à <b>Oui</b>, tous les caches seront réinitialisés à chaque fois que les auteurs publieront un nouvel article.',

'enable_sql_caching' => 'Mettre en cache les requêtes dynamiques de canal ?',

'enable_sql_caching_desc' => 'Si positionné à <b>Oui</b>, la vitesse de chargement des pages dynamiques de canal sera améliorée. Ne <b>pas</b> utiliser si vous utilisez les fonctionnalités "Articles futurs" ou "Articles expirés".',

'categories_section' => 'Catégories',

'auto_assign_cat_parents' => 'Affectation automatique des catégories parentes ?',

'auto_assign_cat_parents_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine assignera automatiquement la catégorie parente lors de la sélection d\'une catégorie enfant.',

'channel_manager' => 'Gestion des Canaux',

'image_resizing' => 'Redimensionnement d\'image',

'image_resize_protocol' => 'Protocole',

'image_resize_protocol_desc' => 'Vérifiez la compatibilité serveur avec votre hébergeur.',

'gd' => 'GD',

'gd2' => 'GD 2',

'netpbm' => 'NetPBM',

'imagemagick' => 'ImageMagick',

'image_library_path' => 'Chemin du convertisseur d\'image',

'image_library_path_desc' => 'Chemin serveur complet pour le <mark>programme image</mark>.</em>
<em><b>Obligatoire</b> pour ImageMagick and NetPBM.',

'invalid_image_library_path' => 'Ce champ doit contenir un chemin valide vers une bibliothèque de convertion d\'images quand ImageMagick ou NetPBM est le protocole sélectionné.',

'thumbnail_suffix' => 'Suffixe des miniatures',

'thumbnail_suffix_desc' => 'Ce suffixe sera ajouté à toutes les miniatures générées automatiquement. <b>Exemple</b>: photo_mini.jpg',

'emoticons' => 'Émoticônes',

'enable_emoticons' => 'Afficher les émoticônes ?',

'enable_emoticons_desc' => 'Si positionné à <b>Oui</b>, les émoticônes basées sur du texte seront automatiquement converties en images.',

'emoticon_url' => '<abbr title="Unified Resource Locator">URL</abbr>',

'emoticon_url_desc' => '<abbr title="Unified Resource Locator">URL</abbr> du répertoire contenant vos <mark>émoticônes</mark>.',

/**
 * Comment Settings
 */

'all_comments' => 'Tous les commentaires',

'enable_comments' => 'Activer le module de commentaires ?',

'enable_comments_desc' => 'S\'il est sur <b>Activer</b>, les canaux pourront utiliser le module de commentaires.',

'options' => 'Options',

'comment_word_censoring' => 'Activer la censure de mots pour les commentaires ?',

'comment_word_censoring_desc' => 'S\'il est sur <b>Activer</b>, le module de commentaires utilisera les filtres de <a href="%s">censure de mots</a>.',

'comment_moderation_override' => 'Modérer après que les commentaires aient expiré ?',

'comment_moderation_override_desc' => 'Si positionné à <b>Oui</b>, les commentaires faits sur un article possédant des commentaires ayant expiré seront soumis comme Fermés et devront être revus par un modérateur.',

'comment_edit_time_limit' => 'Limite du temps d\'édition des commentaires (en secondes)',

'comment_edit_time_limit_desc' => 'Période de temps après la soumission pendant lequel un utilisateur peut modifier son propre commentaire. Mettre <b>0</b> pour aucune limite.',

/**
 * Template Settings
 */

'template_manager' => 'Gestion des Modèles',

'strict_urls' => 'Activer les <abbr title="Uniform Resource Location">URL</abbr> strictes ?',

'strict_urls_desc' => 'S\'il est sur <b>Activer</b>, ExpressioneEngine appliquera des règles plus strictes à la gestion des <abbr title="Uniform Resource Location">URL</abbr>.',

'site_404' => 'Page d\'en-têtes 404',

'site_404_desc' => 'Modèle à utiliser lorsqu\'un visiteur tente d\'accéder à une URL invalide.',

'save_tmpl_revisions' => 'Enregistrer les versions des modèles ?',

'save_tmpl_revisions_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine enregistrera jusqu\'à <b>5</b> versions des modèles dans la base de données.',

'max_tmpl_revisions' => 'Nombre maximum de versions à conserver ?',

'max_tmpl_revisions_desc' => 'Le nombre maximum de versions qui doivent être conservées pour CHAQUE modèle. Nous recommandons une valeur faible, au risque d\'avoir une base de données beaucoup plus grande qu\'à la normale.',

'save_tmpl_files' => 'Enregistrer les modèles sous forme de fichiers ?',

'save_tmpl_files_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine enregistrera les modèles sous forme de fichiers directement sur votre serveur.',

/**
 * Hit Tracking
 */

'enable_online_user_tracking' => 'Activer le suivi des utilisateurs en ligne ?',
'enable_online_user_tracking_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine suivra les utilisateurs en ligne.',

'enable_hit_tracking' => 'Activer le suivi des modèles ?',
'enable_hit_tracking_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine comptera le nombre de fois qu\'un modèle est affiché.',

'enable_entry_view_tracking' => 'Activer le suivi des vues d\'articles ?',
'enable_entry_view_tracking_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine comptera le nombre de fois qu\'un article de canal est affiché.',

'log_referrers' => 'Activer le suivi des référants ?',
'log_referrers_desc' => 'Si positionné à <b>Oui</b>, ExpressionEngine suivra tous les liens entrants.',

'max_referrers' => 'Nombre maximum de référants récent à enregistrer',

'dynamic_tracking_disabling' => 'Seuil de suspension du suivi',
'dynamic_tracking_disabling_desc' => 'TOUS les suivis seront suspendus lorsque le nombre de visiteurs en ligne dépassera cette valeur.</em> <em>Le suivi des utilisateurs en ligne doit être activé pour utiliser cette fonctionnalitée. <a href="%s" ref="external">En savoir plus</a>',

/**
 * Word Censoring
 */


'enable_censoring' => 'Activer la censure de mots ?',

'enable_censoring_desc' => 'S\'il est sur <b>Activer</b>, les mots listés seront automatiquement remplacé par les caractères de remplacement spécifiés.',

'censor_replacement' => 'Caractères de remplacement',

'censor_replacement_desc' => 'Si un mot utilisé est listé dans la liste de censure, il sera automatiquement remplacé par ces caractères.',

'censored_words' => 'Mots à censurer',

'censored_words_desc' => 'Un mot par ligne.',

/**
 * Member Settings
 */

'member_settings' => 'Paramètres de membres',

'allow_member_registration' => 'Autoriser l\'inscription de nouveaux membres ?',

'allow_member_registration_desc' => 'Si positionné à <b>Oui</b>, les utilisateurs pourront créer des comptes de membres.',

'req_mbr_activation' => 'Type d\'activation de compte',

'req_mbr_activation_desc' => 'La façon dont vous souhaitez que les utilisateurs activent leur compte.',

'req_mbr_activation_opt_none' => 'Pas d\'activation requise',

'req_mbr_activation_opt_email' => 'Envoyer automatiquement un email d\'activation',

'req_mbr_activation_opt_manual' => 'Activation manuelle par un administrateur',

'approved_member_notification' => 'Notifier les membres après leur activation ?',

'approved_member_notification_desc' => 'Si positionné à <b>Oui</b>, les membres recevront une notification par email une fois que leur inscription aura été approuvée.',

'declined_member_notification' => 'Notifier les membres après un refus ?',

'declined_member_notification_desc' => 'Si positionné à <b>Oui</b>, les membres recevront une notification par email une fois que leur inscription aura été refusée.',

'require_terms_of_service' => 'Acceptation obligatoire des conditions d\'utilisation ?',

'require_terms_of_service_desc' => 'Si positionné à <b>Oui</b>, les utilisateurs devront accepter les conditions d\'utilisation pendant l\'activation.',

'allow_member_localization' => 'Autoriser les membres à fixer leurs préférences de date et heure ?',

'allow_member_localization_desc' => 'Si positionné à <b>Oui</b>, Les membres pourront choisir leurs propres préférences de localisation pour leur compte.',

'default_member_group' => 'Groupe de membres par défaut',

'member_theme' => 'Thème de profil de membre',

'member_theme_desc' => 'Thème utilisé par défaut pour les profils de membre.',

'member_listing_settings' => 'Préférences de la liste de membres',

'memberlist_order_by' => 'Ordonner par',

'memberlist_order_by_desc' => 'Type d\'ordre pour la liste de membres.',

'memberlist_order_by_opt_entries' => 'Nombre d\'articles',

'memberlist_sort_order' => 'Trier par',

'memberlist_sort_order_desc' => 'Type de tri pour la liste de membres.',

'memberlist_sort_order_opt_asc' => 'Ordre croissant (A-Z/Plus ancien-Plus récent)',

'memberlist_sort_order_opt_desc' => 'Ordre décroissant (Z-A/Plus récent-Plus ancien)',

'memberlist_row_limit' => 'Nombre de résultats',

'memberlist_row_limit_desc' => 'Nombre de résultats retournés par page pour la liste de membres.',

'registration_notify_settings' => 'Paramètres de notification d\'inscription',

'new_member_notification' => 'Notifier les administrateurs des nouvelles inscriptions ?',

'new_member_notification_desc' => 'S\'il est sur <b>Activer</b>, les adresses email ci-dessous seront notifiées lors de chaque inscription.',

'mbr_notification_emails' => 'Destinataires des notifications',

'mbr_notification_emails_desc' => 'Séparer les emails multiples avec une virgule.',

 /**
+ * Menu Manager
+ */

'menu_sets' => 'Jeux de menu',
'menu_set' => 'Jeu de menu',
'edit_menu_set' => 'Modifier le jeu de menu',
'create_menu_set' => 'Créer un jeu de menu',
'menu_set_updated' => 'Jeu de menu mis à jour',
'menu_set_created' => 'Jeu de menu créé',
'menu_set_created_desc' => 'Le jeu de menu <b>%s</b> a été créé.',
'menu_set_updated_desc' => 'Le jeu de menu <b>%s</b> a été mis à jour.',
'menu_sets_removed' => 'Jeux de menu supprimés',
'menu_sets_removed_desc' => '%d jeux de menu ont été supprimés.',
'no_menu_items' => 'Aucun <b>élément de menu</b> trouvé.',
'create_menu_item' => 'Créer un élément de menu',
'set_name' => 'Nom',
'set_assigned' => 'Affecté',
'assigned_to' => 'affecté à',
'set_member_groups' => 'Groupe(s) de membres ?',
'set_member_groups_desc' => 'Choisir les groupes de membres auxquels appliquer ce menu.',
'menu_options' => 'Options de menu',
'menu_items' => 'Eléments de menu',
'menu_items_desc' => 'Gérer le contenu de ce jeu de menu', /** Manage this menu sets contents ?? **/
'menu_type' => 'Type',
'menu_single' => 'Lien simple',
'menu_dropdown' => 'Menu déroulant',
'submenu' => 'Sous-menu',
'submenu_desc' => 'Liens dans menu déroulant',
'menu_label' => 'Nom',
'menu_label_desc' => 'Etiquette de lien',
'menu_url' => '<abbr title="Uniform Resource Locator">URL</abbr>',
'menu_url_desc' => 'Lien <abbr title="Uniform Resource Locator">URL</abbr>',
'menu_addon' => 'Add-On',
'menu_addon_desc' => 'Navigation dans les Add-Ons installés',
'menu_no_addons' => 'Aucun <b>Add-On avec menus</b> trouvé.',
'edit_menu_item' => 'Modifier élément de menu',
'add_menu_item' => 'Ajouter élément de menu',

/**
 * Messages
 */

'messaging_settings' => 'Paramètres de messagerie',

'prv_msg_max_chars' => 'Nombre de caractères maxi',

'prv_msg_html_format' => 'Formatage',

"html_safe" => "Autoriser uniquement le HTML sûr",

"html_all" => "Tout le HTML (non recommandé)",

"html_none" => "Convertir le HTML",

'prv_msg_auto_links' => 'Convertir les <abbr title="Uniform Resource Location">URL</abbr> et les emails en liens ?',

'prv_msg_auto_links_desc' => 'Si positionné à <b>Oui</b>, tous les <abbr title="Uniform Resource Location">URL</abbr> et les emails seront automatiquement convertis en hyperliens.',

'attachment_settings' => 'Paramètres des pièces jointes',

'prv_msg_upload_url' => 'Répertoire de téléchargement',

'prv_msg_upload_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre répertoire <mark>pièces jointes</mark>.',

'prv_msg_upload_path' => 'Chemin de téléchargement',

'prv_msg_upload_path_desc' => 'Chemin serveur complet de votre répertoire <mark>pièces jointes</mark>.',

'prv_msg_max_attachments' => 'Nombre maximum de pièces jointes',

'prv_msg_attach_maxsize' => 'Taille de fichier maximale (<abbr title="kiloctet">ko</abbr>)',

'prv_msg_attach_maxsize_desc' => 'Taille maximale autorisée par pièce jointe dans les messages personnels.',

'prv_msg_attach_total' => 'Taille maximale totale (<abbr title="megaoctet">mo</abbr>)',

'prv_msg_attach_total_desc' => 'Taille maximale totale autorisée (somme des pièces jointes) pour chaque membre.',

/**
 * Avatars
 */

'avatar_settings' => 'Paramétrage des avatars',

'enable_avatars' => 'Autoriser les avatars ?',

'enable_avatars_desc' => 'Si positionné à <b>Oui</b>, les membres pourront utiliser les avatars (images figuratives) dans les commentaires et les forums.',

'allow_avatar_uploads' => 'Autoriser le téléchargement des avatars ?',

'allow_avatar_uploads_desc' => 'Si positionné à <b>Oui</b>, les membres pourront télécharger leurs propres avatars (images figuratives).',

'avatar_url' => 'Répertoire des avatars',

'avatar_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre répertoire <mark>avatars</mark>.',

'avatar_path' => 'Chemin serveur du répertoire avatars',

'avatar_path_desc' => 'Chemin serveur complet de votre répertoire <mark>avatars</mark>.',

'avatar_file_restrictions' => 'Restrictions des fichiers avatars',

'avatar_max_width' => 'Largeur maximale (<abbr title="pixels">px</abbr>)',

'avatar_max_height' => 'Hauteur maximale (<abbr title="pixels">px</abbr>)',

'avatar_max_kb' => 'Taille maximale du fichier (<abbr title="kiloctets">ko</abbr>)',

/**
 * CAPTCHA
 */

'captcha_settings' => 'Paramétrage CAPTCHA',

'captcha_settings_title' => 'Paramètres <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>',

'require_captcha' => 'Exiger un <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>?',

'require_captcha_desc' => 'Si positionné à <b>Oui</b>, les visiteurs devront obligatoirement renseigner un champ <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> pour tous les formulaires accessibles sur votre site.',

'captcha_font' => 'Utiliser les polices TrueType ?',

'captcha_font_desc' => 'Si positionné à <b>Oui</b>, les champs <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> utiliseront une police TrueType pour l\'affichage.',

'captcha_rand' => 'Ajouter un nombre aléatoire ?',

'captcha_rand_desc' => 'Si positionné à <b>Oui</b>, les champs <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> généreront de manière aléatoire aussi bien des nombres que des lettres.',

'captcha_require_members' => 'Exiger un <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> pour les membres connectés ?',

'captcha_require_members_desc' => 'Si positionné à <b>Non</b>, les membres connectés n\'auront pas besoin de renseigner de champs <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>.',

'captcha_url' => 'Répertoire <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>',

'captcha_url_desc' => 'Emplacement <abbr title="Uniform Resource Location">URL</abbr> de votre répertoire <mark><abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr></mark>.',

'captcha_path' => 'Chemin serveur du répertoire <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>',

'captcha_path_desc' => 'Chemin serveur complet de votre répertoire <mark><abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr></mark>.',

/**
 * Security & Privacy
 */

'security_tip' => '<b>Truc</b> : la sécurité de votre site, c\'est important.',

'security_tip_desc' => 'Les paramètres marqués avec <span title="amélioration de la sécurité"></span> augmenteront et amélioreront la sécurité de votre site.',

'cp_session_type' => 'Type de session <abbr title="Panneau de contrôle">PC</abbr>',

'website_session_type' => 'Type de session site web',

'cs_session' => 'Cookies et ID de session',

'c_session' => 'Cookies uniquement',

's_session' => 'ID de session uniquement',

'cookie_settings' => 'Paramètres des Cookies',

'cookie_domain' => 'Domaine',

'cookie_domain_desc' => 'Utilisez <mark>.votredomaine.com</mark> pour des cookies couvrant tout le site',

'cookie_path' => 'Chemin',

'cookie_path_desc' => 'Chemin pour appliquer les cookies au domaine ci-dessus. (<a href="%s">plus d\'infos</a>)',

'cookie_prefix' => 'Préfixe',

'cookie_prefix_desc' => 'A utiliser uniquement si vous avez plusieurs installations ExpressionEngine.',

'cookie_httponly' => 'Envoyer uniquement les cookies en <abbr title="Hyper Text Transfer Protocol">HTTP</abbr> ?',

'cookie_httponly_desc' => 'Si positionné à <b>Oui</b>, les cookies ne seront <b>pas</b> accessibles par JavaScript.',

'cookie_secure' => 'Envoyer les cookies de manière sécurisée ?',

'cookie_secure_desc' => 'Si positionné à <b>Oui</b>, les cookies seront uniquement envoyés via une connexion <abbr title="Hyper Text Transfer Protocol with Secure Sockets Layer">HTTPS</abbr> sécurisée.</em><em>Votre site <b>devra</b> utiliser <abbr title="Secure Sockets Layer">SSL</abbr> partout pour que cela fonctionne.',

'member_security_settings' => 'Paramètres de sécurité de membres',

'allow_username_change' => 'Autoriser les membres à changer leur identifiant ?',

'allow_username_change_desc' => 'Si positionné à <b>Oui</b>, les membres pourront modifier leur identifiant.',

'un_min_len' => 'Longueur minimale de l\'identifiant',

'un_min_len_desc' => 'Nombre de caractères minimal exigé pour les identifiants des nouveaux membres.',

'allow_multi_logins' => 'Autoriser les sessions multiples à partir d\'un seul compte ?',

'allow_multi_logins_desc' => 'Si positionné à <b>Non</b>, les membres ne pourront pas se connecter à partir d\'un emplacement ou d\'un navigateur différent s\'ils ont déjà une session active.',

'require_ip_for_login' => 'Exiger l\'adresse <abbr title="Internet Protocol">IP</abbr> et l\'User Agent pour la connexion ?',

'require_ip_for_login_desc' => 'Si positionné à <b>Oui</b>, les membres ne pourront pas se connecter si leur navigateur n\'envoie pas l\'adresse <abbr title="Internet Protocol">IP</abbr> et un User Agent valide.',

'password_lockout' => 'Activer le blocage de mot de passe ?',

'password_lockout_desc' => 'S\'il est sur <b>Activer</b>, les membres ne pourront plus se connecter au système après des tentatives de connexion infructueuses.',

'password_lockout_interval' => 'Intervalle de temps pour le blocage',

'password_lockout_interval_desc' => 'Nombre de minutes de blocage d\'un membre ayant fait 4 tentatives infructeuses de connexion.',

'require_secure_passwords' => 'Exiger des mots de passe forts ?',

'require_secure_passwords_desc' => 'Si positionné à <b>Oui</b>, les membres devront choisir des mots de passe contenant au moins une lettre majuscule, une lettre minuscule et un caractère numérique.',

'pw_min_len' => 'Longueur minimale du mot de passe',

'pw_min_len_desc' => 'Nombre minimum de caractères exigé pour les mots de passe des nouveaux membres.',

'allow_dictionary_pw' => 'Autoriser des mots du dictionnaire comme mot de passe ?',

'allow_dictionary_pw_desc' => 'Si positionné à <b>Oui</b>, les membres seront autorisés à utiliser des mots communs du dictionnaire dans leur mot de passe. <mark>nécessite qu\'un fichier dictionnaire soit installé pour pouvoir être opérationnel.</mark>',

'name_of_dictionary_file' => 'Fichier dictionnaire',

'name_of_dictionary_file_desc' => 'Nom de votre fichier <mark>dictionnaire</mark> dans votre répertoire config.',

'form_security_settings' => 'Paramètres de soumission du contenu',

'deny_duplicate_data' => 'Refuser les données dupliquées ?',

'deny_duplicate_data_desc' => 'Si positionné à <b>Oui</b>, les formulaires ne tiendront pas compte des soumissions qui sont un doublon exact de données existantes.',

'require_ip_for_posting' => 'Exiger l\'adresse <abbr title="Internet Protocol">IP</abbr> et l\'User Agent pour publier ?',

'require_ip_for_posting_desc' => 'Si positionné à <b>Oui</b>, les membres ne pourront pas publier si leur navigateur n\'envoie pas l\'adresse <abbr title="Internet Protocol">IP</abbr> et un User Agent valide.',

'xss_clean_uploads' => 'Appliquer un filtrage <abbr title="Cross Site Scripting">XSS</abbr> ?',

'xss_clean_uploads_desc' => 'Si positionné à <b>Oui</b>, les formulaires appliqueront un filtrage <abbr title="Cross Site Scripting">XSS</abbr> lors des soumissions.',

'enable_rank_denial' => 'Activer le refus de rang aux liens soumis ?',

'enable_rank_denial_desc' => 'S\'il est sur <b>Activer</b>, tous les liens sortants sont envoyés vers une page de redirection. Cela évite que les spammeurs ne <a href="%s" rel="external">gagnent un meilleur classement de page</a>.',

/**
 * Access Throttling
 */

'enable_throttling' => 'Activer le filtrage ?',

'enable_throttling_desc' => 'S\'il est sur <b>Activer</b>, les membres ne pourront plus accéder au système s\'ils atteignent les caractéristiques de blocage.',

'banish_masked_ips' => 'Exiger une adresse <abbr title="Internet Protocol">IP</abbr> ?',

'banish_masked_ips_desc' => 'Si positionné à <b>Oui</b>, les membres ne pourront pas avoir d\'accès s\'ils n\'ont pas une adresse <abbr title="Internet Protocol">IP</abbr> valide.',

'throttling_limit_settings' => 'Paramètres du filtrage (limites)',

"max_page_loads" => "Nombre maximal de chargement de la page",

"max_page_loads_desc" => "Le nombre total de fois qu\'un utilisateur est autorisé à charger n\'importe laquelle de vos pages web (dans l\'intervalle de temps défini ci-dessous) avant d\'être bloqué.",

"time_interval" => "Intervalle de temps",

"time_interval_desc" => "Le nombre de secondes durant lequel le nombre de chargement de pages ci-dessus est autorisé.",

"lockout_time" => "Durée de blocage",

"lockout_time_desc" => "Le nombre de secondes durant lequel un utilisateur ne pourra accéder à votre site s\'il dépasse les limites.",

'banishment_type' => 'Action de blocage à exécuter',

'banish_404' => 'Page d\'en-têtes 404',

'banish_redirect' => 'Redirection d\'URL',

'banish_message' => 'Afficher un message personnalisé',

'banishment_url' => 'Adresse de redirection',

'banishment_url_desc' => 'Adresse <abbr title="Uniform Resource Location">URL</abbr> pour les membres bloqués.',

'banishment_message' => 'Message personnalisé',

/**
 * HTML Buttons
 */

'create_html_buttons_success' => 'Bouton <abbr title="Hyper-Text Markup Language">HTML</abbr> créé',
'create_html_buttons_success_desc' => 'Le bouton <abbr title="Hyper-Text Markup Language">HTML</abbr> <b>%s</b> a été créé.',

'create_html_buttons_error' => 'Impossible de créer le bouton <abbr title="Hyper-Text Markup Language">HTML</abbr>',
'create_html_buttons_error_desc' => 'Nous n\'avons pas pu créer ce bouton <abbr title="Hyper-Text Markup Language">HTML</abbr>, merci de vérifier et corriger les erreurs ci-dessous.',

'edit_html_buttons_success' => 'Bouton <abbr title="Hyper-Text Markup Language">HTML</abbr> mis à jour',
'edit_html_buttons_success_desc' => 'Le bouton <abbr title="Hyper-Text Markup Language">HTML</abbr> <b>%s</b> a été mis à jour.',

'edit_html_buttons_error' => 'Impossible de mettre à jour le bouton <abbr title="Hyper-Text Markup Language">HTML</abbr>',
'edit_html_buttons_error_desc' => 'Nous n\'avons pas pu mettre à jour ce bouton <abbr title="Hyper-Text Markup Language">HTML</abbr>, merci de vérifier et corriger les erreurs ci-dessous.',


''=>''
);

// EOF