#!/bin/sh

#remove a configuration line from a file
sed -i '/Line to remove/d' /etc/file.conf

#remove if file exists
if [ -f /usr/file.txt ]; then
  rm -f /usr/file.txt
fi

