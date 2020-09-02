#!/bin/bash
if [[ -z $1 ]]; then
	echo "Usage: disable.sh FUNCTION [--enable | --disable]"
	exit 1
fi
export FUNCTION=$1
export ACTION="enable"
echo "Creating backup of php.ini in /tmp just in case! ..."
FN=/tmp/php.ini.`date +"%Y%m%d%H%S"`
cp /etc/php.ini $FN
if [[ ! -z $2 ]]; then
    if [[ "$2" = "--disable" ]]; then
		ACTION="disable"
	fi
fi
if [[ "$ACTION" = "disable" ]]; then
	cp /etc/php.ini /etc/php.ini.bak
	sed -i "s/disable_functions =/disable_functions=$FUNCTION/g" /etc/php.ini
else
	mv /etc/php.ini.bak /etc/php.ini
fi
