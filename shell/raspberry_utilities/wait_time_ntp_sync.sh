#!/bin/bash

IS_SYNC="$(timedatectl status | grep 'System clock synchronized:')"

if [[ $IS_SYNC == *"yes"* ]]
then
   echo "System time is sinchronized via NTP."
else
   echo "Waiting for system time sinchronization..."
   IS_SYNC="$(timedatectl status | grep 'System clock synchronized:')"
   while [[ $IS_SYNC == *"no"* ]]
   do
      sleep 1
   done
   echo "System time is now sinchronized via NTP."
fi
