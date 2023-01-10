<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Pro Search language file
 *
 * @package        pro_search
 * @author         ExpressionEngine
 * @link           https://expressionengine.com/
 * @copyright      Copyright (c) 2022, ExpressionEngine
 */
$lang = array(

    //----------------------------------------
    // Required for MODULES page
    //----------------------------------------

    "pro_search_module_name" =>
    "Recherche Pro",

    "pro_search_module_description" =>
    "Recherche performante de site et utilitaire Chercher &amp; Remplacer",

    //----------------------------------------
    // Module home page
    //----------------------------------------

    "site_search" =>
    "Recherche Site",

    "settings" =>
    "Réglages",

    "build_index_url" =>
    "Construire index URL",

    "edit_settings" =>
    "Editer les Réglages",

    "no_collections_exist" =>
    "Pas de collectes existantes",

    "manage_collections" =>
    "Gérer les Collectes",

    "create_new_collection" =>
    "Créer une Nouvelle Collecte",

    "view_search_log" =>
    "Visualiser le Journal de la Recherche",

    "new_collection" =>
    "Nouvelle Collecte",

    "collection_label" =>
    "Etiquette de collecte",

    "collection_label_notes" =>
    "Nom complet de la recherche de collecte.",

    "collection_name" =>
    "Nom de collecte",

    "collection_name_notes" =>
    "Nom court de la recherche de collecte: un seul mot, aucun espace, les sous-tirets et les tirets sont autorisés.",

    "edit_preferences" =>
    "Editer les Préférences",

    "index_options" =>
    "Construire les options",

    "build_index" =>
    "Construire",

    "index" =>
    "Index",

    "all_indexes" =>
    "Tous les index",

    "index_status_empty" =>
    "Vous pouvez maintenant commencer à construire l\'index.",

    "index_out_of_date" =>
    "Index obsolète",

    "index_status_old_one" =>
    "L\'index de recherche de la collecte suivante nécessite une reconstruction:",

    "index_status_old_many" =>
    "L\'index de recherche des collectes suivantes nécessite une reconstruction:",

    "alt_click" =>
    "<em>Si ce message persiste, essayer de cliquer, en utilisant alt-clicking, sur l\'icône d/'index de la collecte .</em>",

    "build_all" =>
    "Tout construire",

    "no_entries" =>
    "Pas d\'entrées dans cette collecte.",

    "total_entries" =>
    "Total entrées",

    "both" =>
    "Les deux",

    "everything" =>
    "Toutes",

    //----------------------------------------
    // Lexicon
    //----------------------------------------

    "lexicon" =>
    "Lexique",

    "all_lexicons" =>
    "Tous les lexiques",

    "find_words" =>
    "Rechercher les mots",

    "add_words" =>
    "Ajouter les mots",

    "word_placeholder" =>
    "Entrer le mot&hellip;",

    "lexicon_status_none" =>
    "Le lexique est vide.",

    "lexicon_status_one_one" =>
    "Il y a un mot dans le lexique",

    "lexicon_status_many_one" =>
    "Il y a actuellement %s mots dans le lexique.",

    "lexicon_status_many_many" =>
    "Le lexique contient actuellement %s mots à travers %s langues.",

    "lexicon_found_none" =>
    "Impossible de trouver “%s”.",

    "lexicon_found_one" =>
    "A rechercher!",

    "lexicon_found_many" =>
    "%s mots correspondants trouvés.",

    "lexicon_add_ok" =>
    'Ajouté “%s” au lexique.',

    "lexicon_add_existing" =>
    '“%s” existe(nt) déjà dans le lexique.',

    "lexicon_add_invalid" =>
    '“%s” n\'est pas un mot valide.',

    "lexicon_removed_word" =>
    "Supprimé: “%s”.",

    //----------------------------------------
    // Edit collection page - fields
    //----------------------------------------

    "collections" =>
    "Collectes",

    "edit_collection" =>
    "Editer la collecte",

    "collection_language" =>
    "Langue",

    "collection_language_notes" =>
    "Sélectionner la langue utilisée pour cette collecte. Sélectionner une langue va ajouter les mots de cette collecte dans le lexique.",

    "collection_modifier" =>
    "Modificateur",

    "collection_modifier_notes" =>
    "Pour les recherches par mots-clés, les scores de pertinence dans cette collection seront multipliés par le modificateur. De 0.1 à 9999.",

    "channel_fields" =>
    "Champs de canal",

    "title" =>
    "Titre",

    "field" =>
    "Champ",

    "weight" =>
    "Poids",

    "excerpt" =>
    "Extrait",

    "save_collection" =>
    "Sauvegarder la collecte",

    "delete_collection_confirm" =>
    "Supprimer la collecte",

    "delete_collection_confirm_message" =>
    "Etes-vous sûr(e) de vouloir supprimer cette collecte? <strong>Cette action est irréversible!</strong>",

    "cancel_go_back" =>
    "Annuler et revenir",

    "collection_deleted" =>
    "Collecte supprimée",

    "no_searchable_channels_found" =>
    "Aucun canal avec un champ accessible à la recherche n\'a été trouvé",

    //----------------------------------------
    // Shortcuts
    //----------------------------------------

    "groups" =>
    "Groupes raccourcis",

    "group" =>
    "Groupe",

    "shortcuts" =>
    "Raccourcis",

    "new_group" =>
    "Pas de groupe de raccourcis",

    "no_groups_exist" =>
    "Nous n\'avons trouvé aucun groupe de raccourcis",

    "group_label" =>
    "Etiquette de Groupe",

    "edit_group" =>
    "Editer le groupe",

    "new_shortcut" =>
    "Nouveau raccourci",

    "edit_shortcut" =>
    "Editer le raccourci",

    "shortcut_label" =>
    "Etiquette de raccourci",

    "shortcut_name" =>
    "Nom de raccourci",

    "no_shortcuts_in_group" =>
    "Pas de raccourcis dans ce groupe",

    "add_parameter" =>
    "Ajouter un paramètre",

    "delete_group_confirm" =>
    "Supprimer le Groupe de Raccourcis",

    "delete_group_confirm_message" =>
    "Etes-vous sûr(e) de vouloir supprimer ce groupe de raccourcis? <strong>Tous les raccourcis qu\'il contient seront aussi supprimés!</strong>",

    "group_deleted" =>
    "Groupe de raccourcis supprimé",

    "delete_shortcut_confirm" =>
    "Supprimer le raccourci",

    "delete_shortcut_confirm_message" =>
    "Etes-vous sûr(e) de vouloir supprimer ce raccourci? <strong>Cette action est irréversible!</strong>",

    "shortcut_deleted" =>
    "Raccourci supprimé",

    //----------------------------------------
    // Shortcut validation
    //----------------------------------------

    "shortcut_invalid_group" =>
    "Un ID de groupe non valide a été attribué.",

    "shortcut_invalid_params" =>
    "Les paramètres sont non valides.",

    "shortcut_no_params" =>
    "Pas de paramètres attribués.",

    "shortcut_name_not_available" =>
    "Le nom n\'est pas disponible.",

    "shortcut_invalid_name" =>
    "Le nom est non valide. Utilisez seulement des caractères alphanumériques.",

    "shortcut_no_name" =>
    "Pas de nom attribué.",

    //----------------------------------------
    // Find & Replace
    //----------------------------------------

    "find_replace" =>
    "Chercher &amp; Remplacer",

    "channels" =>
    "Canaux",

    "categories" =>
    "Catégories",

    "select_all" =>
    "Tout sélectionner",

    "find" =>
    "Chercher",

    "show_preview" =>
    "Afficher la prévisualisation",

    "replace" =>
    "Remplacer par",

    "replace_selected" =>
    "Remplacer les sélections",

    "matching_entries_for" =>
    "Entrées correspondantes pour:",

    "no_matching_entries_found" =>
    "Aucune entrée correspondante n\'a été trouvée.",

    "replaced_x_with_y" =>
    " “<strong>%s</strong>” remplacé par “<strong>%s</strong>”",

    "in_1_entry" =>
    "dans une entrée",

    "in_n_entries" =>
    "Dans <strong>%s</strong> entrées",

    "clear_replace_log" =>
    "Nettoyer remplacer le journal",

    "view_replace_log" =>
    "Visualiser remplacer le journal",

    "replace_log" =>
    "Remplacer le journal",

    "replace_date" =>
    "Date",

    "affected_entries" =>
    "Entrées&nbsp;affectées",

    "replace_log_is_empty" =>
    "Le journal de remplacement est vide",

    //----------------------------------------
    // View Log
    //----------------------------------------

    "search_log" =>
    "Journal de recherche",

    "filter_search_log" =>
    "Filtrer le journal de recherche",

    "filter" =>
    "Filtrer",

    "clear_search_log" =>
    "Nettoyer le journal de recherche",

    "search_log_cleared" =>
    "Journal de recherche effacé",

    "no_matching_rows" =>
    "Pas de rangées correspondantes",

    "export_search_log" =>
    "Exporter le journal de recherche",

    "search_log_is_empty" =>
    "Le journal de recherche est vide",

    "num_results" =>
    "#&nbsp;Résultats",

    "keywords" =>
    "Mots-clés",

    "parameters" =>
    "Paramètres",

    "show_parameters" =>
    "Afficher les paramètres",

    "collection" =>
    "Collecte",

    "search_mode" =>
    "Mode de recherche",

    "loose_ends" =>
    "Derniers détails",

    "result_page" =>
    "Page de résultats",

    "search_date" =>
    "Date de recherche",

    "member" =>
    "Membre",

    "viewing_rows" =>
    "Visualiser les lignes %s à %s sur %s lignes en tout.",

    "create_shortcut_from_log" =>
    "Créer un raccourci à partir de cette requête",

    //----------------------------------------
    // Extension settings
    //----------------------------------------

    "Réglages généraux" =>
    "Réglages globaux",

    "keywords_settings" =>
    "Réglage de filtrage par mos-clés",

    "permissions" =>
    "Permissions",

    "encode_query" =>
    "Encoder la requête",

    "encode_query_help" =>
    "Choisir soit d'encoder la requête dans l\' URI, soit d'utiliser les variables GET.",

    "default_result_page" =>
    "Page de résultats par défaut",

    "default_result_page_help" =>
    "Si une <code>page de résultats</code> n\'est pas rendue de façon explicite, la recherche va se replier sur cette page de résultats.",

    "min_word_length" =>
    "Longueur minimum de mot",

    "min_word_length_help" =>
    "Le réglage <code>ft_min_word_len</code> de votre installation MySQL. Il indique la longueur minimum des mots indexés par l\'Index FULLTEXT.
	Si vous n&rsquo;êtes pas sûr(e), laissez la sur la valeur par défaut de <strong>4</strong>.",

    "excerpt_length" =>
    "Longueur de l\'extrait",

    "excerpt_length_help" =>
    "Montant maximum de mots que contiendra l\'extrait de recherche.",

    "excerpt_hilite" =>
    "Mettre en exergue les mots-clés",

    "excerpt_hilite_help" =>
    "Sélectionner la balise à utiliser pour mettre en exergue les mots-clés dans l\'extrait de recherche.",

    "do_not_hilite" =>
    "Ne pas mettre en exergue les mots-clés",

    "use_hilite_tag" =>
    "Utiliser la balise %s",

    "title_hilite" =>
    "Mettre en exergue les mots clés dans le titre",

    "batch_size" =>
    "Taille batch de la collecte",

    "batch_size_help" =>
    "La construction d\'un index de collecte via le Tableau de bord s'organise par paquets. Entrez le nombre d\'entrées que vous souhaitez traiter dans un paquet.",

    "all_mode" =>
    "Tous les mots",

    "any_mode" =>
    "N\'importe quel mot",

    "exact_mode" =>
    "Phrase exacte",

    "auto_mode" =>
    "Automatique",

    "search_log_size" =>
    "Taille du journal de recherche",

    "search_log_size_help" =>
    "Nombre maximum de recherches à conserver dans le journal de recherche. Régler sur <code>0</code> pour désactiver la journalisation.",

    "stop_words" =>
    "Mots écartés",

    "stop_words_help" =>
    "Par défaut, MySQL garde <a href=\"http://dev.mysql.com/doc/refman/5.1/en/fulltext-stopwords.html\">une liste de mots mis à l\'écart</a>,
qui sont ignorés dans l\'index FULLTEXT. Une méthode alternative de recherche est déclenchée quand la requête de recherche contient un ou plusieurs de ces mots.",

    "ignore_words" =>
    "Ignorer les mots",

    "ignore_words_help" =>
    "Mots à isoler de façon automatique des mots-clés attribués pour des recherches non précises, par exemple: <em>the</em>",

    "filters" =>
    "Filtres",

    "filters_help" =>
    "Filtres disponibles. A décocher pour désactiver le filtre.",

    "member_group" =>
    "Groupe de membres",

    "can_manage" =>
    "Peut gérer les collectes",

    "can_manage_lexicon" =>
    "Peut gérer le lexique",

    "can_manage_shortcuts" =>
    "Peut gérer les raccourcis",

    "can_replace" =>
    "Peut chercher &amp; remplacer",

    "can_view_search_log" =>
    "Peut visualiser le journal de recherche",

    "can_view_replace_log" =>
    "Peut visualiser le journal de remplacement",

    //----------------------------------------
    // Feedback messages
    //----------------------------------------

    "changes_saved" =>
    "Changements sauvegardés",

    "collection_missing" =>
    "Aucune collecte attribuée",

    "keywords_missing" =>
    "Pas de mots-clés attribués",

    "channel_cannot_be_empty" =>
    "Merci de choisir un canal pour votre collecte.",

    "collection_name_cannot_be_empty" =>
    "Le nom court de la collecte ne peut pas être vide.",

    "collection_name_has_wrong_chars" =>
    "Le nom court de la collecte peut seulement contenir des caractères alphanumériques, tirets et/ou sous-tirets.",

    "collection_name_exists" =>
    "Ce nom court de collecte existe déjà. Merci de choisir un Nom Court unique.",

    "deleting" =>
    "Suppression en cours…",

    "optimizing" =>
    "Optimisation de l\'index en cours…",

    "working" =>
    "Travail en cours…",

    "done" =>
    "Effectué",

    "no_keywords_given" =>
    "Pas de mots-clés attribués",

    "no_fields_selected" =>
    "Pas de champs de canal sélectionnés",

    "no_entries_selected" =>
    "Pas d\'entrées sélectionnées",

    'low_search_in_third_party_folder_message' =>
    'Les fichiers Low Search ont été trouvés dans le dossier add-ons de l\'utilisateur. Nous vous recommandons de le déplacer et d\'utiliser exclusivement Pro Search.',

    //----------------------------------------
    // License
    //----------------------------------------

    "license" =>
    "Licence",

    /* END */
    '' => ''
);
