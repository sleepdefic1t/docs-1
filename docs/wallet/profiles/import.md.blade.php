---
title: Importing Profiles
---

# Importing Profiles

The Payvo Wallet lets you easily restore your profile's settings and wallets from a single backup file. This comes in handy for things like migrating from the ARK Desktop Wallet or another computer.

<x-alert type="success">
Visit the '[Exporting a Profile](/docs/wallet/profiles/export)' documentation to learn how to create your backup file.
</x-alert>

## Getting Started

To get started importing your backed up profile, click **'Import it here.'** at the bottom of the profile sign-in page.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-focus.png)

## Import Types

The Payvo Wallet supports importing two kinds of backup files.

* `.dwe` - Payvo Wallet's Desktop Profile format.
* `.json` - ARK Desktop Wallet's Legacy Profile format.

### Payvo Wallet Backups

If your profile was exported using the Payvo Wallet, simply drag & drop your `.dwe` file to the outlined section below, or click **'Browse Files'** to select the backup file manually.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-dwe.png)

### ARK Desktop Wallet Backups

If your profile was exported using the ARK Desktop Wallet, select **'Click here.'** as shown in the image below.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-json-focus.png)

You'll then be able to drag & drop your `.json` file to the outlined section seen below, you may also click **'Browse Files'** to select the backup file manually.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-json.png)

<x-alert type="warning">
The ability to import a `.json` backup from the ARK Desktop Wallet will soon be removed. We recommend that you re-export your Profile in the new `.dwe` format using the Payvo Wallet and back it up for safe-keeping.
</x-alert>

---

![Import In Progress](/storage/docs/docs/wallet/assets/profiles/profiles-import-importing.png)

## Confirming your Details

### Protected Backups

If your backed-up profile was protected by a password, you'll be required to enter it here:

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-password.png)

<x-alert type="warning">
If you forget your profile's password, there is ***no*** way to recover it. You will need to [create a new profile](/docs/wallet/profiles/create) and [re-import your wallets](/docs/wallet/wallets/import).
</x-alert>

---

You'll then be given the option to either confirm your profile name or enter a new one.

Click **'Save & Finish'** when you're ready to proceed.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-is-encrypted.png)

### Non-Protected Backups

If your backed-up profile was **not** protected by a password, you'll be given the option to confirm your Profile name--or create a new one, and set a password if desired.

Click **'Save & Finish'** when you're ready to proceed.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-not-encrypted.png)

### Import Error

In the rare event that there was an issue importing your profile, you'll be presented with the error message seen below. This typically occurs when your backup file is corrupted.

You may click **'Retry'** to re-attempt import. If the problem persists, [contact our support team](https://ark.dev/contact).

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-error.png)

## Success

Congratulations! Upon successful import, you'll be returned to the profile sign-in page.

![](/storage/docs/docs/wallet/assets/profiles/profiles-import-imported.png)

<x-alert type="success">
Visit the '[Signing In](/docs/wallet/profiles/sign-in)' page to learn how to access your newly-imported profile.
</x-alert>
