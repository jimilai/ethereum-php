<?php
require('../vendor/autoload.php');

use GuzzleHttp\Client;

$client = new Client();

$opts = [
  'json' => [
    'jsonrpc' => '2.0',
    'method' => 'web3_clientVersion',
    'params' => [],
    'id' => time()
  ]
];

$rsp = $client->post('http://localhost:8545',$opts);
echo $rsp->getBody() . PHP_EOL;

$opts = [
  'json' => [
    'jsonrpc' => '2.0',
    'method' => 'eth_accounts',
    'params' => [],
    'id' => time()
  ]
];
$rsp = $client->post('http://localhost:8545',$opts);
echo $rsp->getBody();
?>
