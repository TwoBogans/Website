#!/bin/bash

curl -s https://api.2b2t.au/v1/stats > ./stats.json;
curl -s https://api.2b2t.au/v1/balance > ./balance.json;
