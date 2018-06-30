<?php
require('../vendor/autoload.php');

use Web3\Web3;
use EthTool\Callback;

$web3 = new Web3('http://localhost:8545');
$web3->clientVersion(function($err,$result){
  if($err) throw $err;
  echo $result . PHP_EOL;
});

$cb = new Callback;

$web3->clientVersion($cb);
echo $cb->result . PHP_EOL;

$web3->sha3('hello,ethereum',$cb);
echo $cb->result . PHP_EOL;

$web3->eth->gasPrice($cb);
echo $cb->result . PHP_EOL;

$web3->eth->accounts($cb);
$accounts = $cb->result;
print_r($accounts);

$web3->eth->getBalance($accounts[0],$cb);
echo $cb->result . PHP_EOL;
?>
