<?php

$lang['alpha']				= "Ce champ ne peut contenir que des caractères alphabétiques.";
$lang['alpha_dash']			= "Ce champ ne peut contenir que des caractères alphanumeriques, des soulignés (underscore) et des tirets.";
$lang['alpha_dash_space']	= "Ce champ ne peut contenir que des caractères alphanumeriques, des soulignés (underscore), des tirets et des espaces.";
$lang['alpha_dash_period']	= "Ce champ ne peut contenir que des caractères alphanumeriques, des soulignés (underscore), des tirets et des points.";
$lang['alpha_numeric']		= "Ce champ ne peut contenir que des caractères alphanumeriques.";
$lang['boolean']			= "Ce champ doit être un booléen.";
$lang['enum']				= "Ce champ doit être l'un de : %s.";
$lang['limithtml']			= "Ce champ ne peut contenir que les balises HTML suivantes : %s. Si vous voulez utiliser les sigles < et > dans votre texte et pas dans le HTML, merci d\'utiliser &amp;lt; pour remplacer < et &amp;gt; pour remplacer >.";
$lang['exact_length']		= "Ce champ doit faire exactement %s caractères de long.";
$lang['hex_color']			= "Ce champ ne peut contenir qu'un code couleur hexadécimal valide.";
$lang['integer']			= "Ce champ ne peut contenir qu'un nombre entier.";
$lang['is_natural']			= "Ce champ ne peut contenir que des nombres positifs.";
$lang['is_natural_no_zero']	= "Ce champ ne peut contenir qu'un nombre strictement supérieur à zéro.";
$lang['is_numeric']			= "Ce champ ne peut contenir que des caractères numériques.";
$lang['matches']			= "Ce champ ne correspond pas au champ %s.";
$lang['max_length']			= "Ce champ ne peut dépasser %s caractères de long.";
$lang['min_length']			= "Ce champ doit faire au moins %s caractères de long.";
$lang['numeric']			= "Ce champ ne peut contenir que des nombres.";
$lang['greater_than']		= "Ce champ doit être plus grand que : %s";
$lang['less_than']			= "Ce champ doit être moins grand que : %s";
$lang['regex']				= "Ce champ doit correspondre à l'expression régulière `%s`.";
$lang['required']			= "Ce champ est requis.";
$lang['unique']				= "Ce champ doit être unique.";
$lang['valid_base64']		= "Ce champ ne peut contenir que des caractères du jeu base64 (alphanumérique, slash, plus et égal).";
$lang['valid_email']		= "Ce champ doit contenir une adresse email valide.";
$lang['unique_email']		= "Ce champ doit contenir une adresse email unique.";
$lang['valid_emails']		= "Ce champ doit contenir des adresses email toutes valides.";
$lang['valid_ip']			= "Ce champ doit contenir une adresse IP valide.";
$lang['valid_url']			= "Ce champ doit contenir une URL valide.";
$lang['invalid_xss_check']  = 'Les données que vous avez soumises n\'ont pas passées nos contrôles de sécurité. Si vous n\'aviez pas l\'intention de soumettre ce formulaire, merci de <a href="%s">cliquer ici</a> et aucun paramètre ne sera modifié.';
$lang['no_html']  			= 'Ce champ ne peut pas contenir de HTML.';
$lang['invalid_path']		= 'Ce chemin serveur est soit invalide, soit non inscriptible.';

// Legacy form validation lib
$lang['file_exists']		= $lang['invalid_path'];
$lang['writable']			= $lang['invalid_path'];

// special and legacy things
$lang['isset']				= "Le champ %s doit avoir une valeur.";
$lang['auth_password']		= "Le mot de passe saisi est incorrect.";

// EOF