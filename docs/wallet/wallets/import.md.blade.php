---
title: Importing a Wallet
---

# Importing a Wallet

The Payvo Wallet allows each of your profiles to import wallets from a variety of [supported crypto networks](/docs/wallet/networks/supported).

Wallets may be imported using credentials like [BIP-39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki) mnemonic phrases, recovery secrets, or even its address or publicKey.

<x-alert type="info">
To send from a wallet, you must have access to its mnemonic or secret recovery phrase, regardless of how it was imported.
</x-alert>

Wallets imported using a mnemonic or secret recovery phrase also have the option to encrypt and store their credentials with a [BIP-38](https://github.com/bitcoin/bips/blob/master/bip-0038.mediawiki) password. This lets you spend from your wallet using only the encryption password itself while your recovery credentials remain put away for safe-keeping.

If your encryption password is ever forgotten or misplaced, you can simply [delete](/docs/wallet/wallets/delete) your wallet, then follow the directions on this page to import your wallet again.

## Getting Started

While signed in to your profile, click the **'Import'** button to get started.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-focus.png)

## Cryptoasset Selection

You'll now be asked to select for which network you'd like to import a wallet.

When you've made your selection, click the **'Continue'** button to proceed.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-cryptoassets.png)

<x-alert type="info">
Learn about enabling Development and Test Networks by visiting the documentation for '[General Settings](/docs/wallet/profiles/settings/general#development-and-test-networks)'.
</x-alert>

## Entering your Import Credentials

In this section, you will be asked to enter your recovery credentials.

There are several types of import credentials you may use:

* **Mnemonic**: A 12 or 24-word mnemonic recovery passphrase associated with your selected crypto network.
* **Secret**: A custom word or phrase not required to be a particular length associated with your selected crypto network.
* **Address**: An address associated with the wallet of your selected crypto network.
* **PublicKey**: A publicKey associated with the wallet of your selected crypto network.

---

Select the appropriate credential type from the list below.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-credentials.png)

---

Next, enter the credential itself and click the **'Continue'** button when you are ready to proceed.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-credentials-continue.png)

## Creating an Encryption Password

If you've chosen to import via mnemonic or secret recovery phrase, you'll now be given the option to set a [BIP38](https://github.com/bitcoin/bips/blob/master/bip-0038.mediawiki) encryption password. This password will be associated **only** with this particular wallet, it is distinct from a profile password and is not a replacement for your wallet's mnemonic recovery phrase.

<x-alert type="warning">
Visit the ['Securing Wallets'](/docs/wallet/wallets/security) documentation page for **important information** about securing your wallet's credentials.
</x-alert>

If you do **not** wish to use an encryption password, you may click the **'Skip'** button. Opting to skip this means you will be required to enter your recovery phrase any time you wish to sign a transaction or message.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-password-empty.png)

---

If you would like to make use of an encryption password, enter and confirm your new password, then click **'Continue'** to proceed. With this option, you will only need to enter this encryption password when signing a transaction or message.

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-password-set.png)

## Success

Congrats! You've successfully imported a wallet!

![](/storage/docs/docs/wallet/assets/wallets/wallets-import-completed.png)

<x-alert type="danger">
Don't forget to keep your recovery credentials and encryption password safe. Being careless with these may lead to a complete loss of funds.
</x-alert>
