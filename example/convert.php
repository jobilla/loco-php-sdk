<?php
/**
 * Example XLIFF -> YAML conversion via the Loco REST API.
 * Extracts a single language from a XLIFF file and renders it to a single YAML file.
 */
require __DIR__.'/../vendor/autoload.php';

use Loco\Http\ApiClient;
use Loco\Http\Response\ConvertResponse;

$client = ApiClient::factory();

/* @var $result ConvertResponse */
$result = $client->Convert( array(
    'src'    => file_get_contents(__DIR__.'/sample.xlf'),
    'from'   => 'xlf',
    'to'     => 'yml',
    'locale' => 'es',
) );

echo (string) $result;