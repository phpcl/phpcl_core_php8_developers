#!/bin/bash
export USAGE="Usage: lfc-tools.sh start|stop|deploy|creds"
if [[ -z "$1" ]]; then
	echo $USAGE
	exit 1
fi
if [[ "$1" = "start" || "$1" = "stop" || "$1" = "deploy" ]]; then
	php vendor/bin/linuxforcomposer.phar docker:run $1
elif [[ "$1" = "creds" ]]; then
	php vendor/phpcl/lfc_tools/generate_creds.php $2 $3 $4 $5 $6
else
	echo $USAGE
	exit 1
fi
