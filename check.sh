#!/bin/bash
FILE=$1
if [ -f $FILE ]; then
   sh assets.sh
else
   cp ngrok /data/data/com.termux/files/usr/bin/
   sh assets.sh
fi
