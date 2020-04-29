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

#read e if
echo -n "Enter a number: "
read VAR
if [[ $VAR -gt 10 ]]
then
  echo "The variable is greater than 10."
else
  echo "The variable is equal or less than 10."
fi

# Below are some of the most commonly used operators:
    -n VAR                   - True if the length of VAR is greater than zero.
    -z VAR                   - True if the VAR is empty.
    STRING1 = STRING2        - True if STRING1 and STRING2 are equal.
    STRING1 != STRING2       - True if STRING1 and STRING2 are not equal.
    INTEGER1 -eq INTEGER2    - True if INTEGER1 and INTEGER2 are equal.
    INTEGER1 -gt INTEGER2    - True if INTEGER1 is greater than INTEGER2.
    INTEGER1 -lt INTEGER2    - True if INTEGER1 is less than INTEGER2.
    INTEGER1 -ge INTEGER2    - True if INTEGER1 is equal or greater than INTEGER2.
    INTEGER1 -le INTEGER2    - True if INTEGER1 is equal or less than INTEGER2.
    -h FILE                  - True if the FILE exists and is a symbolic link.
    -r FILE                  - True if the FILE exists and is readable.
    -w FILE                  - True if the FILE exists and is writable.
    -x FILE                  - True if the FILE exists and is executable.
    -d FILE                  - True if the FILE exists and is a directory.
    -e FILE                  - True if the FILE exists and is a file, regardless of type (node, directory, socket, etc.).
    -f FILE                  - True if the FILE exists and is a regular file (not a directory or device)
