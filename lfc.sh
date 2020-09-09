#!/bin/bash
DIR=`pwd`
TOOLS_DIR=$DIR/vendor/phpcl/lfc_tools
LFC_DIR=$DIR/vendor/linuxforphp/linuxforcomposer/bin
export USAGE="Usage: lfc.sh start|stop|deploy|creds"
if [[ -z "$1" ]]; then
	echo $USAGE
	exit 1
fi
if [[ "$1" = "start" || "$1" = "stop" || "$1" = "deploy" ]]; then
	php $LFC_DIR/linuxforcomposer.phar docker:run $1
elif [[ "$1" = "creds" ]]; then
	php $TOOLS_DIR/generate_creds.php $2 $3 $4 $5 $6
else
	echo $USAGE
	exit 1
fi
