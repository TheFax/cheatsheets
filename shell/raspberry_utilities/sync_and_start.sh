#!/bin/bash

#Personalizzare le ultime due righe.

clear

exitCode=1
while [ $exitCode -ne 0 ]
do
  echo "Waiting for System clock sinchronization! INTERNET CONNECTION NECESSARY"
  sleep 1
  clear
  timedatectl | grep "synchronized: yes"
  exitCode=$?
done

cd Tendys
python3 tendys.py
