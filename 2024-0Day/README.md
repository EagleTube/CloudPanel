# CloudPanel Pre-Auth RCE (v2.0.0 – v2.4.2)

## Background

In November 2024, I wasn’t actively hunting for CloudPanel bugs.

At that time, I was planning to research other applications. I had already discovered and reported multiple CloudPanel-related vulnerabilities before, so the initial intention was to move on.

However, after downloading a few other applications and realizing how large and time-consuming their codebases were to audit, I decided to casually revisit CloudPanel — mainly to **verify whether previously reported issues were truly patched**.

That decision led to this discovery.

---

## Context: Previous Research

This research was closely related to my earlier work on **CVE-2023-35885**, where I discovered an authentication bypass in CloudPanel involving **PHP object deserialization**.

During that disclosure, I had already warned the vendor that:
- relying on `unserialize()` with attacker-controlled data was dangerous
- fixing only the authentication bypass without addressing the deserialization itself could leave room for further exploitation

At the time, the issue was marked as patched.

---

## Something Felt Off

Out of curiosity, I reviewed the patched version (**v2.3.1**) to ensure the fix was solid.

That’s when I noticed something alarming:

- The authentication bypass had been fixed
- **But the unserialize logic itself was still present**
- Cookie-based serialized data was still being processed
- There was no strong filtering or removal of unsafe deserialization

In other words, the patch addressed the symptom — not the root cause.

---

## Turning Point

At this point, the research direction became obvious.

If unsafe deserialization still existed, then:
- the attack surface might still be reachable
- only the original exploitation path had been closed

So instead of focusing on authentication logic, I shifted focus to:
- available PHP packages bundled with CloudPanel
- potential gadget chains usable via deserialization

---

## Exploitation Path (High-Level)

While reviewing bundled dependencies, I identified the presence of **Doctrine components**.

Using known deserialization gadget chains, it was possible to:
- craft a serialized payload
- abuse object behavior during deserialization
- write a session file
- inject executable PHP code into that session
- trigger execution pre-authentication

At this point, it was clear that **pre-authentication remote code execution** was achievable.

---

## From RCE to Root

CloudPanel runs its panel services under a system user named `clp`.

Once remote code execution was achieved:
- code execution ran in the context of the `clp` user
- the `clp` user was configured with **passwordless sudo access**

This meant exploitation flow was straightforward:
- Pre-Auth RCE → clp user → sudo → root
- From initial RCE to full root compromise.

---

## Affected Versions

- **Vulnerable:** CloudPanel `v2.0.0` – `v2.4.2`
- **Fixed:** CloudPanel `v2.5.0` and later

---

## Root Cause

The vulnerability was caused by **insecure deserialization of attacker-controlled cookie data**.

Although earlier patches addressed authentication bypass behavior, the underlying unsafe deserialization logic remained exploitable.

---

## Responsible Disclosure

- The issue was discovered in **November 2024**
- Exploitation details were withheld until a vendor fix was available
- No weaponized exploit code is included in this repository
- This writeup focuses on the research journey and root cause

---

## Final Thoughts

This vulnerability highlights a common mistake:

> Fixing the exploit path without fixing the root cause.

Deserialization bugs are rarely isolated issues.  
If untrusted data is still being unserialized, the vulnerability often isn’t truly gone — it’s just waiting for a new path.

---

## Credits

Discovered by **Muhammad Aizat*
