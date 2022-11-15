#!/bin/bash

git add .
git commit -m "local changes"
git push
git pull
docker container rm -f legacy-web
docker image rm legacy-web
./_build-and-run.sh

