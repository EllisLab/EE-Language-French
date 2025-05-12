<?php

$lang = array(

    'fatal_error_caught' =>
    'Nous avons rencontré une erreur inattendue. Ci-dessous, voici l\'erreur exprimée en texte brut que vous pouvez communiquer au support d\'ExpressionEngine.',

    'could_not_complete' =>
    'Oups, il semblerait que l\'updater n\'ait pas pu finaliser.',

    'we_stopped_on' =>
    'Nous nous sommes arrêtés sur <b>%s</b>.',

    'manually_rollback' =>
    '<a href="%s">Cliquer ici</a> pour obtenir des instructions afin de revenir en arrière manuellement depuis ce point.',

    'troubleshoot' =>
    'Dépanner puis <a href="#" data-post-url="%s">Continuer</a>',

    'or_return_to_cp' =>
    'Ou <a href="%s">revenir au tableau de bord</a>.',

    'rollback_to' =>
    'Revenir à %s',

    'cannot_rollback' =>
    'Difficulté pour revenir en arrière? <a href="%s" target="_blank">Découvrez</a> comment restaurer l\'installation et la remise en marche.',

    'view_stack_trace' =>
    'Afficher la trace du paquet',

    'update_stopped' =>
    'Mise à jour arrêtée',

    'updating_to_from' =>
    'Mise à jour en cours de <b>%s</b> depuis %s à %s',
    
    'prepMajorUpgrade_step' =>
    'Exécution des vérifications et des préparations',

    'preflight_moving_addons_to_user_folder' =>
    'Déplacement des add-ons dans le dossier utilisateur',

    'preflight_verifying_php_version' =>
    'Vérification de la version PHP avant de mettre à jour à ExpressionEngine 7',

    'preflight_verifying_php_version_error' =>
    'ExpressionEngine 7 requiert PHP 7.2.5 ou plus récent.<br>Votre version PHP actuelle: %s',

    'preflight_step' =>
    'Contrôle en amont',

    'download_step' =>
    'Téléchargement de la mise à jour',

    'unpack_step' =>
    'Décompactage de la mise à jour',

    'updateFiles_step' =>
    'Mise à jour des fichiers',

    'updateAddons_step' =>
    'Vérification des add-ons pour les mises à jour automatiques',

    'turnSystemOn_step' =>
    'Ouvrir le système',

    'theme_folder_path_invalid' =>
    'Le chemin de dossier de fichiers suivant n\'est pas valide:

%s

Merci de le régler sur une valeur correcte tel que décrite dans <a href="%s" target="_blank">la documentation</a>.',

    'files_not_writable' =>
    'Les chemins suivants ne sont pas réinscriptibles:

%s

Pour le dépannage, consulter la documentation <a href="%s" target="_blank">Mettre à jour ExpressionEngine</a>.',

    'could_not_download' =>
    'Impossible de télécharger la mise à jour. Votre connexion internet est peut être en dérangement sinon les serveurs d\'ExpressionEngine ne sont pas accessibles.

Code de statut renvoyé: %s',

    'unexpected_mime' =>
    'Impossible de télécharger la mise à jour. Le serveur a renvoyé un type de contenu inattendu:

%s',

    'missing_signature_header' =>
    'Impossible de vérifier le fichier de téléchargement, le titre "Package-Signature" n\'a pas été trouvé au sein de la réponse.',

    'could_not_verify_download' =>
    'Impossible de vérifier la signature ou l\'intégrité du fichier de mise à jour téléchargé. Reçu le hachage (hash) :

%s',

    'try_again_later' =>
    'Réessayer dans quelques minutes ou contacter le support si le problème persiste.',

    'could_not_unzip' =>
    'Impossible de décompresser l\'archive de mise à jour. ZipArchive a renvoyé un code erreur: %s',

    'could_not_find_files' =>
    'Les fichiers suivants n\'ont pas été trouvés:

%s',

    'could_not_verify_file_integrity' =>
    'L\'intégrité des fichiers suivants n\'a pas pu être vérifiée:

%s',

    'failed_verifying_extracted_archive' =>
    'Il y a eu un problème pour verifier l\'intégrité du fichier de mise à jour qui a été extrait.

%s',

    'failed_moving_updater' =>
    'Il y a eu un problème pour mettre en oeuvre l\'updater.

%s',

    'requirements_failed' =>
    'Votre serveur a échoué pour satisfaire aux exigences de cette version d\'ExpressionEngine:

- %s

Corriger les problèmes ci-dessous et essayez de nouveau de mettre à jour .',

    'out_of_date_admin_php' =>
    'Il semblerait que votre installation d\'Expressionengine utilise un fichier obsolète, /admin.php ou /system/index.php.

Veuillez vous assurer que vous avez la dernière version de chaque fichier installé et essayez de mettre à jour une nouvelle fois.',

    'update_completed' =>
    'ExpressionEngine a été mis à jour avec succès à la version %s!',

    'update_completed_desc' =>
    'Pour observer ce qu\'il y a de nouveau au sein d\' ExpressionEngine %s, veuillez jeter un oeil au <a href=\'%s\' rel=\'external\'>journal des modifications</a>.',

    'update_rolledback' =>
    'ExpressionEngine a été rétrogradé à la version %s',

    'update_rolledback_desc' =>
    'Contacter le support si vous restez toujours confronté(e) au problème de mise à jour, sinon vous pouvez réaliser <a href=\'%s\' rel=\'external\'>une mise à jour manuelle</a>.',

    'update_version_warning' => 'Merci de vérifier le statut de système en ligne',

    'update_version_warning_desc' => 'Le statut de système est actuellement réglé sur <b>%s</b>. Si vous avez besoin de le modifier, merci de vous rendre aux réglages système.',

    '' => ''
);

// EOF
