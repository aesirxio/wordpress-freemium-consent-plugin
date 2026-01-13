=== AesirX Consent ===
Contributors: aesirx,vikingtechguy,vietnguyen1406,devphutran
Tags: privacy, compliance, wordpress consent, consent, cmp
Requires at least: 5.9
Tested up to: 6.9
Stable tag: 1.0.0
Requires PHP: 7.4
License: GPL 3.0

Integrating first-party consent for GDPR/ePrivacy compliance.

== Description ==

AesirX CMP is a privacy-first Consent Management Platform for WordPress built for consent-before-tracking.

AesirX CMP helps you collect and manage user consent in a clear and compliant way - and, importantly, it helps you hold back scripts, cookies, and tracking technologies until consent is given using a first-party enforcement approach.

You get a practical CMP baseline for free forever, and you can upgrade to AesirX CMP Pro to unlock advanced automation, consent analytics, and additional compliance tooling.

= How AesirX CMP for WordPress Solves Problems: =

1. **Consent-before-tracking:** Configure consent flows and ensure tracking is blocked until the user opts in.
1. **Covers all tracking technologies:** Not just cookies, as the many alternatives that is non-compliant.
1. **First-party enforcement:** Manage consent inside WordPress without relying on third-party CMP services.
1. **Free forever:** CMP Freemium functionality is available at no cost.
1. **Upgradeable Pro versions:** Add advanced features when needed (AI advisor / auto-block, consent analytics, ID/age verification, privacy scanning, and more).

= Features (Free) =

* **Overview:** See your consent configuration status at a glance.
* **Consent Modal (Templates):** Create and customize your consent modal using ready-to-use templates.
* **Consent Logic (Basic):** Configure consent mode (opt-in / opt-out) and Global Privacy Controls (GPC) behavior (where applicable).
* **Consent Log:** Record consent events (log only - no consent analytics in free).
* **Geo-handling:** Apply region-aware consent behavior and templates.
* **Consent Shield (Lite):** Hold back tracking until consent using:
  * **WP plugin blocking + category mapping**
  * **Domain Shield / Path Shield rules**

Lite version does not include Permanent Block and does not include first-party/third-party blocking mode options.

= Pro Versions (Optional Upgrades) =

Upgrade to **AesirX CMP Pro** to unlock:

* **Consent Shield (Full):** Includes **Permanent Block** and advanced blocking modes/options.
* **Consent Analytics:** Analyze consent rates and consent performance.
* **AI Privacy Advisor:** Automation and recommendations to improve compliance and setup.
* **AI Auto-Blocking:** Configure block of 3rd parties and plugins based on AI Privacy Advisor.
* **Privacy Scanner:** Detect tracking technologies and compliance risks.
* **ID Verification:** Optional verification flows (e.g., age/ID) for regulated experiences using zero-knowledge proofs.

= 3rd party services =

AesirX CMP does not require third-party services for standard consent mode and consent enforcement.
However, AesirX CMP includes an **optional Decentralized Consent mode.** If the site owner enables Decentralized Consent and the site visitor chooses to use it, the plugin will load and use the following third-party services to establish the decentralized consent flow:

* **WalletConnect** (used to connect the visitor’s wallet for signing the decentralized consent action)
* **Concordium** (used as part of the decentralized consent verification and ID anchoring flow, depending on configuration)

These services are **not loaded** unless Decentralized Consent mode is enabled and selected by the visitor.

This may transmit wallet connection metadata and a signed consent payload.

When used for ID verification zero-knowledge proofs are used as privacy preserving technologies (PETs) to ensure the personal data is not shared with the website owner.

= Source code for compressed content =

Human-readable source code:
* AesirX CMP Freemium for WP: https://github.com/aesirxio/wordpress-freemium-consent-plugin

= Validation =

Terms of service: https://aesirx.io/terms-conditions
Privacy policy: https://aesirx.io/privacy-policy

== Changelog ==

= 1.0.1 =
* Optimize file size

= 1.0.0 =
* AesirX Freemium Consent
