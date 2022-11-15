
#!/bin/bash

HROOT=/home/debian/old-web-data
CROOT=/var/www/html
CNAME=legacy-web
docker build -t $CNAME .
docker run \
	-d \
	--restart=always \
	-p 28080:80/tcp \
	-p 28443:443/tcp \
	-v $HROOT/stats.json:$CROOT/stats.json \
	-v $HROOT/balance.json:$CROOT/balance.json \
	--name $CNAME $CNAME
