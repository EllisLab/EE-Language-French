<?php

$lang = array(

//----------------------------
// MT Import
//----------------------------

"mt_import_utility" =>
"Utilitaire d'importation depuis Movable Type",

"mt_import_welcome" =>
"Cet utilitaire vous permet d'importer des données de Movable Type dans ExpressionEngine",

"mt_import_disclaimer" =>
"Si vous n'utilisez pas Movable Type vous n'avez pas besoin de cet utilitaire.",

"file_blurb" =>
"Pour pouvoir utiliser cet utilitaire, vous devez au préalable déposer le fichier contenant les articles exportés depuis MT sur votre serveur, et ensuite saisir l'emplacement de ce fichier.",

"file_blurb2" =>
"L'emplacement du fichier doit être relatif au dossier du tableau de bord de votre site. (Exemple: ../fichier_mt.txt), si celui ci est placé à la racine du site.",

"field_blurb" =>
"Le format d'export MT ne spécifie pas à quel canal un article appartient. Ainsi, si vous avez plusieurs canaux, vous devrez séparer les articles pour chaque canal dans des fichiers distincts et les importer individuellement.",

"import_info" =>
"Information d'importation",

"file_info" =>
"Emplacement du fichier Movable Type",

"channel_select" =>
"Sélectionnez le canal dans lequel importer vos articles.",

"admin_select" =>
"Auteur par défaut des articles",

"status_select" =>
"Statut par défaut des articles",

"format_select" =>
"Format par défaut des articles",

"category_select" =>
"Catégories",

"auto_create_nosub" =>
"Créer automatiquement les catégories (pas de sous-catégories)",

"auto_create_sub" =>
"Créer automatiquement les catégories (avec sous-catégories)",

"submit_info" =>
"Démarrer l'importation des articles",

"empty_field_warning" =>
"Vous n'avez pas rempli tous les champs",

"invalid_path" =>
"Fichier non trouvé.",

"invalid_file" =>
"Le fichier ne contient aucun article exporté depuis MT.",

'import_complete' =>
"Importation terminée",

"total_channel_entries" =>
"Nombre d'articles de canal entrés :",

"total_channel_comments" =>
"Nombre de commentaires entrés :",

"total_categories_entered" =>
"Nombre de catégories créées :",

"more_importing_info" =>
"Si vous avez d'autres articles MT à importer, cliquez sur le lien suivant. Si vous avez fini l'importation, veuillez recalculer vos statistiques.",

"return_to_import" =>
"Retourner à la page d'importation MT",

"you_are_done_importing" =>
"Le processus d'importation des articles s'est déroulé avec succès !",

"recalculate_statistics" =>
"Recompter les statistiques",

"click_to_reset_statistics" =>
"Cliquez ici pour mettre à jour les statistiques de canal",

"you_are_done_importing" =>
"Le processus d'importation des articles s'est déroulé avec succès !",

'no_channels' =>
"Aucun canaux disponibles.",

'open' =>
"Ouvert",

'closed' =>
"Fermé",

'excerpt_select' =>
"Champ pour le contenu EXTRAIT",

'body_select' =>
"Champ pour le contenu CORPS DU TEXTE",

'extended_select' =>
"Champ pour le contenu TEXT ETENDU",

'keywords_select' =>
"Champ pour le contenu MOT CLÉS",

'create_comment_members' =>
"Créer les membres pour les commentateurs ?",

'default_group' =>
"Groupe par défaut de ces nouveaux membres",

'use_author_text' =>
"(Si vous sélectionnez ceci, l'utilitaire d'import va tenter d'effectuer une correspondance entre l'auteur de l'article en cours d'importation et les membres actuellement dans le système. Si aucune correspondance n'est trouvée, le membre par défaut sélectionné ci-dessus sera utilisé à la place.)",

'use_status_text' =>
"(Si vous sélectionnez ceci, l'utilitaire d'import va faire correspondre le statut MT au statut EE équivalent. Publier (MT) => Ouvert (EE); Brouillon (MT) => Fermé (EE); Si vous ne choisissez pas ceci, le statut par défaut ci-dessus sera utilisé pour tous les articles.)",

'use_format_text' =>
"(Si vous sélectionnez ceci, l'utilitaire d'importation va tenter d'effectuer une correspondance entre le paramètre CONVERTIR LES RETOURS de l'article en cours d'importation et les options de formatage disponibles. Si aucune correspondance n'est trouvée, le format par défaut sélectionné ci-dessus sera utilisé à la place.)",

'use_format_text2' =>
"<strong>Note :</strong> Une valeur de <code>1</code> sera considérée comme étant 'Auto &lt;br /&gt;', et une valeur de <code>0</code> comme 'Aucun'. Une valeur de '<code>__default__</code>' sera désigné comme le format par défaut sélectionné ci-dessus.",

'create_commenters_text' =>
"(Si vous sélectionnez ceci, l'utilitaire d'importation va créer un nouveau membre pour chaque commentateur unique. Un mot de passe aléatoire sera généré pour son compte, et le membre devra donc utiliser le lien \"Mot de passe oublié ?\" avec son adresse email pour recevoir un nouveau mot de passe et accéder à son compte.)",


'use_status' =>
"Utiliser le statut de l'article ?",

'use_format' =>
"Utiliser les paramètres de CONVERSION DE RETOURS lorsque c'est possible ?",

'use_author' =>
"Utiliser l'auteur de l'article lorsque c'est possible ?",

'comment_group' =>
"Assignation du groupe de membre du commentateur",

'no_member_groups' =>
"Aucun groupes de membres disponibles",

'unable_to_import' =>
"Impossible d'importer les articles",

'none' =>
" - Aucun -",

'members_created' =>
"Membres créés :",

'field_for_extra_field' =>
"Champ pour",




''=>''
);

/* End of file lang.mt_import.php */
/* Location: ./system/expressionengine/language/french/lang.mt_import.php */