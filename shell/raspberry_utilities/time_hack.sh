#!/bin/bash

SERVER="www.google.com"

IS_SYNC="$(timedatectl status | grep 'System clock synchronized:')"

if [[ $IS_SYNC=="System clock synchronized: yes" ]]
then
  echo "L'orario di sistema è già sincronizzato via NTP."
  date
  exit
else
  echo "L'orario di sistema non risulta sincronizzato."

  echo "Setto l'orario rilevato dal server $SERVER"
  #Regolo l'ora prendendo quella di Google
  sudo date -s $"$(wget -qSO- --max-redirect=0 $SERVER 2>&1 | grep Date: | cut >

  #Attivo regolazione automatica tramite ntp
  sudo timedatectl set-ntp true

  #Visualizzo schermata riassuntiva
  timedatectl status
fi
