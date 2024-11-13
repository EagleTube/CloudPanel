# CloudPanelv2

[![CloudPanel](https://www.cloudpanel.io/assets/images/logo.svg)](https://cloudpanel.io)

## Security Recommendations for CloudPanel

This repository includes tips and best practices for managing your CloudPanel installation securely. Please follow the steps below based on your usage type (personal or business).

### 🔒 Port 8443 Security Advice

CloudPanel’s web-based management interface runs on port `8443`. To secure this, we advise:

1. **For Personal Use:**  
   - **Close Port 8443** to the public internet to prevent unauthorized access.
   - Use firewall rules to **allow only specific IP addresses** to access port 8443, such as your personal IP or VPN IP. This reduces the risk of brute-force attacks and unauthorized access.

   **Example**: Configure UFW (Uncomplicated Firewall) with specific IP access.
   ```bash
   # Allow access to port 8443 only from a specific IP
   sudo ufw allow from <YOUR_TRUSTED_IP> to any port 8443
   
2. **For Business Use:**
   - Always keep CloudPanel updated to the latest version to ensure you have the latest security patches and features. Updates often include critical fixes for known vulnerabilities.
   - Ensure proper firewall configurations to restrict access to trusted IPs where possible, especially if handling sensitive data.
  
### 📄 Keeping CloudPanel Updated

Keeping your CloudPanel updated is essential to prevent potential security risks. Here’s how to update:
   - Run the update command regularly:
   ```bash
   sudo clpctl-update
   ```
   - Set up an update schedule to check and apply updates automatically or as part of your regular maintenance routine.

### Documentation and Support
- **Official Documentation**: [CloudPanel Docs](https://cloudpanel.io/docs)
- **Community Forum**: [CloudPanel Discord](https://discord.cloudpanel.io/)
