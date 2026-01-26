# CloudPanel Pre-Authentication Remote Code Execution  
*(v2.0.0 – v2.4.2)*

---

## 📖 Background

In **December 2024**, I wasn’t actively looking for CloudPanel vulnerabilities.

My initial plan was to research other applications. I had already discovered and reported multiple CloudPanel-related issues in the past, so mentally, I had “closed that chapter”.

I downloaded several other applications and began reviewing them — but reality hit quickly.  
Large codebases, tight time, and the kind of audits that demand full commitment.

Out of boredom more than intention, I decided to reopen CloudPanel one last time.  
Not to find new bugs — but simply to **verify whether previously reported vulnerabilities were truly patched**.

That small decision turned into something much bigger.

---

## 🔁 Context: Previous Research

This research directly connects to my earlier disclosure, **CVE-2023-35885**.

That vulnerability involved:
- authentication bypass
- PHP object deserialization
- attacker-controlled serialized data

During that disclosure, I clearly warned the vendor:

- `unserialize()` on untrusted input is inherently dangerous
- fixing the authentication logic alone is not enough
- unsafe deserialization often enables *multiple* exploitation paths

The issue was eventually marked as patched.

On paper, everything looked fine.

---

## ⚠️ Something Didn’t Feel Right

Curiosity got the better of me, so I reviewed the patched version (**v2.3.1**) myself.

Within minutes, something stood out.

Yes:
- the authentication bypass was fixed

But:
- **the unserialization logic was still present**
- cookie-based serialized data was still accepted
- there was no meaningful hardening or removal of unsafe deserialization

The exploit was gone —  
but the **dangerous primitive remained**.

That was the moment I realized this wasn’t over.

---

## 🎯 Turning Point

If unsafe deserialization still existed, then:

- the original exploit path might be closed
- but the attack surface was still alive

So I stopped looking at authentication logic altogether.

Instead, I shifted focus to:
- PHP packages bundled with CloudPanel
- known deserialization gadget chains
- behaviors triggered automatically during `unserialize()`

This changed everything.

---

## 🧩 Exploitation Path (High-Level)

While reviewing bundled dependencies, I identified **Doctrine components** within the CloudPanel environment.

By leveraging existing deserialization gadget chains, it became possible to:

- craft a malicious serialized payload
- trigger object behavior during deserialization
- write a session file
- inject executable PHP code into that session
- execute code **before authentication**

At this point, it was no longer theoretical.

**Pre-authentication remote code execution was achievable.**

---

## 🔓 From RCE to Root

CloudPanel runs its panel services under a system user named `clp`.

Once remote code execution was obtained:
- execution ran as the `clp` user
- the `clp` user was configured with **passwordless sudo**

Pre-Auth RCE
↓
clp user
↓
sudo (NOPASSWD)
↓
root


From unauthenticated access to full system compromise — in one chain.

---

## 📦 Affected Versions

- **Vulnerable:** CloudPanel `v2.0.0` – `v2.4.2`
- **Fixed:** CloudPanel `v2.5.0` and later

---

## 🧠 Root Cause

The root cause is **insecure deserialization of attacker-controlled cookie data**.

Although earlier patches fixed the authentication bypass, the core issue remained:
- unsafe deserialization
- reachable attack surface
- exploitable gadget chains

This allowed new exploitation paths to emerge.

---

## 🤝 Responsible Disclosure

- Discovered in **December 2024**
- Reported responsibly to the vendor
- Public details withheld until a fix was released
- No weaponized exploit code is included

This writeup focuses on the **research journey and architectural mistake**, not exploitation instructions.

---

## 💡 Final Thoughts

This vulnerability highlights a mistake that appears far too often:

> Fixing the exploit, without fixing the primitive.

Deserialization issues are rarely single-use bugs.  
If untrusted data is still being unserialized, the vulnerability often isn’t gone —  
it’s simply waiting for someone to look at it from a different angle.

---


The escalation chain was immediate:

