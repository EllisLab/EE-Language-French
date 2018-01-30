<?php

$lang = array(

'alphanumeric_not_allowed' =>
'Délimiteurs alphanumériques non autorisés (a-z / 0-9)',

's_required' =>
'Requis',

'select' =>
'Sélectionner',

'field_label' =>
'Intitulé du champ',

'map_elements' =>
'Éléments Map',

'create_xml' =>
'Créer le XML',

'parse_error' =>
'Erreur d\'interprétation',

'unable_to_parse_custom_fields' =>
'Impossible d\'interpréter les champs personnalisés.',

'unable_to_read_file' =>
'Impossible de lire le fichier.',

'unable_to_parse_xml' =>
'Impossible d\'interpréter le XML.',

'field_name' =>
'Nom du champ',

'custom_member_fields' =>
'Champs personnalisés de membre',

'new_fields_success' =>
'Ces champs personnalisés de membre ont été ajoutés avec succès :',

'assign_fields' =>
'Assigner les champs',

'assign_fields_blurb' =>
'Faire correspondre vos champs de données aux champs de membre ExpressionEngine',

'comma' =>
'Virgule',

'confirm_details' =>
'Confirmer les détails',

'confirm_details_blurb' =>
'Veuillez vérifier les détails ci-dessous avant d\'importer vos données. Si quoi que ce soit était incorrect, veuillez revenir en arrière et appliquer les modifications nécessaires.',

'confirm_field_assignment' =>
'Confirmer l\'affectation de champ',

'confirm_field_assignment_blurb' =>
'Veuillez vérifier votre affectation de champ. Si quoi que ce soit était incorrect, veuillez revenir en arrière et appliquer les modifications nécessaires.',

'convert_from_delimited' =>
'Convertir le texte délimité en XML',

'convert_from_delimited_blurb' =>
': vous permet de créer un fichier de membre ExpressionEngine XML depuis un fichier de texte délimité d\'une autre application',

'auto_custom_field' =>
'Créer les champs personnalisés',

'auto_custom_field_blurb' =>
'Générer automatiquement les champs de membre personnalisés pour tous les éléments qui ne correspondent pas à un champ de membre par défaut',

'default_group_id' =>
'ID de groupe par défaut',

'default_settings' =>
'Fournissez les options par défaut',

'default_settings_blurb' =>
'Paramétrez toutes les options que vous souhaitez utiliser comme valeurs par défaut. Veuillez noter que ces paramètres par défaut ne seront utilisés que lorsqu\'une valeur
n\'est pas implicitement donnée dans le fichier XML. Ces options ne vont pas écraser les données XML.',

'delimited_file_loc' =>
'Emplacement du fichier Membres',

'delimiter' =>
'Caractère délimiteur',

'delimiter_blurb' =>
'Ce caractère sépare vos données, comme une tabulation, une virgule, un symbole \'Pipe\', etc.',

'download' =>
'Télécharger le fichier XML',

'duplicate_email' =>
'Dupliquer les emails : ',

'duplicate_field_assignment' =>
'Assignement des champs de duplication : %x',

'duplicate_member_id' =>
'Dupliquer l\'ID de membre : "%x"<br />Il est recommandé de ne pas utiliser une balise &lt;member_id&gt; et d\'autoriser ExpressionEngine à incrémenter automatiquement \'member_id\'',

'duplicate_screen_name' =>
'Dupliquer screen_name : ',

'duplicate_username' =>
'Dupliquer username : ',

'enclosure' =>
'Caractère d\'encadrement',

'enclosure_blurb' =>
'Ce caractère encadre vos données s\'il existe. Dans l\'exemple suivant, le caractère d\'encadrement est un guillement double : "<br />',

'enclosure_example' =>
'"John Doe", "jdoe", "john@exemple.com", etc.',

'enclosure_label' =>
'Encadrement : ',

'encrypted_passwords' =>
'Les mots de passe sont déja encryptés',

'file_loc_blurb' =>
'L\'emplacement du fichier doit être relative au dossier du tableau de bord de votre site. Exemple : ../membres.txt, si placé à la racine du site.',

'group_id' =>
'Groupe de membres par défaut',

'import' =>
'Importer !',

'import_from_xml' =>
'Importer depuis un fichier XML',

'import_from_xml_blurb' =>
': vous permet d\'importer des membres depuis un fichier XML dans le format XML de membre ExpressionEngine',

'import_info' =>
'Information d\'importation',

'import_success' =>
'Membres importés avec succès',

'import_success_blurb' =>
'Vos données de membre XML ont été importées dans la base de données avec succès !',

'info_blurb' =>
'Pour utiliser cet utilitaire, vous devez d\'abord déposer sur votre serveur le fichier contenant les données de membre exportées, puis saisir l\'emplacement du fichier.',

'invalid_element' =>
'Element manquant ou invalide - &lt;member&gt; attendu',

'invalid_path' =>
'CHEMIN INVALIDE ! Le fichier n\'existe pas : ',

'invalid_tag' =>
'Balise XML invalide !',

'invalid_xml' =>
'ïl y a un problème avec votre fichier XML. Veuillez consulter la documentation sur le format de fichier XML de membre ExpressionEngine.',

'language' =>
'Langue par défaut',

'timezone' =>
'Fuseau horaire par défaut',

'member_fields' =>
'Champs membre',

'member_id_warning' =>
'ATTENTION : Si vous avez une balise &lt;member_id&gt; dans votre XML, les membres existants utilisant la même valeur pour \'member_id\' seront ÉCRASÉS ! Soyez prudents !',

'member_import_utility' =>
'Utilitaire d\'importation de membre',

'member_import_welcome' =>
'Cet utilitaire vous permet d\'importer des membres depuis d\'autres systèmes vers ExpressionEngine',

'missing_birthday_child' =>
'Eléments enfants de &lt;anniversaire&gt; manquants : &lt;jour&gt; &lt;mois&gt; &lt;année&gt; attendus',

'missing_email_field' =>
'Vous devez assigner un champ pour "email"',

'missing_screen_name_field' =>
'Vous devez assigner un champ pour "screen_name"',

'missing_username_field' =>
'Vous devez assigner un champ pour "username"',

'no' =>
'Non',

'no_delimiter' =>
'Vous devez fournir un caractère délimiteur avec l\'option "%x".',

'no_file_submitted' =>
'Vous devez saisir un chemin relatif vers votre fichier de données Membres',

'no_read_access' =>
'Impossible de lire le fichier : ',

'none' =>
'aucun',

'not_enough_fields' =>
'Vous devez avoir au moins trois champs : username, screen_name, et adresse email',

'option' =>
'Option',

'other' =>
'Autre :',

'password_field_warning' =>
'Note : Si vous ne faîtes correspondre aucun de vos champs à "Mot de passe", des mots de passes générés aléatoirement seront assignés et les utilisateurs importés devront utiliser le lien "Mot de passe oublié" pour se connecter.',

'password_warning' =>
'Avertissement mot de passe',

'password_warning_blurb' =>
'Si aucun mot de passe n\'a été fourni, vos membres importés devront utiliser le lien "Mot de passe oublié" pour se connecter. De plus, si vos paramètres de chiffrement (sha1/md5) ne correspondent pas au type de chiffreement de vos données, les mots de passes ne fonctionneront pas, et les membres affectés devront également utiliser le lien "Mot de passe oublié". Les mots de passe de type texte seront chiffré pour vous durant l\'importation.',

'plaintext_passwords' =>
'Les mots de passes sont en clair',

'required_fields' =>
'* Identifiant, pseudo et adresse email sont requis.',

'tab' =>
'Onglet',

"date_format" =>
"Format de date",

"time_format" =>
"Format d\'heures",

"24_hour" =>
"24 heures",

"12_hour" =>
"12 heures avec AM/PM",

"include_seconds" =>
"Inclure les secondes dans le format d'heures",

'timezones' =>
'Fuseau horaire par défaut',

'total_members_imported' =>
'Un total de %x membres ont été importés.',

'value' =>
'Valeur',

'view_in_browser' =>
'Voir dans le navigateur',

'view_xml' =>
'Voir le XML',

'within_user_record' =>
'au sein de l\'enregistrement utilisateur',

'xml_file' =>
'Fichier XML',

'xml_file_loc' =>
'Emplacement du fichier XML Membres',

'xml_file_loc_blurb' =>
'L\'emplacement du fichier doit être relative au dossier du tableau de bord de votre site. Exemple : ../membres.xml, si placé à la racine du site.',

'xml_imported' =>
'Les données XML de membre ont été importées',

'yes' =>
'Oui',

'your_data' =>
'Vos données',

'order' =>
'Ordre',

'is_reg_form' =>
'Formulaire d\'inscription',

'is_public' =>
'Public',

'is_required' =>
'Requis',


''=>''
);

/* End of file member_import_lang.php */
/* Location: ./system/expressionengine/language/french/member_import_lang.php */