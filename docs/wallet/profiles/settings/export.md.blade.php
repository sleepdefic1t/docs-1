---
title: Profile Settings - Export
---

# Profile Settings: Export

Exporting allows users to backup and restore their Payvo Wallet profiles. This backup file includes all wallets and profile settings. Recovery mnemonic phrases are not included in this backup file. If a profile password is used, the recovery file will also require an import password.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-export.png)

<x-alert type="success">
Visit the '[Exporting a Profile](/docs/wallet/profiles/export)' documentation to learn how to create your backup file.
</x-alert>

## Exclude Empty Wallets

* **Disabled** (default): All wallets--including those with a zero balance--are exported.
* **Enabled**: All wallets with a zero balance are **not** exported.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-export-empty.png)

## Exclude Ledger Wallets

* **Disabled** (default): All wallets--including those from a Ledger device--are exported.
* **Enabled**: All wallets from a Ledger device are **not** exported.

![](/storage/docs/docs/wallet/assets/profiles/profiles-settings-export-ledger.png)

<x-alert type="warning">
Don't forget! If your profile uses a password, importing your profile will require the same password.
</x-alert>
