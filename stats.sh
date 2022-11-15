#!/bin/bash

curl -s localhost:4567/v1/stats > /home/hausemaster/anarchyweb/stats.json;
curl -s localhost:4567/v1/balance > /home/hausemaster/anarchyweb/balance.json;
