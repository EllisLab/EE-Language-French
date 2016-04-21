<?php

$lang = array(

'add_file'	=> 'Ajouter un fichier',

'remove_file' => 'Supprimer un fichier',

'file_undo_remove' => 'Annuler la suppression',

'directory_no_access' => 'Vous n\'avez pas accès au répertoire spécifié pour ce champ',

'directory' => 'Répertoire :',

// Relationships
'rel_ft_channels'			=> 'Sélectionner les canaux à relier',
'rel_ft_channels_desc'		=> 'De quels canaux le contenu lié doit-il être tiré.',
'rel_ft_include'			=> 'Inclure dans la sélection',
'rel_ft_include_desc'		=> 'Autoriser les articles expirés ou futurs dans ce champ relationnel.',
'rel_ft_include_expired'	=> 'Articles ayant expiré ?',
'rel_ft_include_future'		=> 'Articles futurs ?',
'rel_ft_categories'			=> 'Limiter les articles par catégorie',
'rel_ft_categories_desc'	=> 'Choisissez les catégories afin de limiter les articles dans ce champ relationnel.',
'rel_ft_authors'			=> 'Limiter les articles par auteur',
'rel_ft_authors_desc'		=> 'Choisissez les auteurs afin de limiter les articles dans ce champ relationnel.',
'rel_ft_statuses'			=> 'Limiter les articles par statut',
'rel_ft_statuses_desc'		=> 'Choisissez les statuts afin de limiter les articles dans ce champ relationnel.',
'rel_ft_limit'				=> 'Nombre maximal d\'articles',
'rel_ft_limit_desc'			=> 'Nombre maximal d\'articles à afficher dans le champ relationnel.<br><i>laisser la zone vide pour autoriser TOUS les articles</i>',
'rel_ft_order'				=> 'Trier les articles par',
'rel_ft_order_desc'			=> 'Tri par défaut des articles dans le champ relationnel.',
'rel_ft_order_title'		=> 'Titre de l\'article',
'rel_ft_order_date'			=> 'Date de l\'article',
'rel_ft_order_ascending'			=> 'Ordre croissant (A-Z)',
'rel_ft_order_descending'			=> 'Ordre décroissant (Z-A)',
'rel_ft_allow_multi'		=> 'Autoriser les relations multiples ?',
'rel_ft_allow_multi_desc'=> 'Si positionné à <b>Oui</b>, les auteurs seront autorisés à sélectionner plus d\'un article à relier',
'any_channel' 				=> 'N\'importe quel canal',
'any_category' 				=> 'N\'importe quelle catégorie',
'any_author' 				=> 'N\'importe quel auteur',
'any_status' 				=> 'N\'importe quel statut',

// File
'file_ft_configure'				=> 'Options générales du champ',
'file_ft_configure_subtext'		=> 'Permet de contrôler un peu plus la façon dont le champ fichier devrait se comporter.',
'file_ft_content_type'			=> 'Types de fichier autorisés',
'file_ft_content_type_desc'		=> 'Types de fichier qui peuvent être téléchargés à partir de ce champ.',
'file_ft_allowed_dirs'			=> 'Répertoire autorisé',
'file_ft_allowed_dirs_desc'		=> 'Répertoire par défaut pour stocker les fichiers téléchargés avec ce champ.',
'file_ft_show_files'			=> 'Afficher les fichiers existants ?',
'file_ft_show_files_desc'	=> 'Si positionné à <b>Oui</b>, les auteurs pourront sélectionner un fichier existant dans un menu déroulant',
'file_ft_limit'					=> 'Limite pour les fichiers existants',
'file_ft_limit_desc'			=> 'Nombre maximal de fichier à afficher dans le menu déroulant.<br><i>laisser la zone vide pour afficher TOUS les fichiers.</i>',
'file_ft_select_existing'		=> 'Sélectionner un fichier existant',
'file_ft_cannot_find_file'		=> '<b>Fichier introuvable.</b> Nous n\'avons pas pu retrouver %s sur le serveur.',
'file_ft_no_upload_directories' => 'Aucun répertoire de téléchargement n\'est disponible pour l\'instant. Merci d\'<a href="%s">ajouter un ou plusieurs répertoire de téléchargement</a> afin de pouvoir utiliser le type de champ Fichier.',

// Grid
'grid_min_rows'				=> 'Lignes mini',
'grid_min_rows_desc'		=> 'fixe le nombre minimal de lignes de données que cette grille acceptera',
'grid_max_rows'				=> 'Lignes maxi',
'grid_max_rows_desc'		=> 'fixe le nombre maximal de lignes de données que cette grille acceptera',
'grid_fields'				=> 'Champs Grille',
'grid_config_desc'			=> 'Quelles données souhaitez-vous collecter ?',
'grid_col_type'				=> 'Type de données ?',
'grid_col_label'			=> 'Étiquette',
'grid_col_name'				=> 'Nom du champ',
'grid_col_instr'			=> 'Instructions',
'grid_col_options'			=> 'Est-ce que cette donnée est...',
'grid_col_width'			=> 'Largeur de colonne',
'grid_col_width_desc'		=> 'Définissez la largeur qu\'aura cette colonne dans le formulaire de publication.',
'grid_col_width_percent'	=> 'Pourcentage.',
'grid_in_this_field'		=> 'Est ce champ',
'grid_in_this_field_desc'	=> 'Rendre ce champ obligatoire ou recherchable.',
'grid_show_fmt_btns'		=> 'Afficher les boutons de formatage ?',
'grid_output_format'		=> 'Formatage de la sortie ?',
'grid_text_direction'		=> 'Sens d\'écriture ?',
'grid_limit_input'			=> 'Limiter la saisie ?',
'grid_date_localized'		=> 'Locale ?',
'grid_chars_allowed'		=> 'Caractères autorisés.',
'grid_order_by'				=> 'Trier par',
'grid_show'					=> 'Afficher',
'grid_col_label_required'	=> 'Il y a au moins une colonne sans étiquette.',
'grid_col_name_required'	=> 'Il y a au moins une colonne sans nom.',
'grid_col_name_reserved'	=> 'Il y a au moins une colonne qui utilise un nom réservé pour d\'autres fonctionnalités de modèle.',
'grid_duplicate_col_label'	=> 'Les étiquettes des champs de colonne doivent être uniques.',
'grid_duplicate_col_name'	=> 'Les noms de champ de colonne doivent être uniques.',
'grid_numeric_percentage'	=> 'Les largeurs de colonne doivent être numériques.',
'grid_invalid_column_name'	=> 'Les noms de colonne ne doivent contenir que des caractères alphanumérique et aucun espace.',
'grid_add_some_data'		=> 'Vous n\'avez ajouté aucune ligne de données pour le moment. <a href="#" class="grid_link_add">Ajouter des données ?</a>',
'grid_validation_error'		=> 'Un problème est survenu avec au moins un champ de la grille',
'grid_field_required'		=> 'ce champ est obligatoire',
'grid_reorder_field'		=> 'ré-ordonnez le champ',
'grid_add_field'			=> 'ajouter un nouveau champ',
'grid_copy_field'			=> 'copier le champ',
'grid_remove_field'			=> 'retirer le champ',

// URL
'url_ft_allowed_url_schemes'         => 'Schémas URL autorisés',
'url_ft_url_scheme_placeholder'      => 'Schéma URL fictif',
'url_ft_url_scheme_placeholder_desc' => 'Valeur fictive affichée pour ce paramètre quand aucune URL n\'a été précisée.',
'url_ft_protocol_relative_url'       => 'URL dépendante du protocole',
'url_ft_invalid_url'                 => 'URL invalide',
'url_ft_invalid_url_scheme'          => 'Votre URL doit commencer avec un schéma valide : %s',


// IGNORE
''=>'');

// EOF