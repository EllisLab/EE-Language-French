<?php

$lang = array(


/**
 *
 * @todo
 * This lang file is a rip of lang.admin.php.  I'm repurposing it for the tools section.  Many extra lang vars need to be removed.
 *
 */

'tools'  				=> 'Outils',
'tools_data' 			=> 'Données',
'tools_files' 			=> 'Gestionnaire de fichiers',
'tools_logs'			=> 'Journaux',
'tools_utilities'		=> 'Utilitaires',

'communicate'			=> 'Communiquer',

'config_editor'			=> 'Configurer gestionnaire de fichiers',
'php_info' 				=> 'Informations PHP',
'recount_stats' 		=> 'Recompter les statistiques',
'search_and_replace' 	=> 'Rechercher et remplacer',
'sql_manager' 			=> 'Gestionnaire SQL',
'data_pruning' 			=> 'Purge des données',
'clear_caching'	 		=> 'Effacer les données en cache',

'view_throttle_log' 	=> 'Voir le journal du filtrage',
'view_search_log' 		=> 'Voir le journal des termes de recherche',
'view_email_logs' 		=> 'Voir le journal de la console email',
'view_cp_log' 			=> 'Voir le journal du tableau de bord',

'import_utilities' 		=> 'Utilitaires d\'importation',
'translation_tool' 		=> 'Utilitaire de traduction',
'english'				=> 'Anglais',
'translation'			=> 'Traductions',

'hits' 					=> 'Visites',
'last_activity' 		=> 'Dernière activité',
'no_throttle_logs' 		=> 'Aucune IP n\'est actuellement filtrée par le système.',
'throttling_disabled'	=> 'Filtrage désactivé',
'blacklist_all_ips'		=> 'Mettre toutes les IPs sur liste noire',

'no_search_results'	 	=> 'Aucun résultat',

'search_results' 		=> 'Résultats de la recherche',
'site_search' 			=> 'Site',
'searched_in' 			=> 'Recherché dans',
'search_terms' 			=> 'Termes de la recherche',

'page_caching' 			=> 'Fichiers cache des pages (modèles)',
'tag_caching' 			=> 'Fichiers cache des balises',
'db_caching' 			=> 'Fichiers cache de la base de données',
'cached_relationships' 	=> 'Relations d\'articles en cache',
'all_caching' 			=> 'Tous les caches',

'sandr_instructions' 	=> 'Ces formulaires vous permettent de rechercher une expression particulière et de la remplacer par une autre',
'search_term' 			=> 'Rechercher ce texte',
'replace_term' 			=> 'Et le remplacer par ce texte',
'replace_where' 		=> 'Dans quel champ de la base de données voulez-vous que le remplacement ait lieu ?',
'search_replace_disclaimer'	=> 'Selon la syntaxe utilisée, cette fonction peut produire des résultats inattendus. Consultez le manuel et sauvegardez votre base de données.',
'advanced_users_only' 	=> 'Utilisateurs avancés uniquement',

'choose_translation_file' 	=> 'Choisissez un fichier à traduire',
'no_lang_file' 			=> 'Aucun fichier de langue fourni',
'invalid_path' 			=> 'Le chemin que vous avez saisi est invalide :',
'file_saved'			=> 'Le fichier de traduction a été sauvegardé dans system/expressionengine/translations/',


'import_from_mt' 		=> 'Utilitaire d\'importation depuis Movable Type',
'member_import' 		=> 'Utilitaire d\'importation de membre',

'united_states' 		=> 'Etats-Unis',
'european' 				=> 'Européen',

'upload_dir_choose'		=> 'Choisissez un dossier de téléchargement',
'file_upload_prefs' 	=> 'Préférences du téléchargement de fichier',
'create_new_upload_pref' => 'Créer une nouvelle destination de téléchargement',
'file_information'		=> 'Information du fichier',
'upload' 				=> 'Télécharger',
'upload_file' 			=> 'Télécharger le fichier',
'file_upload' 			=> 'Téléchargement de fichier',
'file_download' 		=> 'Télécharger',
'file_tools'			=> 'Outils pour les fichiers',
'choose_file'			=> 'Veuillez choisir un fichier à supprimer',
'confirm_del_file'		=> 'Etes-vous sûr de vouloir définitivement supprimer ce fichier ?',
'confirm_del_files'		=> 'Etes-vous sûr de vouloir définitivement supprimer ces fichiers ?',
'delete_success'		=> 'Suppression effectuée',
'delete_fail'			=> 'Un problème est survenu lors de la suppression d\'un ou plusieurs fichier(s). Veuillez vérifier la liste de fichiers ci-dessous.',
'no_file'				=> 'Aucun fichier sélectionné',
'file_name'				=> 'Nom du fichier',
'file_size'				=> 'Taille du fichier',
'file_size_unit'		=> 'KB',
'size'					=> 'Taille',
'kind'					=> 'Type',
'where'					=> 'Où',
'permissions'			=> 'Permissions',
'upload_success'		=> 'Téléchargement réussi',
'no_upload_dirs'		=> 'Vous n\'avez aucun répertoire de téléchargement défini',
'no_uploaded_files'		=> 'Vous n\'avez aucun fichier téléchargé dans ce répertoire',
'image_editor'			=> 'Editeur d\'image',
'download_selected'		=> 'Télécharger les fichiers sélectionnés',
'email_files'			=> 'Envoyer les fichiers sélectionnés par email',
'delete_selected_files'	=> 'Supprimer les fichiers sélectionnés',

'edit_modes'			=> 'Modes d\'édition',
'resize'				=> 'Redimensionner',
'crop'					=> 'Rogner',
'resize_width'			=> 'Largeur',
'resize_height'			=> 'Hauteur',
'crop_width'			=> 'Largeur',
'crop_height'			=> 'Hauteur',
'crop_x'				=> 'X',
'crop_y'				=> 'Y',
'rotate'				=> 'Rotation',
"rotate_90r"			=> "90&#176; à droite",
"rotate_90l"			=> "90&#176; à gauche",
"rotate_180"			=> "180&#176",
"rotate_flip_vert"		=> "Retourner verticalement",
"rotate_flip_hor"		=> "Retourner horizontalement",
"maintain_ratio"		=> "Conserver les proportions",
'width_needed'			=> 'Une largeur ou largeur/hauteur doivent être sélectionnées',

"crop_mode"				=> "Mode Rognage",
"resize_mode"			=> "Mode Redimensionnement",
"rotate_mode"			=> "Mode Rotation",
'apply_changes'			=> 'Appliquer les changements ?',
'exit_apply_changes'	=> 'Vous êtes sur le point de quitter le mode édition. Appliquer les changements (définitifs) ?',
'processing_image'		=> 'Traitement de l\'image',
'done'					=> 'Effectué',
'edit_image'            => 'Editer l\'image',

/* Config Editor */
'preference'			=> 'Préférence',
'setting'				=> 'Paramètre',
'preferences_updated'	=> 'Préférences mises à jour',
'advanced_users_only' 	=> 'Utilisateurs avancés uniquement',
'true'					=> 'Vrai',
'false'					=> 'Faux',


/* Translation */
'translation_dir_unwritable' => 
'Avertissement : Votre répertoire de traduction est inaccessible en écriture.',


'screen_name' =>
'Pseudo',


/*

'pconnect' =>
'Persistent Database Connection',

'cache_on' =>
'Enable SQL Query Caching',

'cachedir' =>
'Server Path to DB Cache Directory',

'db_debug' =>
'Enable Database Debugging',


// ---------------------------
//  Member List Config 
// ---------------------------

'xss_clean_uploads' =>
'Apply XSS Filtering to uploaded files?',

'memberlist_cfg' =>
'Member List Preferences',

'total_posts' =>
'Total Posts',

'total_comments' =>
'Total Comments',

'total_entries' =>
'Total Entries',

'memberlist_order_by' =>
'Member List - Sort By',

'memberlist_sort_order' =>
'Member List - Order',

'memberlist_desc' =>
'Descending',

'memberlist_asc' =>
'Ascending',

'memberlist_row_limit' =>
'Member List - Rows',

// ---------------------------
//  Explanatory Blurbs
// ---------------------------

'system_admin_blurb' =>
'Most of the administrative aspects of ExpressionEngine are managed from one of the following five areas:',

'channel_administration_blurb' =>
'This area enables you to manage your channels, preferences, and content-related sub-systems.',

'members_and_groups_blurb' =>
'This area allows you to manage members, member groups, and membership-related features.',

'specialty_templates_blurb' =>
'These templates are used for special purposes such as displaying error messages and sending email notifications.',

'system_preferences_blurb' =>
'This area enables you to manage your system configuration and global preferences.',

'utilities_blurb' =>
'This area contains ancillary utilities that help you manage ExpressionEngine.',

'search' =>
'Search',

'search_preferences' =>
'Search Preferences',

// ---------------------------
//  Extensions Stuff
// ---------------------------

'mailinglist_cfg' =>
'Mailing List Preferences',

'mailinglist_notify' =>
'Notify Admin(s) of new mailing list sign-ups',

'mailinglist_enabled' =>
'Mailing List is Enabled',

'mailinglist_notify_emails' =>
'Notification Emails',

'censor_replacement' =>
'Censoring Replacement Word',

'censor_replacement_info' =>
'If left blank censored words will be replaced with: #',

'censored_wildcards' =>
'Wild cards are allowed.  For example, the wildcard  test* would censor the words test, testing, tester, etc.',

'channel_relationships' =>
'Channel Relationships',

'webmaster_name' =>
'Webmaster or site name for auto-generated emails',

'search_log_cfg' =>
'Search Term Log Configuration',

'enable_search_log' =>
'Enable Search Term Logging',

'enable_search_log_exp' =>
'When enabled, the search terms your visitors submit in your search form will be logged.',

'max_logged_searches' =>
'Maximum number of recent search terms to save',

'no_extensions_exist' =>
'No Extensions Exist',

'extensions_manager' =>
'Extensions Manager',

'available_extensions' =>
'Available Extensions',

'extension' =>
'Extension',

'manage_extension' =>
'Manage',

'disable_extension_conf' =>
'Disable Extension Confirmation',

'disable_extensions_conf' =>
'Disable Extensions Confirmation',

'enable_extension_conf' =>
'Enable Extension Confirmation',

'enable_extensions_conf' =>
'Enable Extensions Confirmation',

'toggle_extension_confirmation' =>
'Are you sure you wish to perform this action?',

'extension_disabled' =>
'Disabled',

'extension_enabled' =>
'Enabled',

'disable_extensions' =>
'Disable Extensions?',

'enable_extensions' =>
'Enable Extensions?',

'disable_extension' =>
'Disable?',

'enable_extension' =>
'Enable?',

'extension_name' =>
'Extension Name',

'settings' =>
'Settings',

'documentation' =>
'Documentation',

'status' =>
'Status',

'extension_settings' =>
'Extension Settings',

'settings_update' =>
'Settings Updated',

//----------------------------
// Admin Page
//----------------------------

'guest' =>
'Guest',

'wiki_search' =>
'Wiki',

'forum_search' =>
'Forum',

'screen_name' =>
'Screen Name',

'no_search_terms' =>
'No search terms have been logged',

'extensions_manager' =>
'Extensions Manager',

'throttling_cfg' =>
'Throttling Configuration',

'banish_masked_ips' =>
'Deny Access if No IP Address is Present',

'max_page_loads' =>
'Maximum Number of Page Loads',

'max_page_loads_exp' =>
'The total number of times a user is allowed to load any of your web pages (within the time interval below) before being locked out.',

'time_interval' =>
'Time Interval (in seconds)',

'time_interval_exp' =>
'The number of seconds during which the above number of page loads are allowed.',

'lockout_time' =>
'Lockout Time (in seconds)',

'lockout_time_exp' =>
'The length of time a user should be locked out of your site if they exceed the limits.',

'banishment_type' =>
'Action to Take',

'banishment_type_exp' =>
'The action that should take place if a user has exceeded the limits.',

'url_redirect' =>
'URL Redirect',

'404_page' =>
'Send 404 headers',

'show_message' =>
'Show custom message',

'banishment_url' =>
'URL for Redirect',

'banishment_url_exp' =>
'If you chose the URL Redirect option.',

'banishment_message' =>
'Custom Message',

'banishment_message_exp' =>
'If you chose the Custom Message option.',

'email_charset' =>
'Email Character Encoding',

'honor_entry_dst' =>
'Honor the Daylight Saving Time setting associated with each channel entry?',

'allow_member_localization' =>
'Allow members to set their own localization preferences?',

'allow_member_loc_notes' =>
'If set to \'no\' all dates and times will be localized to the master site default.',

'publish_tab_behavior' =>
'Publish Tab Behavior',

'click' =>
'Click',

'hover' =>
'Hover',

'enable_throttling' =>
'Enable Throttling',

'enable_throttling_explanation' =>
'This feature generates a 404 header and message if a request to your site is made in which the template group does not exist in the URL. It is intended primarily to keep search engine crawlers from repeatedly requesting nonexistent pages.',

'max_caches' =>
'Maximum Number of Cachable URIs',

'max_caches_explanation' =>
'If you cache your pages or your database, this preference limits the total number of cache instances in order to prevent your cache files from taking up too much disk space.  150 is a good number for a small site.  If you have a large site and disk space is not an issue you can set it higher (over 300).  We have an internal limit of 1000 regardless of your preference.',

'standby_recount' =>
'Recounting... please stand by...',

'theme_folder_url' =>
'URL to your \'themes\' folder',

'exp_forums' =>
'Forum Stats',

'exp_forum_topics' =>
'Forum Topics',

'email_module_captchas' =>
'Enable CAPTCHAs for Tell-a-Friend and Contact emails',

'must_submit_number' =>
'You must submit the number of days to filter the pruning routine by.',

'must_submit_group' =>
'You must choose at least one member group',

'must_submit_channel' =>
'You must choose at least one channel',

'no_members_matched' =>
'There are no member accounts matching the criteria you submitted',

'good_member_pruning' =>
'%x member accounts have been deleted',

'prune_member_confirm_msg' =>
'Are you sure you want to delete the member accounts you specified?',

'member_pruning' =>
'Membership Account Pruning',

'mbr_prune_x_days' =>
'Delete membership accounts that are more than X days old',

'mbr_prune_never_posted' =>
'Only delete users who have never posted entries, comments, or forum posts',

'mbr_prune_zero_note' =>
'If you submit a zero, member accounts from any date will be deleted.',

'mbr_prune_groups' =>
'Delete only within the selected groups',

'channel_entry_pruning' =>
'Channel Entry Pruning',

'channel_prune_x_days' =>
'Delete channel entries that are more than X days old',

'channel_prune_never_posted' =>
'Only delete entries that have no comments',

'prune_entry_confirm_msg' =>
'Are you sure you want to delete the channel entries you specified?',

'no_entries_matched' =>
'There are no channel entries matching the criteria you submitted',

'good_entry_pruning' =>
'%x channel entries have been deleted',

'select_prune_channels' =>
'Delete only within the selected channels',

'comment_pruning' =>
'Comment Pruning',

'comment_prune_x_days' =>
'Delete comments that are more than X days old',

'no_comments_matched' =>
'There are no comments matching the criteria you submitted',

'good_commennt_pruning' =>
'%x comments have been deleted',

'prune_comment_confirm_msg' =>
'Are you sure you want to delete the comments you specified?',

'topic_pruning' =>
'Forum Topic Pruning',

'good_topic_pruning' =>
'%x forum topics have been deleted',

'topic_prune_x_days' =>
'Delete forum topics that are more than X days old',

'must_submit_forums' =>
'You must choose at least one forum',

'prune_if_no_posts' =>
'Delete topics only if they do not contain any posts',

'select_prune_forums' =>
'Delete only within the selected forums',

'must_select_one' =>
'You must select at least one',

'prune_topic_confirm_msg' =>
'Are you sure you want to delete the forum topics you specified?',

'no_topics_matched' =>
'There are no topics matching the criteria you submitted',

'select_prune_topics' =>
'Delete only within the selected forums',

'pm_cfg' =>
'Private Messaging Preferences',

'prv_msg_storage_limit' =>
'Maximum Number of Private Messages a user can store',

'prv_msg_send_limit' =>
'Maximum Number of Private Messages a user can send per day',

'prv_msg_max_chars' =>
'Maximum Number of characters to allow in Private Messages',

'prv_msg_max_attachments' =>
'Maximum Number of Attachments per Private Message',

'prv_msg_upload_path' => 
'Server Path for Attachment Upload Directory',

'prv_msg_attach_maxsize' =>
'Maximum Size of Attachment for a Private Message (in Kilobytes)',

'prv_msg_attach_total' =>
'Maximum Amount of All Attachments (in Megabytes)',

'prv_msg_html_format' =>
'HTML Formatting in Private Messages',

'prv_msg_auto_links'	=>
'Auto-convert URLs and email addresses into links?',

'html_safe' =>
'Allow only safe HTML',

'html_all' =>
'Allow all HTML (not recommended)',

'html_none' =>
'Convert HTML into character entities',

'html_header' =>
'HTML Header',

'page_header' =>
'Page Header',

'page_subheader' =>
'Page Sub-header',

'html_footer' =>
'HTML Footer',

'breadcrumb_trail' =>
'Breadcrumb Trail',

'breadcrumb_current_page' =>
'Breadcrumb Current Page',

'signature_form' =>
'Signature Edit Page',

'edit_avatar' =>
'Avatar Edit Page',

'avatar_folder_list' =>
'Pre-installed Avatar Folder List',

'browse_avatars' =>
'Browse Avatars Page',

'image_cfg' =>
'Image Resizing Preferences',

'output_cfg' =>
'Output and Debugging Preferences',

'not_writable_path' =>
'The path you submitted is not writeable.  Please make sure the file permissions are set to 777.',

'empty_profile_trigger' =>
'You must specify a Profile Triggering Word',

'profile_trigger' =>
'Profile Triggering Word',

'profile_trigger_notes' =>
'When this word is encountered your URL it will display your member profile area.  The word you choose can not be the name of an existing template group',

'signature_cfg' =>
'Signature Preferences',

'notification_cfg' =>
'Notification Preferences',

'photo_cfg' =>
'Member Photo Preferences',

'enable_photos' =>
'Enable Member Photos',

'photo_url' =>
'URL to Photos Folder',

'photo_path' =>
'Server Path to Photo Folder',

'photo_max_width' =>
'Photo Maximum Width',

'photo_max_height' =>
'Photo Maximum Height',

'photo_max_kb' =>
'Photo Maximum Size (in Kilobytes)',

'must_be_path' =>
'Note: Must be a full server path, NOT a URL.  Folder permissions must be set to 777.',

'allow_signatures' =>
'Allow Users to have Signatures?',

'sig_maxlength' =>
'Maximum number of characters per signature',

'sig_allow_img_hotlink' =>
'Allow image hot linking in signatures?',

'sig_allow_img_upload' =>
'Allow users to upload an image in their signature?',

'sig_img_url' =>
'URL to Signature Image Upload Folder',

'sig_img_path' =>
'Server path to Signature Image Upload Folder',

'sig_img_max_width' =>
'Maximum Width of Signature Image',

'sig_img_max_height' =>
'Maximum Height of Signature Image',

'sig_img_max_kb' =>
'Maximum Size (in Kilobytes) of Signature Image',

'avatar_cfg' =>
'Avatar Preferences',

'enable_avatars' =>
'Enable Avatars',

'allow_avatar_uploads' =>
'Allow members to upload their own avatars?',

'avatar_url' =>
'URL to Avatar Folder',

'avatar_path' =>
'Server Path to Avatar Folder',

'avatar_max_width' =>
'Avatar Maximum Width',

'avatar_max_height' =>
'Avatar Maximum Height',

'avatar_max_kb' =>
'Avatar Maximum Size (in Kilobytes)',

'ignore_noncritical' =>
'Ignore non-essential data (recommended)',

'archive_destination' =>
'Destination',

'archive_type' =>
'File Type',

'mac_no_zip' =>
'(best choice for Mac users)',

'max_referrers' =>
'Maximum number of recent referrers to save',

'new_version_check' =>
'New Version Auto Check',

'profile_buttons' =>
'Path to Member Images',

'profile_buttons_exp' =>
'This is the path to the directory containing the images used in the member profile pages.',

'remap_pm_urls' =>
'Remap pMachine Pro URLs to EE',

'remap_pm_urls_desc' =>
'If you have migrated to EE from pM Pro, enabling this option will redirect visitors who come to your site using old pM URLs to the correct page in EE.',

'remap_pm_dest' =>
'Destination of Remapped URLs',

'remap_pm_dest_exp' =>
'If pM Pro URLs are encountered, where should they be directed to?  Use a full URL and include the template_group/template:  http://www.yoursite.com/index.php/template_group/template/',

'captcha_rand' =>
'Add Random Number to Captcha Word',

'plugin_no_curl_support' =>
'Your server does not support the Curl library, which is required in order to use this feature.',

'plugins' =>
'Plugins',

'plugin_by_date' =>
'By Date',

'plugin_by_letter' =>
'By Letter',

'plugin_requires' =>
'Requires',

'plugin_zlib_missing' =>
'Zlib library is missing.  Please consult user guide.',

'plugin_can_not_fetch' =>
'Unable to remotely retrieve the plugin',

'plugin_folder_not_writable' =>
'Your plugin folder is not writable.  File permissions must be set to 777 before this action can be performed.',

'plugin_problem_creating_file' =>
'Unable to create a local version of your plugin',

'plugin_version_check' =>
'Check Version',

'plugin_installed' =>
'Plugin(s) Installed',

'plugin_latest' =>
'Latest Plugins',

'plugin_installation' =>
'Plugin Installation',

'plugin_install' =>
'Install',

'plugin_install_status' =>
'Plugin Installation Status',

'plugin_install_success' =>
'The plugin was successfully installed.',

'plugin_install_other' =>
'The plugin file has been stored in your plugins directory.',

'plugin_error_uncompress' =>
'Unable to uncompress ZIP file. The ZIP file has been stored in your plugins directory.',

'plugin_error_no_zlib' =>
'Your server does not have zlib support, so decompression is not possible.  The ZIP file is stored in your plugins directory.',

'plugin_delete_confirm' =>
'Plugin Removal Confirmation',

'plugin_single_confirm' =>
'Are you sure you want to delete this plugin?',

'plugin_multiple_confirm' =>
'Are you sure you want to delete these plugins?',

'plugin_remove' =>
'Remove',

'plugin_removal' =>
'Plugin Removal',

'plugin_removal_status' =>
'Plugin Removal Status',

'plugin_removal_success' =>
'The following plugin was successfully removed:',

'plugin_removal_error' =>
'An error occurred removing the following plugin:',

'auto_assign_cat_parents' =>
'Auto-Assign Category Parents',

'auto_assign_cat_parents_exp' =>
'If set to \'yes\', when new entries are submitted, the parent category will be automatically assigned whenever you choose a child category',

'use_category_name' =>
'Use Category URL Titles In Links?',

'use_category_name_exp' =>
'This preference determines whether the category ID number or the category URL Title is used in category-related links.',

'reserved_category_word' =>
'Category URL Indicator',

'reserved_category_word_exp' =>
'If you set the above preference to \'yes\' you must choose a reserved word.  This word will be used in the URL to indicate to the channel display engine that you are showing a category.  Note: whatever word you chose CAN NOT be the name of a template group or a template.',

'enable_sql_caching' =>
'Cache Dynamic Channel Queries?',

'enable_sql_caching_exp' =>
'This feature will improve the speed at which your channel pages load by caching queries that are normally executed dynamically.  Enable it only if you do not use the \'future entries\' or \'expiring entries\' feature.',

'email_debug' =>
'Enable Email Debugging?',

'email_debug_exp' =>
'Server messages will be displayed when sending email.',

'none' =>
'None',

'channel_nomenclature' =>
'Section Designation Word',

'channel_nomenclature_exp' =>
'By default, ExpressionEngine uses the word \'channel\' throughout the control panel.  You can change it if you prefer something more generic, like \'section\'.  Please note: This word will not change in your templates, only in the control panel.',

'site_404' =>
'404 Page',

'site_404_exp' =>
'Determines which template should be displayed when someone tries to access an invalid URL. Note: If you choose \'None\', your default channel will be shown when an invalid URL is requested.',

'db_cfg' =>
'Database Settings',

'cp_image_path' =>
'URL to Control Panel Image Directory',

'auto_close' =>
'Auto',

'manual_close' =>
'Manual',

'new_posts_clear_caches' =>
'Clear all caches when new entries are posted?',

'require_ip_for_posting' =>
'Require IP Address and User Agent when receiving comments?',

'redirect_submitted_links' =>
'Apply Rank Denial to User-submitted Links?',

'redirect_submitted_links_explanation' =>
'This option rewrites links submitted by users so they first point to an intermediary redirect page. This helps deter comment spamming by preventing search engines from cataloging links.',

'captcha_cfg' =>
'Captcha Preferences',

'captcha_require_members' =>
'Require captcha with logged-in members?',

'channel_cfg' =>
'Global Channel Preferences',

'auto_convert_high_ascii' =>
'Automatically Convert High ASCII Text to Entities',

'cp_cfg' => 
'Control Panel Settings',

'query_cfg' =>
'Query Caching Preferences',

'debug_cfg' =>
'Debugging Preferences',

'license_number' =>
'License Number',

'word_separator' =>
'Word Separator for URL Titles',

'dash' =>
'Dash',

'underscore' =>
'Underscore',

'site_name' =>
'Name of your site',

'system_admin' =>
'System Administration',

'content_admin' =>
'Content Administration',

'system_preferences' => 
'System Preferences',

'is_system_on' => 
'Is system on?',

'is_system_on_explanation' =>
'If system is off, only Super Admins will be able to see your site(s)',

'system_off_msg' => 
'System Off Message',

'template_updated' =>
'Template Updated',

'preference_information' =>
'Preference Guide',

'preference' => 
'Preference',

'value' => 
'Value',

'general_cfg' => 
'General Configuration',

'allow_member_registration' =>
'Allow New Member Registrations?',

'req_mbr_activation' =>
'Require Member Account Activation?',

'no_activation' =>
'No activation required',

'email_activation' =>
'Self-activation via email',

'manual_activation' =>
'Manual activation by an administrator',

'require_terms_of_service' =>
'Require Terms of Service',

'member_theme' =>
'Default Member Profile Theme',

'member_theme_exp' =>
'Determines which theme to use for the various membership pages: login, registration, profile, etc.',

'require_terms_of_service_exp' =>
'Setting this to yes forces users to check the \'accept terms\' checkbox during registration',

'use_membership_captcha' =>
'Enable Membership Captcha',

'new_member_notification' =>
'Notify administrators of new registrations?',

'mbr_notification_emails' =>
'Email Address for Notification',

'separate_emails' =>
'Separate multiple emails with a comma',

'email_console_timelock' =>
'Email Console Timelock',

'email_console_timelock_exp' =>
'The number of minutes that must lapse before a member is allowed to send another email.  Note:  This only applies to the Email Console in the member profile pages.',

'log_email_console_msgs' =>
'Log Email Console Messages',

'log_email_console_msgs_exp' =>
'This preference lets you log all messages sent via the Email Console in the member profile pages.',

'default_member_group' =>
'Default Member Group Assigned to New Members',

'group_assignment_defaults_to_two' =>
'If you require account activation, members will be set to this once they are activated',

'user_session_type' =>
'User Session Type',

'admin_session_type' =>
'Control Panel Session Type',

'security_cfg' =>
'Security and Session Preferences',

'un_min_len' =>
'Minimum Username Length',

'pw_min_len' =>
'Minimum Password Length',

'cs_session' =>
'Cookies and session ID',

'c_session' =>
'Cookies only',

's_session' =>
'Session ID only',

'secure_forms' =>
'Process form data in Secure Mode?',

'deny_duplicate_data' =>
'Deny Duplicate Data?',

'deny_duplicate_data_explanation' =>
'This option prevents data submitted by users (comments, etc.) from being received if it is an exact duplicate of data that already exists.',

'secure_forms_explanation' =>
'Prevents automated spamming and multiple accidental submissions.',

'allow_multi_logins' =>
'Allow multiple log-ins from a single account?',

'allow_multi_logins_explanation' =>
'Determines whether more than one person can simultaneously access the system using the same user account.  Note: If your Session Type above is set to \'Cookies Only\' this feature will not work.',

'password_lockout' =>
'Enable Password Lockout?',

'password_lockout_explanation' =>
'If enabled, only four invalid login attempts are permitted within the time interval specified below. This is a deterrent to hackers using collision attacks to guess poorly chosen passwords.',

'password_lockout_interval' =>
'Time Interval for Lockout',

'login_interval_explanation' =>
'Number is set in minutes.  You are allowed to use decimal fractions.  Example:  1.5',

'require_ip_for_login' =>
'Require IP Address and User Agent for Login?',

'require_ip_explanation' =>
'Prevents users from logging in unless their browser generates IP Address and User Agent data. This keeps hackers from logging in using direct socket connections.',

'allow_username_change' =>
'Allow members to change their username?',

'require_secure_passwords' =>
'Require Secure Passwords?',

'secure_passwords_explanation' =>
'Users will have to choose passwords containing at least one uppercase, one lowercase, and one numeric character',

'allow_dictionary_pw' =>
'Allow Dictionary Words as Passwords?',

'real_word_explanation' =>
'This setting prevents users from using words and names contained in a dictionary as their password',

'dictionary_note'	=>
'Note: In order to use this feature you must install the dictionary file.  Consult the manual.',

'name_of_dictionary_file' =>
'Name of Dictionary File',

'dictionary_explanation' =>
'The name of the file containing your word list',

'image_path' =>
'Path to Images Directory',

'cp_url' =>
'URL to your Control Panel index page',

'with_trailing_slash' =>
'With trailing slash',

'site_url' =>
'URL to the root directory of your site',

'url_explanation' =>
'This is the directory containing your site index file.',

'doc_url' =>
'URL to Documentation Directory',

'doc_url_explanation' =>
'Root directory only, with trailing slash',

'site_index' =>
'Name of your site's index page',

'system_path' =>
'Absolute path to your %x folder',

'force_query_string' =>
'Force URL query strings',

'safe_mode' =>
'Is your server running PHP in Safe Mode?',

'force_query_string_explanation' =>
'This is a safety mechanism for servers that do not support the PATH_INFO variable.',

'debug' =>
'Debug Preference',

'debug_explanation' =>
'Enables the display of error messages, which are valuable during site development',

'show_queries' =>
'Display SQL Queries?',

'show_queries_explanation' =>
'If enabled, Super Admins will see all SQL queries displayed at the bottom of the browser window.  Useful for debugging.',

'debug_zero' =>
'0: No PHP/SQL error messages generated',

'debug_one' =>
'1: PHP/SQL error messages shown only to Super Admins',

'debug_two' =>
'2: PHP/SQL error messages shown to anyone - NOT SECURE',

'deft_lang' =>
'Default Language',

'xml_lang' =>
'Default XML Language',

'used_in_meta_tags' =>
'Used in control panel meta tags',

'gzip_output' =>
'Enable GZIP Output?',

'gzip_output_explanation' =>
'When enabled, your site will be shown in a compressed format for faster page loading',

'send_headers' =>
'Generate HTTP Page Headers?',

'redirect_method' => 
'Redirection Method',

'location_method' => 
'Location (faster)',

'refresh_method' => 
'Refresh (Windows servers)',

'localization_cfg' => 
'Localization Settings',

'time_format' => 
'Default Time Formatting',

'server_timezone' => 
'Server Time Zone',

'server_offset' => 
'Server Offset (in minutes)',

'server_offset_explain' => 
'Use the minus sign to subtract minutes: -15',

'daylight_savings' =>
'Daylight Saving Time',

'cookie_cfg' => 
'Cookie Settings',

'cookie_domain' => 
'Cookie Domain',

'cookie_domain_explanation' => 
'Use .yourdomain.com for  site-wide cookies',

'cookie_prefix' => 
'Cookie Prefix',

'cookie_prefix_explain' => 
'Use only if you are running multiple installations of this program',

'cookie_path' => 
'Cookie Path',

'cookie_path_explain' => 
'Use only if you require a specific server path for cookies',

'enable_image_resizing' =>
'Enable Image Resizing',

'enable_image_resizing_exp' =>
'When enabled, you will be able to create thumbnails when you upload images for placement in your channel entries.',

'image_resize_protocol' =>
'Image Resizing Protocol',

'image_resize_protocol_exp' =>
'Please check with your hosting provider to verify that your server supports the chosen protocol.',

'image_library_path' =>
'Image Converter Path',

'image_library_path_exp' =>
'If you chose either ImageMagick or NetPBM you must specify the server path to the program.',

'gd' =>
'GD',

'gd2' =>
'GD 2',

'netpbm' =>
'NetPBM',

'imagemagick' =>
'ImageMagik',

'thumbnail_prefix' =>
'Image Thumbnail Suffix',

'thumbnail_prefix_exp' =>
'This suffix will be added to all auto-generated thumbnails.  Example: photo_thumb.jpg',

'captcha_path' =>
'Server Path to Captcha Folder',

'captcha_url' =>
'Full URL to Captcha Folder',

'captcha_font' =>
'Use TrueType Font for Captcha?',

'email_cfg' => 
'Email Configuration',

'mail_protocol' => 
'Email Protocol',

'smtp_server' => 
'SMTP Server Address',

'smtp_username' => 
'SMTP Username',

'smtp_password' => 
'SMTP Password',

'only_if_smpte_chosen' => 
'Use this only if you chose SMTP',

'email_batchmode' =>
'Use Batch Mode?',

'batchmode_explanation' =>
'Batch Mode breaks up large mailings into smaller groups, which get sent at intervals.  Recommended if your site is hosted on a shared-hosting account.',

'email_batch_size' =>
'Number of Emails Per Batch',

'batch_size_explanation' =>
'For average servers, 300 is a safe number',

'webmaster_email' => 
'Return email address for auto-generated emails',

'return_email_explanation' => 
'If you leave this blank, many email servers will consider your email spam',

'php_mail' => 
'PHP Mail',

'sendmail' => 
'Sendmail',

'smtp' => 
'SMTP',

'plain_text' =>
'Plain Text',

'html' =>
'HTML',

'mail_format' =>
'Default Mail Format',

'word_wrap' =>
'Enable Word-wrapping by Default?',

'cp_theme' => 
'Default Control Panel Theme',

'template_cfg' =>
'Template Preferences',

'censoring_cfg' =>
'Word Censoring',

'enable_censoring' =>
'Enable Word Censoring?',

'censored_words' =>
'Censored Words',

'censored_explanation' =>
'Place each word on a separate line.',

'emoticon_cfg' =>
'Emoticon Preferences',

'enable_emoticons' =>
'Display Smileys?',

'emoticon_path' =>
'URL to the directory containing your smileys ',

'referrer_cfg' =>
'Referrer Preferences',

'log_referrers' =>
'Enable Referrer Tracking?',

'channel_administration' => 
'Channel Administration',

'channel_management' => 
'Channel Management',

'field_management' => 
'Custom Channel Fields',

'file_upload_prefs' => 
'File Upload Preferences',

'categories' => 
'Category Management',

'default_ping_servers' => 
'Default Ping Servers',

'status_management' => 
'Custom Entry Statuses',

'edit_preferences' => 
'Edit Preferences',

'preferences_updated' => 
'Preferences Updated',

'edit_groups' => 
'Edit Groups',

'members_and_groups' => 
'Members and Groups',

'utilities' => 
'Utilities',

'unsupported_compression' =>
'Your PHP installation does not support this compression method',

'backup_info' =>
'Use this form to backup your database.',

'save_as_file' =>
'Save backup to your desktop',

'view_in_browser' =>
'View backup in your browser',

'file_type' =>
'File Type: ',

'plain_text' =>
'Plain text',

'zip' =>
'Zip',

'gzip' =>
'Gzip',

'preference_updated' =>
'Preference Updated',

'click_to_recount' =>
'Click to recount rows %x through %y',

'items_remaining' =>
'Records remaining:',

'return_to_recount_overview' =>
'Return to Main Recount Page',

'recounting' =>
'Recounting',

'total_records' =>
'Total Records:',

'title' =>
'Title',

'translation_dir_unwritable' => 
'Warning: Your translation directory is not writable.',

'please_set_permissions' => 
'Please set the permissions to 666 or 777 on the following directory:',

'core_language_files' => 
'Core language files:',

'module_language_files' => 
'Module language files:',

'default_html_buttons' => 
'Default HTML Buttons',

'import_from_mt' =>
'Movable Type Import Utility',

'member_import' =>
'Member Import Utility',

'specialty_templates' =>
'Specialty Templates',

'plugin_manager' =>
'Plugin Manager',

'installed_plugins' =>
'Installed Plugins',

'no_plugins_exist' =>
'There are no plugins currently installed',

'view_info' =>
'View Info',

'plugin_information' =>
'Plugin Information',

'pi_name' =>
'Name',

'pi_author' =>
'Author',

'pi_version' =>
'Version',

'pi_author_url' =>
'Author URL',

'pi_description' =>
'Description',

'pi_usage' =>
'Usage',

'no_additional_info' =>
'No additional information is available for this plugin',

'update_and_return' =>
'Update and Finished',

'template_debugging' =>
'Display Template Debugging?',

'template_debugging_explanation' =>
'If enabled, Super Admins will see a list of details concerning the processing of the page.  Useful for debugging.',

'no_throttle_logs' =>
'No IPs are currently being throttled by the system.',

'throttling_disabled' =>
'Throttling Disabled',

'locked_out' =>
'Locked Out',

'blacklist_all_ips' =>
'Blacklist All IPs',

'sites_tab_behavior' =>
'Sites Tab Behavior',

'is_site_on' => 
'Is site on?',

'is_site_on_explanation' =>
'If site is off, only Super Admins will be able to see this site',

'theme_folder_path' =>
'Theme Folder Path',


'multiple_sites_enabled' =>
'Enable Multiple Site Manager',
*/


''=>''
);

/* End of file lang.tools.php */
/* Location: ./system/expressionengine/language/english/lang.tools.php */