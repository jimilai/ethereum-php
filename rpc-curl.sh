#!/bin/bash
echo '=> web3_clientVersion'
curl -X POST http://localhost:8545 -s -d '{"jsonrpc":"2.0","method":"web3_clientVersion","params":[]}' | jq

echo '=> web3_sha3'
curl -X POST http://localhost:8545 -s -d '{"jsonrpc":"2.0","method":"web3_sha3","params":["hello,ethereum"]}' | jq
