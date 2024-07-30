#!/bin/bash

# Check if the script is run as root
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 
   exit 1
fi

# Create the user 'bob' with home directory /tmp and shell /bin/bash
useradd -m -d /tmp -s /bin/bash bob

# Set the password for the user 'bob'
echo "bob:B0B@1337" | chpasswd

# Verify if the user was created successfully
if id "bob" &>/dev/null; then
    echo "User 'bob' created successfully."
else
    echo "Failed to create user 'bob'."
    exit 1
fi

exit 0
