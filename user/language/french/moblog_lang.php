<?php

$lang = array(

    'moblog_module_name' => 'Moblog',

    'moblog' => 'Moblog',

    'moblogs' => 'Moblogs',

    'moblogs_removed' => 'Moblogs supprimés',

    'moblogs_removed_desc' => '%d moblogs ont été supprimés.',

    'create_moblog' => 'Créer un Moblog',

    'edit_moblog' => 'Editer le Moblog',

    'check_now' => 'Vérifier maintenant',

    'moblog_name' => 'Nom du Moblog',

    'moblog_short_name' => 'Nom court',

    'moblog_check_interval' => 'Intervalle de temps entre les vérifications',

    'moblog_check_interval_desc' => 'Affecte la balise {exp:moblog:check}. Le nombre se règle en minutes. Vous pouvez utiliser des fractions décimales. Exemple: 1.5',

    'moblog_enabled' => 'Moblog activé?',

    'file_archive_mode' => 'Mode d\'archive de fichier activé?',

    'file_archive_mode_desc' => 'Si activé, ce moblog ne publiera pas d\'entrées de canaux. Il sauvegardera uniquement vos fichiers dans la localisation spécifiée de téléchargement.',

    'channel_entry_settings' => 'Réglages d\'entrées de canal',

    'moblog_channel_desc' => 'Si aucun canal n\'est choisi, ce moblog ne publiera pas d\'entrée de canal. Il sauvegardera uniquement vos fichiers dans la localisation spécifiée de téléchargement.',

    'cat_id' => 'Catégories par défaut',

    'field_id' => 'Champ par défaut',

    'default_status' => 'Statut par défaut',

    'author_id' => 'Auteur par défaut',

    'moblog_sticky_entry' => 'Rendre l\'entrée persistante?',

    'moblog_allow_overrides' => 'Autoriser l\'écrasement dans les emails?',

    'moblog_allow_overrides_subtext' => 'Si réglé sur oui, les réglages par défaut ci-dessus seront écrasés dans l\'email.',

    'moblog_template' => 'Modèle de Moblog',

    'moblog_email_settings' => 'Réglages d\'email',

    'moblog_file_settings' => 'Réglages de fichier',

    'save_moblog' => 'Sauvegarder le Moblog',

    'pop3' =>
    'POP3',

    'imap' =>
    'IMAP',

    'moblog_email_type' =>
    'Type de compte Email',

    'moblog_email_address' =>
    'Adresse Email',

    'moblog_email_server' =>
    'Serveur d\'email entrant',

    'server_example' =>
    'Ex: mail.votresite.com',

    'moblog_email_login' =>
    'Identifiant de compte Email',

    'moblog_email_password' =>
    'Mot de passe de ce compte Email',

    'data_encrypted' =>
    'Cryptage des données d\'envoi',

    'moblog_subject_prefix' =>
    'Préfixe de sujet Moblog',

    'moblog_subject_subtext' =>
    'Laisser vide pour accepter automatiquement tous les emails.',

    'moblog_auth_required' =>
    'Autorisation requise dans l\'email?',

    'moblog_auth_subtext' =>
    'Si activé, seuls les emails avec une information identifiant/mot de passe incluse auront accès aux fichiers téléchargés ou aux entrées publiées.',

    'moblog_auth_delete' =>
    'Supprimer les emails de Moblog non autorisés?',

    'moblog_auth_delete_subtext' =>
    'Quand une autorisation est requise et que l\'email échoue à l\'autorisation, cet email sera supprimé',

    'moblog_valid_from' =>
    'Emails \'From\' valides pour le Moblog',

    'valid_from_subtext' =>
    'Adresses emails depuis lesquelles vous adresserez les emails moblog. Laisser vide pour accepter n\'importe quelle adresse email. Séparer chaque adresse email par un espace ou un saut de ligne.',

    'moblog_ignore_text' =>
    'Ignorer le texte Email',

    'ignore_text_subtext' =>
    'Copier ici le texte que vous souhaitez voir supprimer depuis vos emails moblog. Utile pour retirer les signatures Hotmail et Yahoo.',

    'moblog_upload_directory' =>
    'Répertoire de téléchargement pour fichiers',

    'moblog_image_size' =>
    'Taille d\'image',

    'moblog_thumb_size' =>
    'Taille de miniature',

    'moblog_created' => 'Moblog créé',

    'moblog_created_desc' => 'Le moblog <b>%s</b> a été créé.',

    'moblog_not_created' => 'Impossible de créer le Mpblog',

    'moblog_not_created_desc' => 'Impossible de créer ce Moblog, merci de passer en revue et de corriger les erreurs ci-dessous.',

    'moblog_updated' => 'Moblog mis à jour',

    'moblog_updated_desc' => 'Le moblog <b>%s</b> a été mis à jour.',

    'moblog_not_updated' => 'Impossible de mettre à jour le Moblog',

    'moblog_not_updated_desc' => 'Impossible de mettre à jour ce Moblog, merci de passer en revue et de corriger les erreurs ci-dessous.',

    'moblog_check_failure' => 'Impossible de vérifier le Moblog',

    'moblog_check_success' =>
    'Moblog vérifié avec succès',

    'emails_done' =>
    'Emails Retranchés:',

    'entries_added' =>
    'Entrées ajoutées:',

    'attachments_uploaded' =>
    'Pièces jointes téléversées:',

    'invalid_upload_directory' =>
    'Répertoire de téléchargement non valide',

    'upload_directory_unwriteable' =>
    'Impossible d\'écrire le fichier dans le répertoire de téléchargement',

    'invalid_moblog' =>
    'Sélection de Moblog non valide',

    // ------------------------
    // Processing Errors
    // ------------------------

    'no_cache' =>
    'Impossible d\'accéder au cache de moblog',

    'moblog_current' =>
    'Le Moblog est en activité',

    'no_server_connection' =>
    'Impossible de se connecter au serveur d\'email',

    'invalid_server_response' =>
    'Réponse de serveur non valide',

    'invalid_username' =>
    'Nom d\'utilisateur non valide',

    'invalid_password' =>
    'Mot de passe non valide',

    'unable_to_retrieve_emails' =>
    'L\'information email a été indisponible',

    'no_valid_emails' =>
    'Aucun email valide n\'a été trouvé',

    'unable_to_parse' =>
    'Impossible de parser l\'email.',

    'authorization_failed' =>
    'L\'autorisation d\'email a échoué pour:',

    'undeletable_email' =>
    'Impossible de supprimer l\'email',

    'invalid_channel' =>
    'Canal non valide',

    'invalid_file_data' =>
    'Données de pièces jointes non valides',

    'error_writing_attachment' =>
    'Ecriture des pièces jointes non valide',

    'unable_to_resize' =>
    'Impossible de redimensionner l\'image',

    '' => ''
);

// EOF
