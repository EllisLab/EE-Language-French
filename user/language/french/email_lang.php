<?php

$lang = array(

//----------------------------
// Email
//----------------------------

"email_module_name" =>
"Email",

"email_module_description" =>
"Module d'email utilisateur",

'message_required' =>
"Le message de l'email est requis",

'em_banned_from_email' =>
"L'adresse email de l'expéditeur que vous avez saisie est exclue.",

'em_banned_recipient' =>
"Un ou plusieurs de vos destinataires emails sont exclus.",

'em_invalid_recipient' =>
"Un ou plusieurs de vos destinataires emails sont invalides.",

'em_no_valid_recipients' =>
"Votre email n'a pas de destinataires valide.",

'em_sender_required' =>
"Une adresse d'expéditeur valide est requise",

"em_unauthorized_request" =>
"Vous n'êtes pas autorisé à exécuter cette action",

'em_limit_exceeded' =>
"Vous avez dépassé le nombre d'emails autorisés à être envoyés par jour.",

'em_interval_warning' =>
"Vous ne pouvez soumettre les formulaires d'email que toutes les %s secondes",

"em_email_sent" =>
"Votre message email a été expédié.",

'em_no_preview_template_specified' => 'La balise email ne contient pas l\'emplacement de votre modèle de prévisualisation.',

'email_must_be_array' =>
"La méthode de validation des emails doit être passée dans une matrice (array).",

'email_invalid_address' =>
"Adresse email invalide : %s",

'email_attachment_missing' =>
"Impossible de localiser la pièce jointe suivante : %s",

'email_attachment_unreadable' =>
"Impossible d\'ouvrir cette pièce jointe : %s",

'email_no_recipients' =>
"Vous devez inclure des destinataires : À, Cc, Cci",

'email_send_failure_phpmail' =>
"Impossible d\'envoyer un email avec PHP mail(). Votre serveur n\'est sans doute pas configuré pour envoyer des emails avec cette méthode.",

'email_send_failure_sendmail' =>
"Impossible d\'envoyer un email avec PHP Sendmail. Votre serveur n\'est sans doute pas configuré pour envoyer des emails avec cette méthode.",

'email_send_failure_smtp' =>
"Impossible d\'envoyer un email avec PHP SMTP. Votre serveur n\'est sans doute pas configuré pour envoyer des emails avec cette méthode.",

'email_sent' =>
"Votre message a été envoyé avec succès en utilisant le protocol suivant : %s",

'email_no_socket' =>
"Impossible d\'ouvrir un socket vers Sendmail. Merci de vérifier vos paramètres.",

'email_no_hostname' =>
"Vous n\'avez pas indiqué de nom d\'hôte SMTP.",

'email_no_port' =>
"Vous n\'avez pas indiqué de port SMTP.",

'email_smtp_error' =>
"L\'erreur SMTP suivante est survenue : %s",

'email_no_smtp_unpw' =>
"Erreur : vous devez inscrire un nom d\'utilisateur et un mot de passe SMTP.",

'email_failed_smtp_login' =>
"Impossible d\'envoyer la commande AUTH LOGIN. Erreur : %s",

'email_smtp_auth_un' =>
"Impossible d\'authentifier le nom d\'utilisateur. Erreur : %s",

'email_smtp_auth_pw' =>
"Impossible d\'authentifier le mot de passe. Erreur : %s",

'email_smtp_data_failure' =>
"Impossible d\'envoyer les données : %s",

'email_exit_status' =>
"Code statut de sortie : %s",


''=>''
);

// EOF