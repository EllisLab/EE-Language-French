<?php

$lang = array(

    'add_file' => 'Ajouter un fichier',

    'directory_no_access' => 'Vous n\'avez pas accès au répertoire spécifié pour ce champ',

	'edit_meta' => 'Editer les métadonnées',

    'file_undo_remove' => 'Annuler la SUPPRESSION',

    'remove_file' => 'Supprimer le fichier',

    'ft_allow_multi' => 'Autoriser les sélections multiples?',

    'ft_allow_multi_desc' => 'Si activé, les auteurs seront autorisés à sélectionner plusieurs éléments.',

    'ft_multiselect_not_allowed' => 'La sélection d\'options multiples n\'est pas autorisée pour ce champ',

    /* Relationships */
    'any_author' => 'N\'importe quel auteur',

    'any_category' => 'N\'importe quelle catégorie',

    'any_channel' => 'N\'importe quel canal',

    'any_status' => 'N\'importe quel statut',

    'relate_entry' => 'Relier l\'entrée',

	'relate_member' => 'Relier le membre',
    
    'relate_entry_deferred' => 'Editer les Relations',

    'rel_ft_allow_multi' => 'Autoriser les relations multiples?',

    'rel_ft_allow_multi_desc' => 'Si activé, les auteurs seront autorisés à créer des relations multiples.',

    'rel_ft_authors' => 'Auteurs',

    'rel_ft_authors_desc' => 'Choisir les auteurs pour limiter les entrées dans ce champ de relations.',

    'rel_ft_categories' => 'Limiter par catégorie',

    'rel_ft_categories_desc' => 'Choisir les catégories pour limiter les entrées dans ce champ de relations.',

    'rel_ft_channels' => 'Canaux à relier',

    'rel_ft_channels_desc' => 'Les canaux au sein desquels le contenu associé peut être supprimé.',

	 'rel_ft_roles' => 'Rôles à inclure',

     'rel_ft_roles_desc' => 'Autoriser seulement le membre sélectionné avec ses rôles primaires choisis',

     'any_role' => 'Tout rôle',

    'rel_ft_include' => 'Inclure dans la sélection',

    'rel_ft_include_desc' => 'Autoriser les entrées futures ou expirées dans ce champ de relations.',

    'rel_ft_include_expired' => 'Entrées expirées',

    'rel_ft_include_future' => 'Entrées futures',

	'rel_ft_limit' => 'Nombre maximum de %s disponibles',

     'rel_ft_limit_desc' => 'Règle le nombre de %s affichés dans le menu déroulant de champ.<br><i>Laisser vide pour autoriser tous les %s.</i>',

    'rel_ft_order' => 'Classer par',

    'rel_ft_order_ascending' => 'Croissant (A-Z)',

    'rel_ft_order_date' => 'Date d\'entrée',

	'rel_ft_order_desc' => 'Rangement par défaut des %s dans le champ associé.',

    'rel_ft_order_descending' => 'Décroissant (Z-A)',

    'rel_ft_order_title' => 'Titre',

    'rel_ft_related_only' => 'Relié seulement',

    'rel_ft_statuses' => 'Limiter par statut',

    'rel_ft_statuses_desc' => 'Choisir les statuts pour limiter les entrées dans ce champ de relation.',

    'rel_ft_unrelated_only' => 'Délier seulement',

	'rel_ft_display_member_id' => 'Afficher les ID de membres?',

     'rel_ft_display_member_id_desc' => 'Si activé,les ID de membres seront affichées ensemble avec le nom d\'écran du membre à l\'intérieur du champ.',
	
	'rel_ft_display_status' => 'Afficher le statut?',

     'rel_ft_display_status_desc' => 'Si activé, un badge de couleur de statut sera affiché avec le titre de l\'entrée à l\'intérieur du champ.',
	
    
    'rel_ft_deferred' => 'Reporter l\'initialisation du champ?',

     'rel_ft_deferred_desc' => 'Si activé, ce champ ne se réinitialisera pas avant avoir cliqué sur le bouton Editer les Relations. Cela peut aboutir à des vitesses plus rapides de chargement de page du Tableau de bord.',

    'rel_ft_max' => 'Nombre maximum de %s reliés',

    'rel_ft_max_desc' => 'Fixe le nombre maximum de %s que ce champ peut utiliser pour les relier.',

    'rel_ft_max_error' => 'Vous ne pouvez sélectionner guère plus de %d %s.',

    'rel_ft_min' => 'Nombre minimum de %s reliés',

    'rel_ft_min_desc' => 'Fixe le nombre minimum de %s que ce champ peut utiliser pour les relier.',

    'rel_ft_min_error' => 'Vous devez sélectionner au moins %d %s.',

    /* Duration */
    'duration_ft_hh' => 'hh',

    'duration_ft_hhmm' => 'hh:mm',

    'duration_ft_hhmmss' => 'hh:mm:ss',

    'duration_ft_hours' => 'heures',

    'duration_ft_minutes' => 'minutes',

    'duration_ft_placeholder' => 'Durée en %s (ou %s)',

    'duration_ft_seconds' => 'secondes',

    'duration_ft_units' => 'unités',

    'duration_ft_units_desc' => 'Détermine la durée de description quand un auteur de contenus entre un nombre entier comme “42”.',

    'valid_duration' => 'Ce champ doit intégrer une durée en %s (ou %s)',

    /* File */
    'file_ft_allowed_dirs' => 'Répertoire autorisé',

    'file_ft_allowed_dirs_desc' => 'Répertoire utilisé par ce champ pour ranger et récupérer des fichiers.',

    'file_ft_cannot_find_file' => '<b>Fichier non trouvé.</b> Nous n\'avons pas pu localiser %s sur le serveur.',

    'file_ft_configure' => 'Options générales de fichier',

    'file_ft_configure_subtext' => 'Contrôle davantage le comportement du champ de fichiers.',

    'file_ft_content_type' => 'Types de fichiers autorisés',

    'file_ft_content_type_desc' => 'Types de fichiers qui peuvent être téléchargés à partir de ce champ.',

    'file_ft_images_only' => 'Images seulement',

    'file_ft_limit' => 'Limite de fichiers existants',

    'file_ft_limit_desc' => 'Nombre maximum de fichiers affichés dans le menu déroulant.<br><i>Laisser vide pour afficher tous les fichiers.</i>',

    'file_ft_no_upload_directories' => 'Il n\'y a pas actuellement de répertoire de téléchargement disponible. Merci <a href="%s">d\'ajouter un ou plusieurs répertoires de téléchargement</a> à utiliser dans le type de champs de fichier.',

    'file_ft_select_existing' => 'Sélectionner un fichier existant',

    'file_ft_show_files' => 'Montrer les fichiers existants?',

    'file_ft_show_files_desc' => 'Si activé, un menu déroulant avec des fichiers existants seront montrés aux auteurs.',

	'file_field_msm_warning' => 'Ce champ est actuellement réglé pour utiliser le répertoire de téléchargement <b>%s</b>, exclusivement disponible au sein du site MSN <b>%s</b>.',

    'file_ft_upload_directories' => 'Télécharger les répertoires',

    /* File Drag and Drop */

    'file_dnd_choose_directory' => 'Merci de choisir un répertoire',

    'file_dnd_choose_file_directory' => 'Choisir un répertoire de fichiers',

    'file_dnd_upload_to' => 'Téléchargement vers',

    'file_dnd_choose_directory_before_uploading' => 'Vous devez choisir un répertoire pour télécharger les fichiers',

    'file_dnd_choose_directory_btn' => 'Choisir le répertoire',

    'file_dnd_choose_existing' => 'Choisir l\'existant',

    'file_dnd_dismiss' => 'Rejeter',

    'file_dnd_drop_file' => 'Déposer le fichier ici pour le téléchargement',

    'file_dnd_drop_files' => 'Déposer les fichiers ici pour le téléchargement',

    'file_dnd_file_name' => 'Nom de fichier',

    'file_dnd_filter_directories' => 'filtrer les répertoires',

    'file_dnd_images_only' => 'Ce champ n\'accepte que les images.',

    'file_dnd_progress' => 'Progression',

    'file_dnd_conflict' => 'Erreur. Le fichier existe déjà.',

    'file_dnd_resolve_conflict' => 'Résoudre le conflit',

    'file_dnd_single_file_allowed' => 'Ce champ ne peut contenir qu\'un seul fichier',

    'file_dnd_unexpected_error' => 'Erreur imprévue. Vérifier votre réglage post_max_size dans votre configuration PHP.',

    'file_dnd_uploading_to' => 'téléchargement en cours vers %s …',

    'file_dnd_upload_new' => 'Télécharger nouveau',
    
    'file_dnd_create_directory' => 'Créer un Nouveau Répertoire',

	'file_dnd_no_directories' => 'Il n\'y a pas de répertoires de téléchargement disponibles',

     'file_dnd_no_directories_desc' => 'Ce champ est limité au répertoire de téléchargement non disponible pour le membre et le site actuels.',
    
    'file_grid_vertical_layout_title' => 'Agencement du fichier Grille',

    /* Grid */
    'grid_add_field' => 'ajouter nouveau fichier',

    'grid_add_some_data' => 'Vous n\'avez pas encore ajouté de rang de données. <a href="#" class="grid_link_add">Ajouter des données?</a>',

    'grid_allow_reorder' => 'Autoriser le réagencement des rangées?',
    
    'grid_vertical_layout' => 'Affichage vertical de la grille',
    
    'grid_horizontal_layout' => 'Affichage horizontal de la grille',

     'grid_auto' => 'Auto',

     'grid_vertical_layout_title' => 'Affichage de la grille',

    'grid_vertical_layout_desc' => 'Choisir comment afficher le champ dans les pages publiées.',

    'grid_chars_allowed' => 'Caractères autorisés.',

    'grid_col_instr' => 'Instructions',

    'grid_col_label' => 'Libellé de publication',

    'grid_col_name' => 'Nom de champ',

    'grid_col_name_reserved' => 'Cette colonne utilise un nom réservé à une autre fonctionnalité de modèle.',

    'grid_col_options' => 'Sont ces données',

    'grid_col_type' => 'Type de données?',

    'grid_col_width' => 'Largeur maximum de colonne',

    'grid_col_width_desc' => 'Règle la largeur minimum (en pixels) de cette colonne dans le formulaire de publication.',

    'grid_col_width_percent' => 'Pourcentage.',

    'grid_config_desc' => 'Quelles données souhaitez-vous collecter?',

    'grid_copy_field' => 'copier le champ',

    'grid_date_localized' => 'Localisées?',

    'grid_duplicate_col_label' => 'Les libellés de champs de colonne doivent être uniques.',

    'grid_duplicate_col_name' => 'Les noms de champs de colonne doivent être uniques.',

    'grid_expand_field' => 'étendre le champ',

    'grid_field_required' => 'Ce champ est requis',
 
    'grid_fields' => 'Champs de la Grille',

    'grid_in_this_field' => 'Dans ce champ',

    'grid_in_this_field_desc' => 'Rendre ce champ obligatoire, ou accessible à la recherche.',

    'grid_limit_input' => 'Limiter input?',

    'grid_max_rows' => 'Lignes maximum',

    'grid_max_rows_desc' => 'Fixe le nombre maximum de lignes de données que cette grille peut accepter',

    'grid_min_rows' => 'Lignes minimum',

    'grid_min_rows_desc' => 'Fixe le nombre minimum de rangées de données que cette grille peut accepter',

	'grid_min_rows_required' => 'Cette grille requiert au moins %d rangées.',

    'grid_order_by' => 'Trier par',

    'grid_output_format' => 'Formatage output?',

    'grid_remove_field' => 'Retirer le champ',

    'grid_reorder_field' => 'Réagencer le champ',

    'grid_show' => 'Visualiser',

    'grid_show_fmt_btns' => 'Visualiser les boutons de formatage?',

    'grid_text_direction' => 'Sens d\'écriture du texte?',

    'grid_validation_error' => 'Il y a eu un problème avec un ou plusieurs champs de grille',

    /* File Grid */

    'file_grid_setup' => 'Montage du fichier Grille',

    'file_grid_maximum_rows_hit' => 'Télécharger autant de fichiers devrait dépasser le réglage de rangées de champs de %s',

    /* URL */
    'url_ft_allowed_url_schemes' => 'Schémas URL autorisés',

    'url_ft_invalid_url' => 'URL non valide',

    'url_ft_invalid_url_scheme' => 'Votre URL doit commencer avec un schéma valide: %s',

    'url_ft_protocol_relative_url' => 'Protocole URL relative',

    'url_ft_single_slash_protocol_relative_url' => 'Racine de l\'URL relative',

    'url_ft_url_scheme_placeholder' => 'Référence de schéma d\'URL',

    'url_ft_url_scheme_placeholder_desc' => 'Affiché en tant que texte de référence quand aucune URL n\'a été saisie.',

    /* Color Picker */
    'colorpicker_allowed_colors' => 'Couleurs autorisées',
    'colorpicker_allowed_colors_desc' => 'Choisir les couleurs autorisées à être sélectionnées.',

    'colorpicker_allowed_colors_any' => 'N\'importe laquelle',
    'colorpicker_allowed_colors_swatches' => 'Echantilllons',

    'colorpicker_default_color' => 'Couleur par défaut',
    'colorpicker_default_color_desc' => 'Si paramétré, quand aucune couleur n\'aura été choisie, c\'est la couleur par défaut qui sera appliquée.',

    'colorpicker_color_not_allowed' => 'Cette couleur n\'est pas autorisée.',

    'no_colorpicker_swatches' => 'Aucun <b>Echantillon</b> existant.',

    'swatches' => 'Echantillons',

    'colorpicker_swatches_options_desc' => 'Préciser une liste de couleurs pré-définies à montrer dans le sélecteur de couleurs.',

    'colorpicker_swatches_populate_values' => 'Valeurs',
    'colorpicker_swatches_populate_manually' => 'Alimenter les échantillons manuellement',

    /* Conditional Evaluation Rules */
    'contains' => 'contient',
    'notContains' => 'ne contient pas',
    'equal' => 'est',
    'notEqual' => 'n\'est pas',
    'isEmpty' => 'est vide',
    'isNotEmpty' => 'n\'est pas vide',
    'greaterThan' => 'plus grand que',
    'greaterOrEqualThan' => 'plus grand ou égal à',
    'lessThan' => 'moins que',
    'lessOrEqualThan' => 'plus petit ou égal à',

    'turnedOn' => 'est branché',
    'turnedOff' => 'n\'est pas branché',

    'includes' => 'inclut',
    'notIncludes' => 'n\'inclut pas',

    /* Slider */
    'field_step' => 'Pas',

    'field_prefix' => 'Préfixe',

    'field_suffix' => 'Suffixe',

    /* Notes */
    'notes_note_content' => 'Note de contenu',
    'notes_note_content_desc' => 'Ce contenu apparaîtra comme une note dans le formulaire de publication. Le formatage Markdown est supporté.',
	
	   /* Date */

     'date_localization' => 'Date de la localisation',
     'date_localization_desc' => 'Choisir la manière dont les données du champ doient être localisées. <a href="' . DOC_URL . 'fieldtypes/date.html">En savoir plus</a>',
     'always_localized' => 'Toujours localisé(e)s',
     'always_fixed' => 'Toujours fixé(e)s',
     'ask_each_time' => 'Demander chaque fois',
     'show_time' => 'Inclure l\'heure?',
     'show_time_desc' => 'Si désactivé,seule la date sera affichée',
);

// EOF
