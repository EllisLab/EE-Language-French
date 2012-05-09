<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

if ( ! function_exists('admin_notify_mailinglist_title'))
{
	function admin_notify_mailinglist_title()
	{
return <<<EOF
Quelqu'un s'est inscrit à votre liste de diffusion
EOF;
	}
}

if ( ! function_exists('admin_notify_mailinglist'))
{
	function admin_notify_mailinglist()
	{
return <<<EOF
Une nouvelle inscription à la liste de diffusion a été accept.

Adresse email : {email}
Liste de diffusion : {mailing_list}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

if ( ! function_exists('admin_notify_entry_title'))
{
	function admin_notify_entry_title()
	{
return <<<EOF
Un nouvel article a été publié
EOF;
	}
}

if ( ! function_exists('admin_notify_entry'))
{
	function admin_notify_entry()
	{
return <<<EOF
Un nouvel article a été publié dans le canal suivant :
{channel_name}

Le titre de l'article est :
{entry_title}

Publié par : {name}
Email: {email}

Pour lire cet article, veuillez visiter : 
{entry_url}

EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

if ( ! function_exists('admin_notify_reg_title'))
{
	function admin_notify_reg_title()
	{
return <<<EOF
Notification d'inscription d'un nouveau membre
EOF;
	}
}

if ( ! function_exists('admin_notify_reg'))
{
	function admin_notify_reg()
	{
return <<<EOF
La personne suivante a soumise une nouvelle inscription comme membre  : {name}

À : {site_name}

URL de votre tableau de bord : {control_panel_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_comment_title'))
{
	function admin_notify_comment_title()
	{
return <<<EOF
Un commentaire a été publié
EOF;
	}
}

if ( ! function_exists('admin_notify_comment'))
{
	function admin_notify_comment()
	{
return <<<EOF
Un commentaire a été publié pour le canal suivant :
{channel_name}

Le titre de l'article est :
{entry_title}

Situé à : 
{comment_url}

Publié par : {name}
Email : {email}
URL : {url}
Localisation : {location}

{comment}
EOF;
	}
}



//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mbr_activation_instructions_title'))
{
	function mbr_activation_instructions_title()
	{
return <<<EOF
Votre code d'activation se trouve inclus
EOF;
	}
}

if ( ! function_exists('mbr_activation_instructions'))
{
	function mbr_activation_instructions()
	{
return <<<EOF
Merci pour votre inscription comme membre.

Pour activer votre nouveau compte, veuillez vous rendre à l'adresse suivante :

{unwrap}{activation_url}{/unwrap}

Merci !

{site_name}

{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

if ( ! function_exists('forgot_password_instructions_title'))
{
	function forgot_password_instructions_title()
	{
return <<<EOF
Information de connexion
EOF;
	}
}

if ( ! function_exists('forgot_password_instructions'))
{
	function forgot_password_instructions()
	{
return <<<EOF
{name},

Pour réinitialiser votre mot de passe, veuillez vous rendre à la page suivante :

{reset_url}

Votre mot de passe sera automatiquement réinitialisé, et un nouveau mot de passe vous sera envoyé par email.

Si vous ne souhaitez pas réinitialiser votre mot de passe, ignorez ce message. Il expirera dans 24 heures.

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

if ( ! function_exists('reset_password_notification_title'))
{
	function reset_password_notification_title()
	{
return <<<EOF
Nouvelles informations de connexion
EOF;
	}
}

if ( ! function_exists('reset_password_notification'))
{
	function reset_password_notification()
	{
return <<<EOF
{name},

Voici vos nouvelles informations de connexion :

Nom d'utilisateur : {username}
Mot de passe : {password}

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

if ( ! function_exists('validated_member_notify_title'))
{
	function validated_member_notify_title()
	{
return <<<EOF
Votre compte de membre a été activé
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Votre compte de membre a été activé et est pr^èt à l'emploi. 

Merci ! 

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

if ( ! function_exists('decline_member_validation_title'))
{
	function decline_member_validation_title()
	{
return <<<EOF
Votre compte de membre a été refusé
EOF;
	}
}

if ( ! function_exists('decline_member_validation'))
{
	function decline_member_validation()
	{
return <<<EOF
{name},

Nous sommes désolés mais notre équipe à décidé de ne pas valider votre inscription.

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mailinglist_activation_instructions_title'))
{
	function mailinglist_activation_instructions_title()
	{
return <<<EOF
Confirmation email
EOF;
	}
}

if ( ! function_exists('mailinglist_activation_instructions'))
{
	function mailinglist_activation_instructions()
	{
return <<<EOF
Merci de vous être inscrit à la liste de diffusion "[mailing_list}" !

Veuillez cliquer sur le lien ci-dessous pour confirmer votre email.

Si vous ne souhaitez pas être ajouté à notre liste, ignorez cet email

{unwrap}{activation_url}{/unwrap}

Merci !

{site_name}
EOF;
	}
}




//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

if ( ! function_exists('comment_notification_title'))
{
	function comment_notification_title()
	{
return <<<EOF
Quelqu'un a répondu à votre commentaire
EOF;
	}
}

if ( ! function_exists('comment_notification'))
{
	function comment_notification()
	{
return <<<EOF
Quelqu'un a répondu à l'article auquel vous vous êtes abonné à :
{channel_name}

Le titre de l'article est :
{entry_title}

Vous pouvez voir le commentaire à l'adresse suivante  :
{comment_url}

{comment}

Pour ne plus recevoir de notifications pour ce commentaire, cliquez ici :
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_gallery_comment_title'))
{
	function admin_notify_gallery_comment_title()
	{
return <<<EOF
Quelqu'un a répondu à votre commentaire
EOF;
	}
}

if ( ! function_exists('admin_notify_gallery_comment'))
{
	function admin_notify_gallery_comment()
	{
return <<<EOF

Vous avez reçu un nouveau commentaire pour la galerie photo suivante :
{gallery_name}

Le titre de l'article est :
{entry_title}

Situé à : 
{comment_url}

{comment}
EOF;
	}
}


//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

if ( ! function_exists('gallery_comment_notification_title'))
{
	function gallery_comment_notification_title()
	{
return <<<EOF
Quelqu'un a répondu à votre commentaire
EOF;
	}
}

if ( ! function_exists('gallery_comment_notification'))
{
	function gallery_comment_notification()
	{
return <<<EOF
Quelqu'un a répondu à l'article photo auquel vous vous êtes abonné à : :
{gallery_name}

Vous pouvez voir le commentaire à l'adresse suivante ::
{comment_url}

{comment}

Pour ne plus recevoir de notifications pour ce commentaire, cliquez ici :
{notification_removal_url}
EOF;
	}
}




//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

if ( ! function_exists('admin_notify_forum_post_title'))
{
	function admin_notify_forum_post_title()
	{
return <<<EOF
Quelqu'un a publié un message dans {forum_name}
EOF;
	}
}

if ( ! function_exists('admin_notify_forum_post'))
{
	function admin_notify_forum_post()
	{
return <<<EOF
{name_of_poster} a publié un nouveau message dans {forum_name}

Le titre du fil est :
{title}

Le message peut être lu à :
{post_url}

{body}
EOF;
	}
}



//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

if ( ! function_exists('forum_post_notification_title'))
{
	function forum_post_notification_title()
	{
return <<<EOF
Quelqu'un a publié un message dans {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_post_notification'))
{
	function forum_post_notification()
	{
return <<<EOF
Quelqu'un a publié un message dans le fil auquel vous vous êtes abonné à :
{forum_name}

Le titre du fil est :
{title}

Le message peut être lu à :
{post_url}

{body}

Pour ne plus recevoir de notifications pour ce commentaire, cliquez ici :
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

if ( ! function_exists('private_message_notification_title'))
{
	function private_message_notification_title()
	{
return <<<EOF
Quelqu'un vous a envoyé un message privé
EOF;
	}
}

if ( ! function_exists('private_message_notification'))
{
	function private_message_notification()
	{
return <<<EOF

{recipient_name},

{sender_name} vous a envoyé un message privé intitulé '{message_subject}'.

Vous pouvez consulter les messages privés en vous connectant à votre compte et en accédant à votre boîte de réception à :
{site_url}

Pour ne plus recevoir de notifications pour les messages privés, désactivez l'option dans vos paramètres email.
EOF;
	}
}



/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/
if ( ! function_exists('pm_inbox_full_title'))
{
	function pm_inbox_full_title()
	{
return <<<EOF
La boîte de réception de vos messages privés est pleine
EOF;
	}
}

if ( ! function_exists('pm_inbox_full'))
{
	function pm_inbox_full()
	{
return <<<EOF
{recipient_name},

{sender_name} vient de tenter de vous envoyer un message privé,
mais votre boîte de réception est pleine, dépassant le maximum
autorisé de {pm_storage_limit}.

Veuillez vous connecter et supprimer les messages non désirés
de votre boîte de réception à :
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/
if ( ! function_exists('forum_moderation_notification_title'))
{
	function forum_moderation_notification_title()
	{
return <<<EOF
Notification de modération dans {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_moderation_notification'))
{
	function forum_moderation_notification()
	{
return <<<EOF
{name_of_recipient}, un modérateur a {moderation_action} votre fil.

Le titre du fil est :
{title}

Le fil peut être consulté à :
{thread_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/
if ( ! function_exists('forum_report_notification_title'))
{
	function forum_report_notification_title()
	{
return <<<EOF
Message signalé dans {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_report_notification'))
{
	function forum_report_notification()
	{
return <<<EOF
{reporter_name} a signalé un message publié par {author} dans :
{forum_name}

La raison de ce signalement :
{reasons}

Notes additionnelles de {reporter_name}:
{notes}

Le message peut être consulté à :
{post_url}

Contenu du message signalé :
{body}
EOF;
	}
}



/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/
if ( ! function_exists('offline_template'))
{
	function offline_template()
	{
return <<<EOF
<html>
<head>

<title>Système arrêté</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Système arrêté</h1>

<p>Ce site est actuellement indisponible</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/
if ( ! function_exists('message_template'))
{
	function message_template()
	{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/
if ( ! function_exists('mailinglist_template'))
{
	function mailinglist_template()
	{
return <<<EOF
{message_text}

Pour vous désabonner de la liste de diffusion, cliquez ici :
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
	}
}




/* End of file email_data.php */
/* Location: ./system/expressionengine/language/french/email_data.php */