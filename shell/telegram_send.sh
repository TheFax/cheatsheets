#!/bin/bash

# Dependencies:
# apt-get install curl

# Example:
# ./telegram_send.sh "This is my message"

TOKEN="YOUR_TOKEN"
CHAT_ID="YOUR_CHAT_ID"
MESSAGE=$*
URL="https://api.telegram.org/bot$TOKEN/sendMessage"

echo -e "SEND TELEGRAM NOTIFICATION..."

while ! ping -c 1 8.8.8.8 | grep 'time=' > /dev/null ; do
  echo -e ">   Waiting internet connection..."
  sleep 1
done
echo -e ">   Internet connection found!"

echo -e ">   Send telegram notification..."
curl -s -X POST $URL -d chat_id=$CHAT_ID -d text="$MESSAGE" > /dev/null
