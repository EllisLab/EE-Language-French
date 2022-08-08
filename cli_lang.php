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

    // Lang entries for command cache:clear
    'command_cache_clear_description'              => 'Efface tous les caches d\'ExpressionEngine',
    'command_cache_clear_summary'                  => '',
    'command_cache_clear_option_type'              => 'Type de cache à effacer (par défaut: tous les caches)',
    'command_cache_clear_cache_does_not_exist'     => 'Le cache n\'existe pas. Utiliser —l\'aide pour visualiser les caches disponibles.',
    'command_cache_clear_caches_cleared'           => 'les caches sont effacés!',

    // Lang entries for command list
    'command_list_description'                  => 'Liste toutes les commandes disponibles',
    'command_list_summary'                      => 'Cela établit une liste complète de toutes les commandes',
    'command_list_all_available_commands'       => 'Toutes les commandes disponibles:',
    'command_list_run_with_help'                => 'Passer une commande avec — de l\'aide pour être plus amplement informé(e)',
    'command_list_command_header'               => 'Commande',
    'command_list_description_header'           => 'Description',

    // Lang entries for command make:addon
    'command_make_addon_description'            => 'Crée un nouvel add-on',
    'command_make_addon_summary'                => 'Cela génère de façon intéractive un add-on EE directement dans votre répertoire utilisateur',
    'command_make_addon_lets_build_addon'       => 'Construisons votre add-on!',
    'command_make_addon_description_question'   => 'description?',
    'command_make_addon_version_question'       => 'version?',
    'command_make_addon_author_question'        => 'auteur(e)?',
    'command_make_addon_author_url_question'    => 'URL d\'auteur(e)?',
    'command_make_addon_have_settings_question' => 'ont des réglages?',
    'command_make_addon_lets_build'             => 'Construisons!',
    'command_make_addon_created_successfully'   => 'Votre add-on a été créé avec succès',
    'command_make_addon_what_hooks_to_use'      => 'Quelle accroche souhaitez-vous utiliser? (Consulter: https://docs.expressionengine.com/latest/development/extensions.html)',
    'command_make_addon_ext_hooks'              => 'Accroches de l\'extension:',
    'command_make_addon_ft_compatibility'       => 'Compatibilité de types de fichiers?',
    'command_make_addon_what_type_of_addon'     => 'Quel type de add-on souhaitez-vous créer?',
    'command_make_addon_select_proper_addon'    => 'Merci de sélectionner un type de add-on approprié.',
    'command_make_addon_what_is_name'           => 'Quel est le nom de cotre add-on?',
    'command_make_addon_does_your'              => 'Réalise votre ',
    'command_make_addon_addon_name_required'    => 'Le nom du add-on est requis.',
    // make:addon options
    'command_make_addon_option_extension'       => 'Creéer une extension',
    'command_make_addon_option_plugin'          => 'Créer un plugin',
    'command_make_addon_option_fieldtype'       => 'Créer un type de champ',
    'command_make_addon_option_module'          => 'Créer un module',
    'command_make_addon_option_typography'      => 'Devrait utiliser une typographie de plugin',
    'command_make_addon_option_has'             => 'L\' add-on a des réglages (oui/non)',
    'command_make_addon_option_version'         => 'Version de l\' add-on',
    'command_make_addon_option_description'     => 'Description de l\' add-on',
    'command_make_addon_option_author'          => 'Auteur(e) de l\'add-on',
    'command_make_addon_option_author_url'      => 'URL de l\'auteur(e) de l\' add-on',
    'command_make_addon_option_services'        => 'Services à créer. Option multi-pass .',
    'command_make_addon_option_models'          => 'Modèles à créer. Option multi-pass.',
    'command_make_addon_option_commands'        => 'Commandes à créer. Option multi-pass.',
    'command_make_addon_option_consents'        => 'Consentements. Option multi-pass.',
    'command_make_addon_option_cookies'         => 'Cookies à créer avec une colonne séparant name le nom et sa valeur (c\'est-à-dire name:value). Option multi-pass.',
    'command_make_addon_option_hooks'           => 'Accroches utilisées. Option multi-pass.',

    // Lang entries for command make:command
    'command_make_command_description'          => 'Crée une nouvelle commande CLI pour un add-on',
    'command_make_command_summary'              => 'Cela génère intéractivement une commande CLI pour un add-on tiers existant',
    'command_make_command_lets_build_command'   => 'Construisons votre commande!',
    'command_make_command_ask_description'      => 'Description de la commande?',
    'command_make_command_ask_signature'        => 'Signature de la commande? (c\'est-à-dire make:magic)',
    'command_make_command_lets_build'           => 'Construisons!',
    'command_make_command_created_successfully' => 'Votre commande a été créée avec succès!',
    'command_make_command_ask_command_name'     => 'Nom de la commande?',
    'command_make_command_ask_addon'            => 'A quel add-on voulez-vous rajouter cela?',
    // make:command options
    'command_make_command_option_addon'         => 'Le dossier pour l\'add-on tiers auquel vous voulez rajouter cela',
    'command_make_command_option_description'   => 'Description de la commande',
    'command_make_command_option_signature'     => 'Signature pour la commande (c\'est-à-dire make:magic)',

    // Lang entries for command make:migration
    'command_make_migration_description'                        => 'Crée une nouvelle migration',
    'command_make_migration_summary'                            => 'Cela génère une nouvelle migration pour le coeur du système ou pour l\'add-on',
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
    'command_make_migration_option_location'                    => 'Localisation de migration. Les options actuelles sont soit ExpressionEngine soit un nom raccourci sinon un add-on déjà installé. ExpressionEngine sera choisi par défaut.',
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
    'command_make_prolet_option_addon'                 => 'Dossier pour les add-ons de tierces parties auquel vous souhaitez rajouter ce prolet',
    'command_make_prolet_option_description'           => 'Description du prolet',
    'command_make_prolet_option_has_widget'            => 'Créer un widget pour l\'add-on après avoir généré le prolet (optionnel)',
    'command_make_prolet_option_widget_name'           => 'Nom du widget',
    'command_make_prolet_option_generate_icon'         => 'Génère une icône de fichier de add-on par défaut au moment de la création du prolet',

    // Lang entries for command make:widget
    'command_make_widget_description'                 => 'Génère des widgets pour les add-ons existants.',
    'command_make_widget_lets_build_widget'           => 'Construisons un widget!',
    'command_make_widget_ask_widget_name'             => 'Quel est le nom du widget?',
    'command_make_widget_ask_addon'                   => 'A quel add-on se rapporte-t-il?',
    'command_make_widget_building_widget'             => 'Construction du widget.',
    'command_make_widget_created_successfully'        => 'Le widget a été créé avec succès!',
    'command_make_widget_option_addon'                => 'Nom du add-on',

    // Lang entries for command make:model
    'command_make_model_description'                            => 'Crée un nouveau modèle pour un add-on',
    'command_make_model_summary'                                => 'Cela génère interactivement un modèle EE pour un add-on tiers existant',
    'command_make_model_lets_build_model'                       => 'Construisons votre modèle!',
    'command_make_model_lets_build'                             => 'Construisons!',
    'command_make_model_created_successfully'                   => 'Votre modèle a été créé avec succès!',
    'command_make_model_ask_model_name'                         => 'Nom du modèle?',
    'command_make_model_ask_addon'                              => 'A quel add-on souhaitez-vous rajouter cela?',
    // make:model options
    'command_make_model_option_addon' => 'Dossier de l\'add-on tiers auquel vous souhaitez rajouter ce modèle',

    // Lang entries for command migrate
    'command_migrate_description'                  => 'Met en route des migrations spécifiques (toutes, coeur système, ou add-ons)',
    'command_migrate_summary'                      => 'Met en boucle à travers le dossier de migrations core et le dossier de migrations des add-ons et exécute toutes les migrations qui n\'avaient pas été précédemment menées. En opérant toutes les migrations, les migrations core seront réalisées en premier puis les migrations des add-ons. Quand les migrations sont opérées pour plusieurs add-ons, toutes les migrations pour chaque add-on seront regroupées et mises en service dans le même temps',
    'command_migrate_all_migrations_ran'           => 'Toutes les migrations disponibles ont déjà été opérées.',
    'command_migrate_what_is_location'             => 'Quelle est la localisation de votre migration?',
    'command_migrate_error_please_select_location' => 'Merci de sélectionner la localisation de la migration en utilisant --core, —tout, --addons, ou --addon=addon_name.',
    'command_migrate_migrated'                     => 'Ont été migrées: ',
    'command_migrate_all_migrations_completed'     => 'Toutes les migrations ont été opérées avec succès!',
    // migrate options
    'command_migrate_option_steps'                 => 'Préciser le nombre de migrations à mettre en oeuvre',
    'command_migrate_option_everything'            => 'Opérer toutes les migrations. Core opère en premier, puis toutes les migrations de add-ons, l\'une après l\'autre.',
    'command_migrate_option_all'                   => 'Opérer toutes les migrations. Alias pour —tout',
    'command_migrate_option_core'                  => 'Opère seulement les migrations core. Ceci exclut toutes les migrations de add-ons.',
    'command_migrate_option_addon'                 => 'Opère la migration seulement pour l\'add-on précisé.',
    'command_migrate_option_addons'                => 'Opère la migration seulement pour les add-ons précisés.',

    // Lang entries for command migrate:addon
    'command_migrate_addon_description'               => 'Opère les migrations de add-ons',
    'command_migrate_addon_summary'                   => 'Mise en boucle à travers les dossiers des add-ons et mise en marche de toutes les migrations qui n\'ont pas été précédemment mises en fonction. Si tous les add-ons sont mis en marche, les migrations seront regroupées par add-on et fonctionneront ensemble',
    'command_migrate_addon_all_migrations_ran'        => 'Tous les migrations disponibles d\' add-ons ont été mises en route.',
    'command_migrate_addon_ask_location_of_migration' => 'Quelle est la localisation de votre migration?',
    'command_migrate_addon_error_no_location_set'     => 'Merci de sélectionner la localisation de votre migration en —utilisant toutes, ou --addon=addon_name.',
    'command_migrate_addon_migrated'                  => 'Ont été migrés: ',
    'command_migrate_addon_all_migrations_completed'  => 'Toutes les migrations ont été complétées avec succès!',
    // migrate:addon options
    'command_migrate_addon_option_steps'              => 'Préciser le nombre de migrations à opérer',
    'command_migrate_addon_option_everything'         => 'Opérer toutes les migrations d\'add-ons',
    'command_migrate_addon_option_all'                => 'Opérer toutes les migrations d\'add-ons. Alias pour —tout',
    'command_migrate_addon_option_addon'              => 'Opérer la migration pour les add-ons précisés.',

    // Lang entries for command migrate:all
    'command_migrate_all_description'              => 'Opérer les migrations core, puis les migrations de chaque add-on',
    'command_migrate_all_summary'                  => 'Mise en boucle à travers le dossier de migrations core et le dossier de migration des add-ons puis exécute toutes les migrations qui n\'ont pas été mises en oeuvre à ce stade. Les migrations core seront toutes exécutées en premier, puis ensuite celles des add-ons. Quand toutes les migrations sont mises en oeuvre pour de multiples add-ons, toutes les migrations pour chaque add-on sont regroupées et fonctionneront ensemble',
    'command_migrate_all_migrated'                 => 'Ont été migrées: ',
    'command_migrate_all_all_migrations_completed' => 'Toutes les migrations ont été complétées avec succès!',
    // migrate:all options
    'command_migrate_all_option_steps'             => 'Préciser le nombre de migrations à mettre en oeuvre',

    // Lang entries for command migrate:core
    'command_migrate_core_description'                          => 'Met en oeuvre les migrations core',
    'command_migrate_core_summary'                              => 'Met en boucle à travers le dossier de migrations core et exécute toutes les migrations qui n\'ont pas déjà été accomplies',
    'command_migrate_core_migrated'                             => 'Ont été migrées: ',
    'command_migrate_core_all_migrations_completed'             => 'Toutes les migrations sont complétées avec succès!',
    // migrate:core options
    'command_migrate_core_option_steps'                         => 'Préciser le nombre de migrations à mettre en oeuvre',

    // Lang entries for command migrate:reset
    'command_migrate_reset_description'                         => 'Revient en arrière sur toutes les migrations',
    'command_migrate_reset_summary'                             => 'Revient en arrière sur toutes les migrations immédiatement',
    'command_migrate_reset_no_migrations_to_rollback'           => 'Aucune migration à récupérer en retour.',
    'command_migrate_reset_rolling_back'                        => 'Retour en arrière en cours: ',
    'command_migrate_reset_all_migrations_rolled_back'          => 'Toutes les migrations ont été récupérées avec succès!',

    // Lang entries for command migrate:rollback
    'command_migrate_rollback_description'                      => 'Revient en arrière sur le groupe de migrations le plus récent',
    'command_migrate_rollback_summary'                          => 'Prend le groupe de migrations le plus récent et le ramène en retour',
    'command_migrate_rollback_no_migrations_to_rollback'        => 'Pas de migrations à faire revenir.',
    'command_migrate_rollback_rolling_back'                     => 'Retour en arrière en cours: ',
    'command_migrate_rollback_migrations_executed_successfully' => 'les migrations ont été exécutées avec succès.',
    'command_migrate_rollback_all_migrations_rolled_back'       => 'Toutes les migrations du groupe ont été retournées avec succès!',
    // migrate:rollback options
    'command_migrate_rollback_option_steps'                     => 'Préciser le nombre de migrations à faire revenir',

    // Lang entries for command update
    'command_update_description'                                => 'Met à jour ExpressionEngine',
    'command_update_summary'                                    => 'Met en oeuvre toutes les mises à jour disponibles d\'ExpressionEngine',
    'command_update_is_already_up_to_date'                      => 'est déjà à la page!',
    'command_update_new_version_available'                      => 'Il n\'y a pas de nouvelle version d’ExpressionEngine actuellement disponible:',
    'command_update_confirm_upgrade'                            => 'Que souhaiteriez-vous mettre à jour?',
    'command_update_not_run'                                    => 'Mise à jour non réalisée.',
    'command_update_success'                                    => 'Succès! Créer quelque chose de renversant!',
    'command_update_indicated_upgrade_all_addons'               => 'Vous avez indiqué souhaiter mettre à jour tous les add-ons.',
    'command_update_confirm_addon_upgrade'                      => 'En êtes-vous certain(e)? Ceci peut être une action destructrice.',
    'command_update_addon_update_halted'                        => 'La mise à jour du add-on a été arrêtée',
    'command_update_getting_info_from_local_env'                => 'Obtenir de l\'information relative aux mises à jour à partir de votre environnement local',
    'command_update_getting_info_from_ee_com'                   => 'Obtenir de l\'information relative aux mises à jour à partir de ExpressionEngine.com',
    'command_update_updater_failed'                             => 'Echec de mise à jour',
    'command_update_updating_to_version'                        => 'Mise à jour en cours de déploiement à la version ',
    'command_update_failed_on_version'                          => 'Echec de version ',
    'command_update_error_updater_failed_missing_version'       => 'La mise à jour a échoué à cause de la version manquante. Merci de mettre à jour UpgradeMap. Version: ',
    'command_update_missing_avatar_path_message'                => 'Votre processus de mise à jour va échouer sans avoir préalablement renseigné un chemin d\'avatar.',
    'command_update_enter_full_avatar_path'                     => 'Entrer un chemin complet d\'avatar',
    // update options
    'command_update_option_rollback'                            => 'Dernière mise à jour Rollback (retour en arrière)',
    'command_update_option_verbose'                             => 'Production Verbose',
    'command_update_option_microapp'                            => 'Opérer en tant que microapp',
    'command_update_option_step'                                => 'Entrer dans le processus (param requis)',
    'command_update_option_no_bootstrap'                        => 'Opère sans bootstrap',
    'command_update_option_force_addon_upgrades'                => 'Opère automatiquement toutes les mises à jour des add-ons à la fin de l\'action (avancé)',
    'command_update_option_y'                                   => 'Sauter toutes les confirmations. A ne pas faire.',
    'command_update_option_skip_cleanup'                        => 'Sauter les étapes de nettoyage après les mises à jour',

    // Lang entries for command update:prepare
    'command_update_prepare_description'                        => 'Préparer un site à se mettre à niveau en utilisant ces fichiers',
    'command_update_prepare_summary'                            => 'Cette commande copie tous les fichiers nécessaires pour leur mise à niveau dans un site ExpressionEngine différent et le restructurer',
    'command_update_prepare_preparing_upgrade_for_site'         => 'Préparation de la mise à niveau pour un site.',
    'command_update_prepare_running_ee_upgrade'                 => 'Mise à niveau en cours de EE ',
    'command_update_prepare_process_complete'                   => 'Processus complété!',
    'command_update_prepare_running_preflight_hooks'            => 'Opérer le accroches preflight',
    'command_update_prepare_running_postflight_hooks'           => 'Opérer les accroches postflight',
    'command_update_prepare_how_things_are_configured'          => 'Voici comment les choses sont configurées:',
    'command_update_prepare_notify_moving_files_to_tmp'         => 'Nous sommes sur le point de déplacer le fichier X vers tmp/X et le fichier Y vers system/Y',
    'command_update_prepare_make_sure_you_have_backups'         => 'Assurez-vous de créer des sauvegardes!',
    'command_update_prepare_are_you_sure_you_want_to_proceed'   => 'Etes-vous sûr(e) de vouloir commencer?',
    'command_update_prepare_upgrade_aborted'                    => 'Mise à niveau avortée',
    'command_update_prepare_notify_also_upgrade_ee_after'       => 'Vous avez aussi indiqué que vous vouliez mettre à niveau EE après avoir déplacé ces fichiers.',
    'command_update_prepare_what_is_path_to_upgrade_config'     => 'Quel est le chemin vers votre upgrade.config.php? (actuellement par défaut vers SYSPATH) ',
    'command_update_prepare_custom_config_not_found'            => 'La config personnalisée n\'a pas été trouvée.',
    'command_update_prepare_database_file_found_move_to_config' => 'Nous avons trouvé un fichier de base de données. Merci de déplacer cette information au sein de config.php',
    // update:prepare options
    'command_update_prepare_option_upgrade_ee'                  => 'Commencer la mise à niveau après avoir déplacé les fichiers',
    'command_update_prepare_option_force_add_on_upgrade'        => 'Après la mise à niveau EE, suivront les mises à niveau des add-ons',
    'command_update_prepare_option_old_base_path'               => 'Chemin absolu vers l\'ancien site',
    'command_update_prepare_option_new_base_path'               => 'Chemin absolu vers le nouveau site',
    'command_update_prepare_option_old_public_path'             => 'Chemin absolu vers le chemin public de l\'ancien site',
    'command_update_prepare_option_new_public_path'             => 'Chemin absolu du chemin public du nouveau site',
    'command_update_prepare_option_no_config_file'              => 'Ignore le fichier de config et ne cherche pas à le vérifier',
    'command_update_prepare_option_ee_version'                  => 'Le site actuel',
    'command_update_prepare_option_should_move_system_path'     => 'Selon que le processus de mise à niveau devrait déplacer l\'ancien dossier système vers le nouveau site',
    'command_update_prepare_option_old_system_path'             => 'Chemin absolu du dossier système de l\'ancien site',
    'command_update_prepare_option_new_system_path'             => 'Chemin absolu du dossier système du nouveau site',
    'command_update_prepare_option_should_move_template_path'   => 'Selon que le processus de mise à niveau devrait déplacer l\'ancien dossier de modèles vers le nouveau site',
    'command_update_prepare_option_old_template_path'           => 'Chemin absolu du dossier modèles de l\'ancien site',
    'command_update_prepare_option_new_template_path'           => 'Chemin absolu du dossier modèles du nouveau site',
    'command_update_prepare_option_should_move_theme_path'      => 'Selon que le processus de mise à niveau devrait déplacer l\'ancien dossier de thèmes vers le nouveau site',
    'command_update_prepare_option_old_theme_path'              => 'Chemin absolu du dossier de thèmes utilisateur de l\'ancien site',
    'command_update_prepare_option_new_theme_path'              => 'Chemin absolu du dossier de thèmes utilisateur du nouveau site',
    'command_update_prepare_option_run_preflight_hooks'         => 'Selon que le processus de mise à niveau devrait utiliser des accroches preflight définies',
    'command_update_prepare_option_run_postflight_hooks'        => 'Selon que le processus de mise à niveau devrait utiliser des accroches postflight définies',
    'command_update_prepare_option_temp_directory'              => 'Le répertoire où nous mettons en oeuvre magic in',

    // Lang entries for command update:run-hook
    'command_update_run_hook_description'                       => 'Opère les accroches de mise à niveau depuis votre fichier upgrade.config.php',
    'command_update_run_hook_summary'                           => 'Ceci va opérer les accroches preflight ou postflight telles que définies dans le fichier  upgrade.config.php. Cette action peut être destructrice, à utiliser avec précaution',
    'command_update_run_hook_running'                           => 'Opération en cours: ',
    'command_update_run_hook_hook_not_found'                    => 'Accroche non trouvée: ',
    'command_update_run_hook_success'                           => 'Succès!',
    'command_update_run_hook_what_is_path_to_upgrade_config'    => 'Quel est votre chemin vers upgrade.config.php? (par défaut vers SYSPATH)',
    'command_update_run_hook_custom_config_not_found'           => 'La config personnalisée n\'a pas été trouvée.',

);

// EOF
