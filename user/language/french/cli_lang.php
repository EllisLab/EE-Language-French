<?php

$lang = array(
    // All generic CLI lang entries
    'cli_error_no_command_given'                   => 'Aucune commande n\'a été passée. Essayer `php eecli.php list` pour consulter la liste complète de commandes.',
    'cli_error_command_not_found'                  => 'Commande non trouvée. Essayer `php eecli.php list` pour consulter la liste complète de commandes.',
    'cli_error_ee_not_installed'                   => 'EE n\'est pour l’instant pas encore installé.',
    'cli_error_is_required'                        => 'Le champ est requis.',
    'cli_error_is_required_field'                  => 'Le champ est requis. Champ: ',
    'cli_option_help'                              => 'Consulter le menu d\'aide pour la commande passée',
    'cli_error_the_specified_addon_does_not_exist' => 'L\'add-on précisé n\'existe pas',
    'cli_error_cli_disabled'                       => 'Le CLI d\'Expressionengine est actuellement désactivé. Pour utiliser le CLI, vous devez l\'activer dans les réglages.',
	'cli_no_addons'                                => 'Il n\'y a pas de add-ons disponibles',
    'cli_table_no_results'                         => 'Aucun résultat n\'a été trouvé.',

    // Lang entries for command cache:clear
    'command_cache_clear_description'              => 'Efface tous les caches d\'ExpressionEngine',
    'command_cache_clear_summary'                  => '',
    'command_cache_clear_option_type'              => 'Type de cache à effacer (par défaut: tous les caches)',
    'command_cache_clear_cache_does_not_exist'     => 'Le cache n\'existe pas. Utiliser —l\'aide pour visualiser les caches disponibles.',
    'command_cache_clear_caches_cleared'           => 'les caches sont effacés!',
	
	// Lang entries for command addons:install
     'command_addons_install_description'            => 'Installe l\'add-on et tous ses composants',
     'command_addons_install_summary'                => '',
     'command_addons_install_begin'                  => 'L\'installation de l\'add-on est prête à démarrer',
     'command_addons_install_ask_addon'              => 'Quel add-on souhaitez-vous installer?',
     'command_addons_install_in_progress'            => 'Exécution %s de l\'installation de l\'add-on',
     'command_addons_install_complete'               => '%s installé(s) avec succès',
     'command_addons_install_option_addon'           => 'Nom abrégé de l\'Add-on',

     // Lang entries for command addons:uninstall
     'command_addons_uninstall_description'            => 'Désinstalle l\'add-on et tous ses composants',
     'command_addons_uninstall_summary'                => '',
     'command_addons_uninstall_begin'                  => 'La désinstallation de l\'Add-on est prête à démarrer',
     'command_addons_uninstall_ask_addon'              => 'Quel add-on souhaitez-vous désinstaller?',
     'command_addons_uninstall_in_progress'            => 'Exécution %s de la désinstallation de l\'add-on',
     'command_addons_uninstall_complete'               => '%s désinstallé(s) avec succès',
     'command_addons_uninstall_option_addon'           => 'Nom abrégé de l\'Add-on',

     // Lang entries for command addons:update
     'command_addons_update_description'            => 'Met à jour l\'add-on à la version la plus récente',
     'command_addons_update_summary'                => '',
     'command_addons_update_begin'                  => 'La mise à jour de l\'add-on est prête à démarrer.',
     'command_addons_update_ask_addon'              => 'Quel add-on souhaitez-vous mettre à jour?',
     'command_addons_update_in_progress'            => 'Exécution %s de la mise à jour de l\'add-on...',
     'command_addons_update_complete'               => '%s mis à jour avec succès.',
     'command_addons_update_all_complete'           => 'Tous les add-ons ont été mis à jour avec succès.',
     'command_addons_update_option_addon'           => 'Nom abrégé de l\'add-on',
     'command_addons_update_option_all'             => 'Actualise tous les add-ons qui ont des mises à jour disponibles',

     // Lang entries for command addons:list
     'command_addons_list_description'                => 'Lister les add-ons',
     'command_addons_list_summary'                    => '',
     'command_addons_list'                            => 'Les add-ons suivants %s',
     'command_addons_option_available'                => 'sont disponibles',
     'command_addons_option_installed'                => 'sont installés',
     'command_addons_option_uninstalled'              => 'ne sont pas installés',
     'command_addons_option_update'                   => 'peuvent être mis à jour',
     'command_addons_list_table_header_name'          => 'Nom',
     'command_addons_list_table_header_shortname'     => 'Nom abrégé',
     'command_addons_list_table_header_version'       => 'Version',
     'command_addons_list_table_header_installed'     => 'Installé(s)',
	

    // Lang entries for command list
    'command_list_description'                  => 'Liste toutes les commandes disponibles',
    'command_list_summary'                      => 'Cela établit une liste complète de toutes les commandes',
    'command_list_all_available_commands'       => 'Toutes les commandes disponibles:',
    'command_list_run_with_help'                => 'Passer une commande avec — de l\'aide pour être plus amplement informé(e)',
    'command_list_command_header'               => 'Commande',
    'command_list_description_header'           => 'Description',

    // Lang entries for command make:addon
    'command_make_addon_description'            => 'Crée un nouvel add-on',
    'command_make_addon_summary'                => 'Cela génère de façon interactive un add-on EE directement dans votre répertoire utilisateur',
    'command_make_addon_lets_build_addon'       => 'Construisons votre add-on!',
    'command_make_addon_description_question'   => 'description?',
    'command_make_addon_version_question'       => 'version?',
    'command_make_addon_author_question'        => 'auteur?',
    'command_make_addon_author_url_question'    => 'URL d\'auteur?',
    'command_make_addon_have_settings_question' => 'ont des réglages?',
    'command_make_addon_lets_build'             => 'Construisons!',
    'command_make_addon_created_successfully'   => 'Votre add-on a été créé avec succès',
    'command_make_addon_what_hooks_to_use'      => 'Quel crochet souhaitez-vous utiliser? (Consulter: https://docs.expressionengine.com/latest/development/extensions.html)',
    'command_make_addon_ext_hooks'              => 'Crochets de l\'extension:',
    'command_make_addon_ft_compatibility'       => 'Compatibilité de types de fichiers?',
    'command_make_addon_what_type_of_addon'     => 'Quel type d\'add-on souhaitez-vous créer?',
    'command_make_addon_select_proper_addon'    => 'Merci de sélectionner un type d\'add-on approprié.',
    'command_make_addon_what_is_name'           => 'Quel est le nom de votre add-on?',
    'command_make_addon_does_your'              => 'Réalise votre ',
    'command_make_addon_addon_name_required'    => 'Le nom du add-on est requis.',
    // make:addon options
    'command_make_addon_option_extension'       => 'Créer une extension',
    'command_make_addon_option_plugin'          => 'Créer un plugin',
    'command_make_addon_option_fieldtype'       => 'Créer un type de champ',
    'command_make_addon_option_module'          => 'Créer un module',
    'command_make_addon_option_typography'      => 'Devrait utiliser une typographie de plugin',
    'command_make_addon_option_has'             => 'L\'add-on a des réglages (oui/non)',
    'command_make_addon_option_version'         => 'Version de l\'add-on',
    'command_make_addon_option_description'     => 'Description de l\'add-on',
    'command_make_addon_option_author'          => 'Auteur de l\'add-on',
    'command_make_addon_option_author_url'      => 'URL de l\'auteur de l\'add-on',
    'command_make_addon_option_services'        => 'Services à créer. Option multi-pass .',
    'command_make_addon_option_models'          => 'Modèles à créer. Option multi-pass.',
    'command_make_addon_option_commands'        => 'Commandes à créer. Option multi-pass.',
    'command_make_addon_option_consents'        => 'Consentements. Option multi-pass.',
    'command_make_addon_option_cookies'         => 'Cookies à créer avec une colonne séparant le nom et sa valeur (c\'est-à-dire name:value). Option multi-pass.',
    'command_make_addon_option_hooks'           => 'Crochets utilisés. Option multi-pass.',
    'command_make_addon_option_compatibility_mode' => 'Genère un add-on qui est compatible avec les versions d\'ExpressionEngine inférieures à 7.2.0 et inférieures à 6.4.0',

    // Lang entries for command make:command
    'command_make_command_description'          => 'Crée une nouvelle commande CLI pour un add-on',
    'command_make_command_summary'              => 'Cela génère interactivement une commande CLI pour un add-on tiers existant',
    'command_make_command_lets_build_command'   => 'Construisons votre commande!',
    'command_make_command_ask_description'      => 'Description de la commande?',
    'command_make_command_ask_signature'        => 'Signature de la commande? (c\'est-à-dire make:magic)',
    'command_make_command_lets_build'           => 'Construisons!',
    'command_make_command_created_successfully' => 'Votre commande a été créée avec succès!',
    'command_make_command_ask_command_name'     => 'Nom de la commande?',
    'command_make_command_ask_addon'            => 'A quel add-on voulez-vous rajouter cela?',
    // make:command options
    'command_make_command_option_addon'         => 'Le dossier de l\'add-on de tierce partie auquel vous voulez rajouter la commande.',
    'command_make_command_option_description'   => 'Description de la commande',
    'command_make_command_option_signature'     => 'Signature pour la commande (c\'est-à-dire make:magic)',

    // Lang entries for command make:migration
    'command_make_migration_description'                        => 'Crée une nouvelle migration',
    'command_make_migration_summary'                            => 'Cela génère une nouvelle migration pour le core ou pour l\'add-on',
    'command_make_migration_what_is_migration_name'             => 'Quel est le nom de votre migration?',
    'command_make_migration_no_name_specified'                  => 'Aucun nom de migration n\'a été proposé. Pour vous aider avec cette commande utiliser —aide',
    'command_make_migration_using_migration_name'               => 'Utilisation en cours du nom de migration:      ',
    'command_make_migration_table_creating_migration'           => 'Création en cours de la migration: ',
    'command_make_migration_table_migration_action'             => '  Action de migration : ',
    'command_make_migration_table_type_name'                    => '  Nom type :        ',
    'command_make_migration_table_class_name'                   => '  Nom classe:       ',
    'command_make_migration_table_file_location'                => '  Localisation de fichier:    ',
    'command_make_migration_table_template_name'                => '  Nom modèle:    ',
    'command_make_migration_successfully_wrote_file'            => 'Le nouveau fichier de migration a été écrit avec succès.',
    'command_make_migration_what_table_is_migration_for'        => 'A quelle table se rattache la migration?',
    'command_make_migration_ask_migration_action'               => 'Quelle action de migration?',
    'command_make_migration_ask_migration_category'             => 'Quelle est la catégorie de migration',
    'command_make_migration_where_to_generate_migration'        => 'Où devrions-nous générer cette migration? (ExpressionEngine ou au sein d\'un add-on existant)',

    // make:migration options
    'command_make_migration_option_name'                        => 'Nom de la migration',
    'command_make_migration_option_table'                       => 'Nom de la table',
    'command_make_migration_option_status'                      => 'Nom du statut',
    'command_make_migration_option_location'                    => 'Localisation de migration. Les options actuelles sont, soit ExpressionEngine, soit un nom court, sinon un add-on déjà installé. ExpressionEngine sera choisi par défaut.',
    'command_make_migration_option_create'                      => 'Préciser que la commande est une commande de création',
    'command_make_migration_option_update'                      => 'Préciser que la commande est une commande de mise à jour',

    // make:migration Error message
    'command_make_migration_missing_required_template_variable' => 'Il manque les variables requises pour la parsage du modèle de migration: ',

    // Lang entries for command make:prolet
    'command_make_prolet_description'                  => 'Crée un nouveau prolet pour cet add-on',
    'command_make_prolet_summary'                      => 'Cela génère interactivement un nouveau prolet EE pour un add-on tiers existant',
    'command_make_prolet_lets_build_prolet'            => 'Construisons un nouveau prolet!',
    'command_make_prolet_ask_prolet_name'              => 'Quel est le nom du prolet?',
    'command_make_prolet_ask_addon'                    => 'A quel add-on sera rajouté ce prolet?',
    'command_make_prolet_ask_description'              => 'Quelle est la description du prolet?',
    'command_make_prolet_building_prolet'              => 'Prolet en construction.',
    'command_make_prolet_created_successfully'         => 'Prolet créé avec succès!',
    'command_make_prolet_ask_widget_name'              => 'Quel est le nom du widget?',
    'command_make_prolet_generating_widget'            => 'Génération du widget en cours.',
    'command_make_prolet_widget_created_successfully'  => 'Widget créé avec succès!',
    'command_make_prolet_error_addon_must_have_module' => 'Pour générer un prolet, l\'add-on doit posséder un fichier de module.',
    'command_make_prolet_error_addon_must_have_icon'   => 'Pour générer un prolet, l\' add-on doit posséder une icône. Pour générer une icône par défaut, utiliser --générer-l\'icône.',

    // make:prolet options
    'command_make_prolet_option_addon'                 => 'Dossier pour les add-ons de tierces parties auquel vous souhaitez rajouter ce prolet.',
    'command_make_prolet_option_description'           => 'Description du prolet',
    'command_make_prolet_option_has_widget'            => 'Créer un widget pour l\'add-on après avoir généré le prolet (optionnel)',
    'command_make_prolet_option_widget_name'           => 'Nom du widget',
    'command_make_prolet_option_generate_icon'         => 'Génère une icône de fichier de add-on par défaut au moment de la création du prolet',
	
	// Lang entries for command backup:database
     'command_backup_database_description'                  => 'Sauvegardez la base de données',
     'command_backup_database_summary'                      => 'Sauvegardez la base de données d\'ExpressionEngine',
     'command_backup_database_beginning_database_backup'    => 'Début de la sauvegarde de la base de données.',
     'command_backup_database_backing_up_database'          => 'Sauvegarde en cours... de la base de données.',
     'command_backup_database_failed_with_error'            => 'La sauvegarde de la base de données a échoué avec le message d\'erreur suivant:',
     'command_backup_database_completed_successfully'       => 'La sauvegarde de la base de données a été complétée avec succès.',
     'command_backup_database_backup_path'                  => 'Chemin de sauvegarde: %s',

     // backup:database options
     'command_backup_database_option_absolute_path'   => 'Le chemin absolu du répertoire où la sauvegarde de la base de données sera installée',
     'command_backup_database_option_relative_path'   => 'Chemin de sauvegarde de la base de données, relatif au dossier de cache',
     'command_backup_database_option_file_name'       => 'Nom du fichier sql à sauvegarder',
     'command_backup_database_option_speed'           => 'Vitesse de sauvegarde de la base de données (entre 1-10). Régler une vitesse plus basse accorde plus de temps entre les commandes de la base de données. La vitesse par défaut est 5.',
    
    // Lang entries for command make:action
     'command_make_action_description'                  => 'Crée une nouvelle action pour un add-on',
     'command_make_action_summary'                      => 'Cela génère interactivement une action EE pour un add-on de tierce-partie déjà existant',
     'command_make_action_lets_build_action'            => 'Construisons une nouvelle action!',
     'command_make_action_ask_action_name'              => 'Quel est le nom de l\'action?',
     'command_make_action_ask_addon'                    => 'A quel add-on cette action se rapporte-t-elle?',
     'command_make_action_building_action'              => 'Construction de l\'action en cours…',
     'command_make_action_created_successfully'         => 'Action créée avec succès!',
     'command_make_action_error_addon_must_have_module' => 'Pour générer une action, cet add-on doit posséder un fichier de module.',
     'command_make_action_installing_action'             => 'Installation de l\'action en cours…',
     'command_make_action_installed_action'              => 'Action installée!',
     'command_make_action_addon_must_be_installed_to_install_action' => 'Impossible d\'accomplir cette action. L\'Add-on doit préalablement être installé. La migration de l\'action sera conduite quand l\'add-on sera installé de manière effective.',

     // make:action options
     'command_make_action_option_addon'                 => 'Dossier d\'un add-on de tierce partie auquel vous souhaitez ajouter cette action',
     'command_make_action_option_install' =>'Installez cette action après l\'avoir créée. Cela met en oeuvre toutes les migrations en cours pour l\'add-on défini. L\'Add-on doit être préalablement installé.',

     // Lang entries for command make:template-tag
     'command_make_template_tag_description'         => 'Crée une nouvelle balise pour cet add-on',
     'command_make_template_tag_summary'             => 'Ceci génère interactivement une balise EE pour un add-on de tierce-partie existant',
     'command_make_template_tag_lets_build_tag'      =>  'Construisons une nouvelle balise!',
     'command_make_template_tag_ask_tag_name'        => 'Quel est le nom de la balise?',
     'command_make_template_tag_ask_addon'           => 'A quel add-on la balise est-elle ajoutée?',
     'command_make_template_tag_building_tag'        => 'Construction de la balise en cours…',
     'command_make_template_tag_created_successfully'=> 'Balise créée avec succès!',
     'command_make_template_tag_error_addon_must_have_module' => 'Pour générer une balise, cet add-on doit posséder un fichier ce module.',
     

     // make:template-tag options
     'command_make_template_tag_option_addon'            => 'Dossier pour un add-on de tierce-partie auquel vous souhaitez ajouter la balise.',
     
      // Lang entries for command make:sidebar
     'command_make_sidebar_description'                  => 'Crée une barre latérale de tableau de bord pour un add-on',
     'command_make_sidebar_summary'                      => 'Cela génère une barre latérale pour un add-on de tierce-partie existant',
     'command_make_sidebar_lets_build_sidebar'               => 'Construisons une barre latérale pour un add-on!',
     'command_make_sidebar_ask_addon'                    => 'A quel add-on se rapporte la barre latérale?',
     'command_make_sidebar_building_sidebar'                 => 'Construction de la barre latérale en cours.',
     'command_make_sidebar_created_successfully'         => 'La barre latérale a été créée avec succès!',

     // make:sidebar options
     'command_make_sidebar_option_addon'                 => 'Dossier pour un add-on de tierce partie auquel vous voulez ajouter cette barre latérale.',

     // Lang entries for command make:extension-hook
     'command_make_extension_hook_description'                  => 'Implémente un crochet d\'extension EE au sein d\'un add-on',
     'command_make_extension_hook_summary'                      => 'Cela implémente interactivement un crochet d\'extension EE au sein d\'un add-on de tierce-partie déjà existant',
     'command_make_extension_hook_lets_build_extension_hook'    => 'Implémentons un crochet d\'extension!',
     'command_make_extension_hook_ask_extension_hook_name' => 'Quels crochets souhaitez-vous utiliser? (En savoir plus: https://docs.expressionengine.com/latest/development/extensions.html)',
     'command_make_extension_hook_ask_addon'                    => 'A quel add-on est rajouté le crochet d\'extension?',
     'command_make_extension_hook_building_extension_hook'      => 'Construction du crochet d\'extension en cours…',
     'command_make_extension_hook_created_successfully'         => 'Crochet d\'extension créé avec succès!',
     'command_make_extension_hook_installing_hook'             => 'Installation en cours du crochet d\'extension…',
     'command_make_extension_hook_installed_hook'              => 'Crochet d\'extension installé!',
     'command_make_extension_hook_addon_must_be_installed_to_install_hook' => 'Impossible d\'installer le crochet d\'extension. L\'add-on doit être préalablement installé. La migration du crochet d\'extension sera accomplie quand l\'add-on sera installé de façon effective.',

     // make:extension-hook options
     'command_make_extension_hook_option_addon'                 => 'Dossier de l\'add-on de tierce-partie auquel vous souhaitez rajouter l\'extension.',
      'command_make_extension_hook_option_install'               => 'Installez ce crochet d\'extension après l\'avoir créé. Cela accomplit toutes les migrations en cours pour l\'add-on défini. L\'Add-doit être préalablement installé.',

     // Lang entries for command make:fieldtype
     'command_make_fieldtype_description'                  => 'Génère un type de champ pour un add-on de tierce partie donné',
     'command_make_fieldtype_summary'                      => 'Cela génère interactivement un type de champ au sein d\'un add-on de tierce partie existant',
     'command_make_fieldtype_lets_build_fieldtype'    => 'Implémentons un type de champ!',
     'command_make_fieldtype_ask_fieldtype_name'      => 'Quel est le nom du type de champ?',
     'command_make_fieldtype_ask_addon'                    => 'A quel add-on ce type de champ est-il ajouté?',
     'command_make_fieldtype_building_fieldtype'      => 'Construction du type de champ en cours…',
     'command_make_fieldtype_created_successfully'         => 'Type de champ créé avec succès!',

     // make:fieldtype options
     'command_make_fieldtype_option_addon'                 => 'Dossier de l\'add-on de tierce partie auquel vous voulez ajouter ce type de champ.',
	
	  // Lang entries for command config:config
     'command_config_config_description'             => 'Met à jour les valeurs de config dans le fichier config.php',
     'command_config_config_summary'                 => 'Donne la capacité de mettre à jour les valeurs de config',
     'command_config_config_ask_config_variable'     => 'Quel élément de configuration souhaitez-vous définir ??',
     'command_config_config_ask_config_value'        => 'Quelle valeur souhaitez-vous définir?',
     'command_config_config_updating_config_variable' => 'Mise à jour en cours de l\'élément de config...',
     'command_config_config_config_value_saved'      => 'Elément de config sauvegardé.',

     // config:config options
     'command_config_config_option_config_variable'  => 'L\'élément de config à modifier',
     'command_config_config_option_value'            => 'La valeur à attribuer à l\'élément de config',

     // Lang entries for command config:env
     'command_config_env_description'             => 'Met à jour les valeurs env dans le fichier .env.php',
     'command_config_env_summary'                 => 'Donne la capacité de mettre à jour les valeurs env',
     'command_config_env_ask_config_variable'     => 'Quel élément env souhaitez-vous définir?',
     'command_config_env_ask_config_value'        => 'Quelle valeur souhaitez-vous lui attribuer?',
     'command_config_env_updating_config_variable' => 'Mise à jour en cours de l\'élément env...',
     'command_config_env_config_value_saved'      => 'Elément Env sauvegardé.',

     // config:env options
     'command_config_env_option_config_variable'  => 'L\'élément env à définir/modifier',
     'command_config_env_option_value'            => 'La valeur à attribuer à l\élément env',

     // Lang entries for command make:cp-route
     'command_make_cp_route_description'                  => 'Génère une route de tableau de bord pour un add-on de tierce partie donné',
     'command_make_cp_route_summary'                      => 'Cela génère interactivement une route de tableau de bord au sein d\'un add-on de tierce-partie existant',
     'command_make_cp_route_lets_build_mcp_route'         => 'Créons une route de tableau de bord!',
     'command_make_cp_route_ask_route_name'               => 'Quel est le nom de la route?',
     'command_make_cp_route_ask_addon'                    => 'A quel add-on est ajoutée la route?',
     'command_make_cp_route_building_mcp_route'      => 'Construction de la route de tableau de bord en cours…',
     'command_make_cp_route_created_successfully'         => 'La route de tableau de bord a été créée avec succès!',

     // make:cp-route options
     'command_make_cp_route_option_addon'                 => 'Dossier de l\'add-on de tierce partie auquel vous voulez ajouter la route Mcp.',

    // Lang entries for command make:jump
    'command_make_jump_description'                      => 'Génère un fichier de saute-menu pour un add-on de tierce-partie donné.',
    'command_make_jump_summary'                          => 'Ceci génère interactivement un fichier de saute-menu au sein d\'un add-on de tierce-partie existant.',
    'command_make_cp_jumps'                              => 'Créons un fichier de saute-menu!',
    'command_make_cp_jumps_ask_addon'                    => 'A quel add-on souhaitez-vous ajouter le fichier Jumps?',
    'command_make_cp_jumps_building_jumps'               => 'Construction du fichier Jumps de l\'add-on en cours…',
    'command_make_cp_jumps_created_successfully'         => 'Le fichier Jumps a été créé avec succès! Merci de noter: vous devrez peut-être effacer le cache de votre navigateur avant de pouvoir visualiser les nouveaux items du saute-menu',

    // make:jump options
    'command_make_jump_file_addon'                 	  => 'Dossier de l\'add-on de tierce-partie auquel vous souhaitez ajouter le fichier de saute-menu.',

    // Lang entries for command make:widget
    'command_make_widget_description'                 => 'Génère des widgets pour les add-ons existants.',
    'command_make_widget_lets_build_widget'           => 'Construisons un widget!',
    'command_make_widget_ask_widget_name'             => 'Quel est le nom du widget?',
    'command_make_widget_ask_addon'                   => 'A quel add-on se rapporte-t-il?',
    'command_make_widget_building_widget'             => 'Construction du widget.',
    'command_make_widget_created_successfully'        => 'Le widget a été créé avec succès!',
    'command_make_widget_option_addon'                => 'Nom de l\'add-on',

    // Lang entries for command make:model
    'command_make_model_description'                            => 'Crée un nouveau modèle pour un add-on',
    'command_make_model_summary'                                => 'Cela génère interactivement un modèle EE pour un add-on tiers existant',
    'command_make_model_lets_build_model'                       => 'Construisons votre modèle!',
    'command_make_model_lets_build'                             => 'Construisons!',
    'command_make_model_created_successfully'                   => 'Votre modèle a été créé avec succès!',
    'command_make_model_ask_model_name'                         => 'Nom du modèle?',
    'command_make_model_ask_addon'                              => 'A quel add-on souhaitez-vous rajouter cela?',
    // make:model options
    'command_make_model_option_addon' => 'Dossier de l\'add-on tiers auquel vous souhaitez rajouter ce modèle.',

    // Lang entries for command migrate
    'command_migrate_description'                  => 'Met en route des migrations spécifiques (toutes, core, ou add-ons)',
    'command_migrate_summary'                      => 'Fait une boucle à travers le dossier de migrations core et le dossier de migrations des add-ons et exécute toutes les migrations qui n\'avaient pas été précédemment menées. En opérant toutes les migrations, les migrations core seront réalisées en premier puis les migrations des add-ons. Quand les migrations sont mises en oeuvre pour plusieurs add-ons, toutes les migrations pour chaque add-on seront regroupées et mises en service dans le même temps',
    'command_migrate_all_migrations_ran'           => 'Toutes les migrations disponibles ont déjà été effectuées.',
    'command_migrate_what_is_location'             => 'Quelle est la localisation de votre migration?',
    'command_migrate_error_please_select_location' => 'Merci de sélectionner la localisation de la migration en utilisant --core, —everything, --addons, ou --addon=addon_name.',
    'command_migrate_migrated'                     => 'Ont été migrées: ',
    'command_migrate_all_migrations_completed'     => 'Toutes les migrations ont été effectuées avec succès!',
    // migrate options
    'command_migrate_option_steps'                 => 'Préciser le nombre de migrations à mettre en oeuvre',
    'command_migrate_option_everything'            => 'Exécuter toutes les migrations. Core opère en premier, puis toutes les migrations de add-ons, l\'une après l\'autre.',
    'command_migrate_option_all'                   => 'Effectuer toutes les migrations. Alias pour —tout',
    'command_migrate_option_core'                  => 'Effectue seulement les migrations core. Ceci exclut toutes les migrations d\'add-ons.',
    'command_migrate_option_addon'                 => 'Effectue la migration seulement pour l\'add-on précisé.',
    'command_migrate_option_addons'                => 'Effectue la migration seulement pour les add-ons précisés.',

    // Lang entries for command migrate:addon
    'command_migrate_addon_description'               => 'Effectue les migrations d\'add-ons',
    'command_migrate_addon_summary'                   => 'Effectue une boucle à travers les dossiers d\'add-ons et exécute toutes les migrations qui n\'ont pas été précédemment effectuées. Si vous mettez en action tous les add-ons, les migrations seront groupées par add-on et mis en route ensemble',
    'command_migrate_addon_all_migrations_ran'        => 'Toutes les migrations disponibles d\'add-ons ont déjà été effectuées.',
    'command_migrate_addon_ask_location_of_migration' => 'Quelle est la localisation de votre migration?',
    'command_migrate_addon_error_no_location_set'     => 'Merci de sélectionner une localisation de migration en utilisant —everything, ou --addon=addon_name.',
    'command_migrate_addon_migrated'                  => 'Migrée(e-s): ',
    'command_migrate_addon_all_migrations_completed'  => 'Toutes les migrations ont été complétées avec succès',
    // migrate:addon options
    'command_migrate_addon_option_steps'              => 'Préciser le nombre de migrations à effectuer',
    'command_migrate_addon_option_everything'         => 'Effectuer les migrations d\'add-ons',
    'command_migrate_addon_option_all'                => 'Effectuer les migrations d\'add-ons. Alias pour —tout',
    'command_migrate_addon_option_addon'              => 'Effectuer la migration seulement pour l\'add-on spécifié.',

    // Lang entries for command migrate:all
    'command_migrate_all_description'              => 'Exécute les migrations core, puis les migrations de chaque add-on',
    'command_migrate_all_summary'                  => 'Effectue une boucle à travers le dossier de migrations core et le dossier de migrations d\'add-ons et exécute toutes les migrations qui n\'ont pas été effectuées précédemment. Les migrations core seront exécutées en premier, puis les migrations d\'add-ons. Quand les migrations sont exécutées pour plusieurs add-ons, toutes les migrations de chaque add-on sont regroupées et mises en route ensemble',
    'command_migrate_all_migrated'                 => 'Migrée(s): ',
    'command_migrate_all_all_migrations_completed' => 'Toutes les migrations ont été complétées avec succès!',
    // migrate:all options
    'command_migrate_all_option_steps'             => 'Préciser le nombre de migrations à opérer',

    // Lang entries for command migrate:core
    'command_migrate_core_description'                          => 'Met en oeuvre les migrations core',
    'command_migrate_core_summary'                              => 'Effectue une boucle à travers le dossier de migrations core et exécute toutes les migrations qui n\'ont pas été précédemment effectuées',
    'command_migrate_core_migrated'                             => 'Migrée(s): ',
    'command_migrate_core_all_migrations_completed'             => 'Toutes les migrations ont été complétées avec succès!',
    // migrate:core options
    'command_migrate_core_option_steps'                         => 'Précisez le nombre de migrations à opérer',

    // Lang entries for command migrate:reset
    'command_migrate_reset_description'                         => 'Faire marche arrière sur toutes les migrations',
    'command_migrate_reset_summary'                             => 'Fait marche arrière sur toutes les migrations immédiatement',
    'command_migrate_reset_no_migrations_to_rollback'           => 'Pas de migrations pour lesquelles faire marche arrière.',
    'command_migrate_reset_rolling_back'                        => 'Marche arrière pour: ',
    'command_migrate_reset_all_migrations_rolled_back'          => 'Toutes les migrations ont été ré-initialisées avec succès!',

    // Lang entries for command migrate:rollback
    'command_migrate_rollback_description'                      => 'Fait marche arrière au groupe de migrations le plus récent',
    'command_migrate_rollback_summary'                          => 'Récupère le groupe de migrations le plus récent et lui fait faire marche arrière',
    'command_migrate_rollback_no_migrations_to_rollback'        => 'Pas de migrations avec lesquelles faire marche arrière.',
    'command_migrate_rollback_rolling_back'                     => 'En marche arrière: ',
    'command_migrate_rollback_migrations_executed_successfully' => ' migrations exécutées avec succès.',
    'command_migrate_rollback_all_migrations_rolled_back'       => 'Toutes les migrations dans le groupe ont fait marche arrière avec succès!',
    // migrate:rollback options
    'command_migrate_rollback_option_steps'                     => 'Préciser le nombre de migrations à faire marche arrière ',

    // Lang entries for command update
    'command_update_description'                                => 'Met à jour ExpressionEngine',
    'command_update_summary'                                    => 'Exécute toutes les mises à jour disponibles d\'ExpressionEngine',
    'command_update_is_already_up_to_date'                      => ' est déjà à la page!',
    'command_update_new_version_available'                      => 'Il n\'y a pas de nouvelle version disponible d\'ExpressionEngine:',
    'command_update_confirm_upgrade'                            => 'Souhaitez-vous mettre à jour?',
    'command_update_not_run'                                    => 'Mise à jour non effectuée.',
    'command_update_success'                                    => 'Succès! Créez quelque chose d\'époustouflant!',
    'command_update_indicated_upgrade_all_addons'               => 'Vous avez indiqué vouloir mettre à jour tous les add-ons.',
    'command_update_confirm_addon_upgrade'                      => 'En êtes-vous sûr(e)? Cette action peut-être destructrice.',
    'command_update_addon_update_halted'                        => 'Mise à jour de l\'add-on interrompue',
    'command_update_getting_info_from_local_env'                => 'Obtenir de l\'info de mise à jour depuis votre environnement local',
    'command_update_getting_info_from_ee_com'                   => 'Obtenir de l\'info de mise à jour depuis ExpressionEngine.com',
    'command_update_updater_failed'                             => 'Echec de l\'Updater',
    'command_update_updating_to_version'                        => 'Mise à jour en cours à la nouvelle version',
    'command_update_failed_on_version'                          => 'Echec sur la version ',
    'command_update_error_updater_failed_missing_version'       => 'L\'Updater a échoué à cause d\'une version manquante. Merci de mettre à jour la version UpgradeMap: ',
    'command_update_missing_avatar_path_message'                => 'Votre processus de mise à jour échouera sans avoir d\'abord réglé un chemin d’avatars .',
    'command_update_enter_full_avatar_path'                     => 'Entrez un chemin d\'avatars complet',
    // update options
    'command_update_option_rollback'                            => 'Faire marche arrière sur la dernière mise à jour',
    'command_update_option_verbose'                             => 'Verbose output',
    'command_update_option_microapp'                            => 'Opérer comme microapp',
    'command_update_option_step'                                => 'Etape dans le processus (param requis)',
    'command_update_option_no_bootstrap'                        => 'Opère sans bootstrap',
    'command_update_option_force_addon_upgrades'                => 'Opère de façon automatique tous les updaters de add-ons à la fin de la mise à jour (expert)',
    'command_update_option_y'                                   => 'Passer outre sur les confirmations. Ne faites pas cela.',
    'command_update_option_skip_cleanup'                        => 'Passer outre sur les étapes de nettoyage après la mise à jour',
	
	// Lang entries for command sync:file-usage
     'command_sync_file_usage_description'     => 'Synchronise l\'utilisation du fichier à l\'ensemble des fichiers',
     'command_sync_file_usage_summary'         => '',
     'command_sync_file_usage'                 => 'Mise à jour de l\'utilisation des fichiers.',
     'command_sync_file_usage_done'            => 'L\'utilisation du fichier a été mise à jour avec succès.',

    // Lang entries for command update:prepare
    'command_update_prepare_description'                        => 'Préparer la mise à jour d\'un site en utilisant ces fichiers',
    'command_update_prepare_summary'                            => 'Cette commande copie tous les fichiers nécessaires pour mettre à jour un autre site différent d’ExpressionEngine et le restructurer',
    'command_update_prepare_preparing_upgrade_for_site'         => 'Préparation de la mise à jour pour un site.',
    'command_update_prepare_running_ee_upgrade'                 => 'Mise à jour EE en cours',
    'command_update_prepare_process_complete'                   => 'Processus complété!',
    'command_update_prepare_running_preflight_hooks'            => 'Mis en route des crochets preflight',
    'command_update_prepare_running_postflight_hooks'           => 'Mise en route des crochets postflight',
    'command_update_prepare_how_things_are_configured'          => 'Voici comment les choses sont configurées:',
    'command_update_prepare_notify_moving_files_to_tmp'         => 'Nous sommes sur le point de déplacer le fichier X vers tmp/X aet Y vers system/Y',
    'command_update_prepare_make_sure_you_have_backups'         => 'Assurez-vous d\'avoir des sauvegardes!',
    'command_update_prepare_are_you_sure_you_want_to_proceed'   => 'Etes-vous sûr(e) de vouloir lancer le processus?',
    'command_update_prepare_upgrade_aborted'                    => 'Mise à jour avortée',
    'command_update_prepare_notify_also_upgrade_ee_after'       => 'Vous avez aussi indiqué de vouloir mettre à jour EE après avoir déplacé ces fichiers.',
    'command_update_prepare_what_is_path_to_upgrade_config'     => 'Quel est le chemin pour votre upgrade.config.php? (Par défaut actuellement  SYSPATH. ',
    'command_update_prepare_custom_config_not_found'            => 'La config personnalisée n\'a pas été trouvée.',
    'command_update_prepare_database_file_found_move_to_config' => 'Nous avons trouvé un fichier de base de données. Merci de reporter cette information dans config.php',
    
    // update:prepare options
    'command_update_prepare_option_upgrade_ee'                  => 'Commencer la mise à jour après avoir déplacé les fichiers',
    'command_update_prepare_option_force_add_on_upgrade'        => 'Après avoir mis à jour EE, effectuez les mises à jour d\'add-ons',
    'command_update_prepare_option_old_base_path'               => 'Chemin absolu de l\'ancien site',
    'command_update_prepare_option_new_base_path'               => 'Chemin absolu du nouveau site',
    'command_update_prepare_option_old_public_path'             => 'Chemin absolu du chemin public de l\'ancien site',
    'command_update_prepare_option_new_public_path'             => 'Chemin absolu du chemin public du nouveau site',
    'command_update_prepare_option_no_config_file'              => 'Ignore le fichier de config et ne cherche pas à le vérifier',
    'command_update_prepare_option_ee_version'                  => 'Le site actuel ',
    'command_update_prepare_option_should_move_system_path'     => 'Indique si le processus de mise à jour devrait déplacer l\'ancien dossier système vers le nouveau site',
    'command_update_prepare_option_old_system_path'             => 'Chemin absolu du dossier système de l\'ancien site',
    'command_update_prepare_option_new_system_path'             => 'Chemin absolu du dossier système du nouveau site',
    'command_update_prepare_option_should_move_template_path'   => 'Indique si le processus de mise à jour devrait déplacer l\'ancien dossier de modèles vers le nouveau site',
    'command_update_prepare_option_old_template_path'           => 'Chemin absolu du dossier de modèles de l\'ancien site',
    'command_update_prepare_option_new_template_path'           => 'Chemin absolu du dossier de modèles du nouveau site',
    'command_update_prepare_option_should_move_theme_path'      => 'Indique si le processus de mise à jour devrait déplacer l\'ancien dossier de thèmes vers le nouveau site',
    'command_update_prepare_option_old_theme_path'              => 'Chemin absolu du dossier de thèmes utilisateur de l\'ancien site',
    'command_update_prepare_option_new_theme_path'              => 'Chemin absolu du dossier de thèmes utilisateur du nouveau site',
    'command_update_prepare_option_run_preflight_hooks'         => 'Indique si le processus de mise à niveau doit exécuter des crochets preflight',
    'command_update_prepare_option_run_postflight_hooks'        => 'Indique si le processus de mise à jour devrait exécuter des crochets postflight',
    'command_update_prepare_option_temp_directory'              => 'Le répertoire où nous travaillons la magie',

    // Lang entries for command update:run-hook
    'command_update_run_hook_description'                       => 'Exécute la mise à jour des crochets depuis votre fichier upgrade.config.php',
    'command_update_run_hook_summary'                           => 'Ceci va exécuter l\'un des crochets preflight ou postflight tels que définis dans le fichier upgrade.config.php file. Cette action peut être destructrice, à utiliser avec grande précaution',
    'command_update_run_hook_running'                           => 'Exécution en cours: ',
    'command_update_run_hook_hook_not_found'                    => 'Crochet non trouvé: ',
    'command_update_run_hook_success'                           => 'Succès!',
    'command_update_run_hook_what_is_path_to_upgrade_config'    => 'Quel est le chemin menant à votre upgrade.config.php? (par défaut  au SYSPATH)',
    'command_update_run_hook_custom_config_not_found'           => 'Config personnalisée non trouvée.',

    // Lang entries for command sync:conditional-fields
    'command_sync_conditional_fields_name'              => 'Sync la logique de fichier conditionnel',
    'command_sync_conditional_fields_description'       => 'Sync la logique conditionnelle des entrées de canal',
    'command_sync_conditional_fields_summary'           => 'Vérifie chaque entrée de canal pour voir si sa logique conditionnelle est correcte. Si ce n\'est pas le cas, il met à jour la logique conditionnelle et sauvegarde l\'entrée.',

    // sync:conditional-fields options
    'command_sync_conditional_fields_option_channel_id' => 'ID de canal à sync. Par défaut, pour tous les canaux',
    'command_sync_conditional_fields_option_verbose'    => 'Verbose',
    'command_sync_conditional_fields_option_clear'      => 'Nettoyer',

    // sync:conditional-fields output
    'command_sync_conditional_fields_sync_utility'      => 'Utilitaire de sync de logique conditionnelle',
    'command_sync_conditional_fields_syncing'           => 'Sychronisation en cours des %d entrées de canal',
    'command_sync_conditional_fields_current_entry'     => 'Entrée de canal actuelle: %s',
    'command_sync_conditional_fields_entries_processed' => "Entrées traitées: %d\t%s\t%s",
    'command_sync_conditional_fields_sync_complete'     => "Sync complétée: %d entrées\t%s\t%s",
    'command_sync_conditional_fields_cleared_all_hidden_fields' => "Nettoyé tous les champs cachés",
    'command_sync_conditional_fields_database_info'             => "Base de données: %d requêtes en %f secondes",
);

// EOF
