#!/bin/bash

source_folder="./data_eater/"
destination_folder="./Local_backup/"
prefix="Backup"

actual_date=$(date +"%Y-%m-%d %H-%M-%S")
mkdir "$destination_folder$actual_date - $prefix"
cp -rv "$source_folder" "$destination_folder$actual_date - $prefix"
