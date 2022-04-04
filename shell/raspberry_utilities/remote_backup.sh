#!/bin/bash

source_folder="./data_eater"
destination_file="./data_eater_backup.zip"
username=""
ftp_address="ftp://ftp.back.altervista.org/"

zip -r "$destination_file" "$source_folder"

curl --netrc --upload-file "$destination_file" --user "$username" "$ftp_address"

rm "$destination_file"
