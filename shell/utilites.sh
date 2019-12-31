#!/bin/sh
#!/bin/bash

#remove a configuration line from a file
sed -i '/Line to remove/d' /etc/file.conf

#remove if file exists
if [ -f /usr/file.txt ]; then
  rm -f /usr/file.txt
fi

#variable assegnation
plain_ip_url="icanhazip.com"
ip=$(wget -qO- $plain_ip_url)

#loops forever:
while (true); do
  ...
done
