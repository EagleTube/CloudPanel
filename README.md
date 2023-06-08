# CVE-2023-33747 Cloudpanel.io

Author: @EagleTube<br>
Tested version: v2.0.0 – v2.2.2<br>
Patched version: v2.3.0<br>
Vendor homepage: CloudPanel.io<br>
Product: CloudPanel<br>

Requirements : 
1. Need authenticated user on Cloudpanel.
2. SSH enabled to run the python script.

Usage : 
```
wget https://github.com/EagleTube/CloudPanel/blob/main/CVE-2023-33747/CVE-2023-33747_GetRoot.py
chmod +x CVE-2023-33747_GetRoot.py
python3 CVE-2023-33747_GetRoot.py
```

# PROOF OF CONCEPT

Privilege Escalation in CloudPanel through path traversal from modifying file permission.
<br><br>
<img src='https://raw.githubusercontent.com/EagleTube/CloudPanel/main/Screenshot%20from%202023-06-06%2014-56-42.png'>

## CVE-????-????
Privilege Escalation in CloudPanel through command injection from clpctlWrapper.
<br><br>
<img src='https://raw.githubusercontent.com/EagleTube/CloudPanel/main/Screenshot%20from%202023-06-06%2015-00-21.png'>

## AFFECTED VERSION
CloudPanel v2.0.0 - v2.2.2

## PATCH VERSION
CloudPanel v2.3.0

## SPECIAL THANKS & REFERENCE
1. Datack Sdn Bhd <a href="https://www.datack.my/how-we-gain-cve-2023-33747-cloudpanel-io/">datack.my</a>
2. Maui <a href="https://sabily.info">sabily.info</a>
3. Farhan Phakhruddin (@badimayat)

