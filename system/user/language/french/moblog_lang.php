<?php

$lang = array(

'moblog_module_name' => 'Moblog',

'moblog' => 'Moblog',

'moblogs' => 'moblog', // ancien: Moblogs

'moblogs_removed' => 'Moblogs supprimés',

'moblogs_removed_desc' => '%d moblogs ont été supprimés.',

'create_moblog' => 'Créer un Moblog',

'edit_moblog' => 'Modifier un Moblog',

'check_now' => 'Vérifier maintenant',

'moblog_name' => 'Nom du Moblog',

'moblog_short_name' => 'Nom court',

'moblog_check_interval' => 'Intervalle entre les vérifications',

'moblog_check_interval_desc' => 'Affecte la balise {exp:moblog:check}. La valeur est exprimée en minutes. Vous pouvez utiliser des fractions décimales, ex: 1.5 pour 1 minute et 30 secondes',

'moblog_enabled' => 'Moblog activé ?',

'file_archive_mode' => 'Mode archive de fichiers activé ?',

'file_archive_mode_desc' => 'Si positionné à <b>Oui</b>, ce moblog ne soumettra pas des articles de canal. Il ne fera qu\'enregistrer vos fichiers dans le répertoire de téléchargement précisé.',

'channel_entry_settings' => 'Paramètres d\'articles de canal',

'moblog_channel_desc' => 'Si aucun canal n\'est choisi, ce moblog ne soumettra pas des articles de canal. Il ne fera qu\'enregistrer vos fichiers dans l\'emplacement de téléchargement précisé.',

'cat_id' => 'Catégories par défaut',

'field_id' => 'Champ par défaut',

'default_status' => 'Statut par défaut',

'author_id' => 'Auteur par défaut',

'moblog_sticky_entry' => 'Epingler l\'article ?',

'moblog_allow_overrides' => 'Autoriser les contournements par email ?',

'moblog_allow_overrides_subtext' => 'Si positionné à <b>Oui</b>, les paramètres par défaut ci-dessus pourront être écrasés dans l\'email.',

'moblog_template' => 'Modèle Moblog',

'moblog_email_settings' => 'Paramètres Email',

'moblog_file_settings' => 'Paramètres de fichier',

'save_moblog' => 'Enregistrer le Moblog',

'pop3' => 'POP3',

'imap' => 'IMAP',

'moblog_email_type' => 'Type de compte email',

'moblog_email_address' => 'Adresse Email',

'moblog_email_server' => 'Serveur mail de réception',

'server_example' => 'Ex: mail.yoursite.com',

'moblog_email_login' => 'Identifiant compte email',

'moblog_email_password'	=> 'Mot de passe compte email',

'data_encrypted' => 'Donnée chiffrée lors de l\'enregistrement',

'moblog_subject_prefix'	=> 'Préfixe d\'objet Moblog',

'moblog_subject_subtext'	=> 'Laissez à blanc pour accepter automatiquement tous les emails.',

'moblog_auth_required' => 'Autorisation obligatoire dans l\'email ?',

'moblog_auth_subtext' => 'Si positionné à <b>Oui</b>, seuls les emails contenant les informations identifiant/mot de passe verront leurs fichiers téléchargés ou les articles soumis.',

'moblog_auth_delete' => 'Supprimer les emails moblog non autorisés ?',

'moblog_auth_delete_subtext' => 'Quand l\'autorisation est obligatoire et que les emails ratent le processus d\'autorisation, ils seront supprimés.',

'moblog_valid_from' => 'Emails \'De\' valides pour ce moblog',

'valid_from_subtext' => 'Adresses email à partir desquelles vous enverrez ces emails moblog.  Laissez à blanc pour accepter automatiquement tous les emails.  Séparez chaque adresse avec un espace ou un retour à la ligne.',

'moblog_ignore_text' => 'Texte email ignoré',

'ignore_text_subtext' => 'Copiez ici le texte qui devra être supprimé des emails moblog. Particulièrement utile pour supprimer les signatures Hotmail et Yahoo.',

'moblog_upload_directory' => 'Répertoire de téléchargement pour les fichiers',

'moblog_image_size' => 'Taille d\'image',

'moblog_thumb_size' => 'Taille de miniature',

'moblog_created' => 'Moblog créé',

'moblog_created_desc' => 'Le moblog <b>%s</b> a été créé.',

'moblog_not_created' => 'Impossible de créer le moblog',

'moblog_not_created_desc' => 'Nous n\'avons pas pu créer ce moblog, merci de vérifier et de corriger les erreurs ci-dessous.',

'moblog_updated' => 'Moblog mis à jour',

'moblog_updated_desc' => 'Le moblog <b>%s</b> a été mis à jour.',

'moblog_not_updated' => 'Impossible de mettre à jour le moblog',

'moblog_not_updated_desc' => 'Nous n\'avons pas pu mettre à jour ce moblog, merci de vérifier et de corriger les erreurs ci-dessous.',

'moblog_check_failure' => 'Impossible de vérifier le moblog',

'moblog_check_success' => 'Moblog vérifié avec succès',

'emails_done' => 'Emails récupérés :',

'entries_added' => 'Articles ajoutés :',

'attachments_uploaded' => 'Pièces jointes téléchargées :',

'invalid_upload_directory' => 'Répertoire de téléchargement invalide',

'upload_directory_unwriteable' => 'Impossible d\'écrire le fichier dans le répertoire de téléchargement',

'invalid_moblog' => 'Sélection moblog invalide',

'emails_done' => 'Emails récupérés :',

'entries_added' => 'Articles ajoutés :',

'attachments_uploaded' => 'Pièces jointes téléchargées :',

// ------------------------
// Processing Errors
// ------------------------

'no_cache' => 'Impossible d\'accéder au cache moblog',

'moblog_current' => 'Moblog est à jour',

'no_server_connection' => 'Impossible de se connecter au serveur d\'email',

'invalid_server_response' => 'Réponse serveur invalide',

'invalid_username' => 'Identifiant invalide',

'invalid_password' => 'Mot de passe invalide',

'unable_to_retrieve_emails' => 'Informations email non disponibles',

'no_valid_emails' => 'Aucun email valide trouvé',

'unable_to_parse' => 'Impossible de traiter l\'email.',

'authorization_failed' => 'L\'autorisation email a échoué car :',

'undeletable_email' => 'Impossible de supprimer l\'email',

'invalid_channel' => 'Canal invalide',

'invalid_file_data' => 'Données de pièce jointe invalides',

'error_writing_attachment' => 'Erreur lors de l\'écriture de la pièce jointe',

'unable_to_resize' => 'Impossible de redimensionner l\'image',

''=>''
);

// EOF
