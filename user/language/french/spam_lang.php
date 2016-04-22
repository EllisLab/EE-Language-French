<?php  if ( ! defined('BASEPATH')) exit('Aucun accès direct au script autorisé');
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		https://expressionengine.com/license
 * @link		https://ellislab.com
 * @since		Version 3.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine Spam Module
 *
 * @package		ExpressionEngine
 * @subpackage	Modules
 * @category	Modules
 * @author		EllisLab Dev Team
 * @link		https://ellislab.com
 */

$lang = array(
	'spam_module_name' => 'Spam',
	'spam_module_description' => 'Filtre Spam pour les commentaires et les posts de forum',
	'spam_settings' => 'Paramètres SPAM',
	'spam_sensitivity' => 'de sensibilité',
	'spam_sensitivity_desc' => 'Pourcentage seuil à partir duquel le contenu est marqué comme SPAM. Le contenu sera marqué comme SPAM s\'il a une chance supérieure ou égale d\'être réellement du SPAM.',
	'engine_training' => 'Entraînement du moteur de SPAM',
	'spam_word_limit' => 'Limite de mots',
	'spam_word_limit_desc' => 'Nombre de mots spécifiques à stocker, pour l\'entraînement du moteur de SPAM.<br>Plus le nombre est élevé, moins la vitesse sera grande.',
	'spam_content_limit' => 'Limite de contenu',
	'spam_content_limit_desc' => 'Nombre d\'articles de contenu à utiliser, pour l\'entraînement du moteur de SPAM.<br>Plus le nombre est élevé, moins la vitesse sera grande.',
	'spam_content' => 'Contenu',
	'spam_type' => 'Type',
	'content_type' => 'Type de contenu',
	'forum_post' => 'post de forum',
	'wiki_post' => 'post de wiki',
	'comment' => 'commentaire',
	'email' => 'email',
	'spam' => 'SPAM',
	'all_spam' => 'Tout le SPAM',
	'search_spam' => 'Rechercher Spam',
	'approve_spam' => 'PAS SPAM, à approuver',
	'deny_spam' => 'SPAM, à supprimer du piège à Spam',
	'mark_selected' => 'marquer la sélection',
	'show_all_spam' => 'montrer tout le Spam',
	'spam_trap_removed' => '<b>%s</b> éléments du piège à Spam ont été supprimés et marqués comme Spam.',
	'spam_trap_approved' => '<b>%s</b> éléments du piège à Spam ont été approuvés et marqués comme acceptés.',
	'spam_settings_updated' => 'Vos paramètres de Spam ont été enregistrés.',
	'success' => 'Succès',
	'update_training' => 'Actualiser l\'entraînement',
	'update_training_desc' => 'Va télécharger des données d\'entraînement toutes fraîches depuis EllisLab, puis mettre à jour votre base de données.',
	'training_downloaded' => 'Données d\'entraînement téléchargées.',
	'training_prepared' => 'Données d\'entraînement préparées.',
	'updating_vocabulary' => 'Mise à jour du vocabulaire',
	'updating_parameters' => 'Mise à jour des paramètres',
	'training_finished' => 'Entraînement terminé.',
	'training_update_failed' => 'Impossible de mettre à jour les données d\'entraînement',
);

// EOF