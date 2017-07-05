<?php

/**
 * Imgur Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license GNU GPL-2.0
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_IMGUR'	=> 'Imgur instellingen',
	'ACP_IMGUR_CLIENT_ID' => 'Client ID',
	'ACP_IMGUR_CLIENT_SECRET' => 'Client Secret',
	'ACP_IMGUR_ALBUM'	=> 'Album',
	'ACP_IMGUR_ALBUM_EXPLAIN' => 'Album ID waarnaar alle afbeeldingen geupload worden. Laat het leeg als u wilt dat alle afbeeldingen op de standaard locatie worden geupload.',
	'ACP_IMGUR_AUTH_EXPLAIN' => 'Klik op de volgende link om de toepassing te autoriseren.',
	'ACP_IMGUR_PIN' => 'PIN',
	'ACP_IMGUR_PIN_EXPLAIN' => 'Autorisatie-pincode is nodig om toegang te krijgen tot je Imgur-account.',
	'ACP_IMGUR_SETTINGS_SAVED' => 'Imgur instellingen zijn succesvol opgeslagen.'
]);
