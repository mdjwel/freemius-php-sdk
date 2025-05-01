<?php
// Add the PHP SDK
// Ref: https://github.com/Freemius/php-sdk
require_once __DIR__ . '/freemius/Freemius.php';

define('FS__API_SCOPE', 'developer');
define('FS__API_DEV_ID', 13874);
define('FS__API_PUBLIC_KEY', 'pk_a88bf9730863cb742270d4966dccd');
define('FS__API_SECRET_KEY', 'sk_WEgnZt8$fByk^)FG?Mn(42)]FYU+7');

$plugin_id = 16034; // product ID
$plan_id = 26844;  // Plan ID
$pricing_id = 33063; // Pricing ID

// Read this document to understand the values below.
// Ref: https://freemius.com/help/documentation/api/operations/plans/create-license#request-body
for ($i = 0; $i < 20; $i++) {
	$params = array(
		"is_whitelabeled" => true,
		"is_block_features" => true,
	);

	$api = new Freemius_Api(FS__API_SCOPE, FS__API_DEV_ID, FS__API_PUBLIC_KEY, FS__API_SECRET_KEY);

	$result = $api->Api("/plugins/{$plugin_id}/plans/{$plan_id}/pricing/{$pricing_id}/licenses.json", 'POST', $params);

	echo '<pre>';
	echo $result->secret_key . "\n";
	echo '</pre>';
}