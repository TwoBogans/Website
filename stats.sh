#!/bin/bash

curl -s https://api.2b2t.au/v1/stats > /home/debian/old-web-data/stats.json;
curl -s https://api.2b2t.au/v1/balance > /home/debian/old-web-data/balance.json;
cd /home/debian/old-web-data
./_rebuild.sh
echo "crontab" > test.txt
