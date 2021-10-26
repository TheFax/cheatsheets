#!/bin/bash

#Regolo l'ora prendendo quella di Google
sudo date -s $"$(wget -qSO- --max-redirect=0 google.com 2>&1 | grep Date: | cut -d' ' -f5-8)Z"

#Attivo regolazione automatica tramite ntp
sudo timedatectl set-ntp true

#Visualizzo schermata riassuntiva
timedatectl status
